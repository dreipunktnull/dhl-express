<?php

namespace DHL\Express\Webservice\Soap;

use SimpleXMLElement;
use SoapHeader;
use SoapVar;
use stdClass;

class WssWsuAuthHeader extends SoapHeader
{
    private $wss_ns = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';
    private $wsu_ns = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd';

    public function __construct($user, $pass, $customer, $ns = null)
    {
        if ($ns) {
            $this->wss_ns = $ns;
        }

        $nonce = md5(date('%s') + rand());
        $ts = gmdate('Y-m-d\TH:i:s\Z'); // <wsu:Created>2009-05-19T16:02:45.168Z</wsu:Created>
        $digest = base64_encode(sha1($nonce + $pass + $ts));
        $expires_ts = gmdate('Y-m-d\TH:i:s\Z', time() + (1000 * 600)); // <wsu:Created>2009-05-19T16:02:45.168Z</wsu:Created>

        $timestamp_obj = new stdClass();
        $timestamp_obj->Created = new SoapVar($ts, XSD_DATE, NULL, $this->wsu_ns, NULL, $this->wsu_ns);
        $timestamp_obj->Expires = new SoapVar($expires_ts, XSD_DATE, NULL, $this->wsu_ns, NULL, $this->wsu_ns);

        $auth = new stdClass();
        $auth->Username = new SoapVar($user, XSD_STRING, NULL, $this->wss_ns, NULL, $this->wss_ns);
        $auth->Password = new SoapVar($digest, XSD_STRING, NULL, $this->wss_ns, NULL, $this->wss_ns);
        $auth->Nonce = new SoapVar(base64_encode($nonce), XSD_STRING, NULL, $this->wss_ns, NULL, $this->wss_ns);
        $auth->Created = new SoapVar($ts, XSD_DATE, NULL, $this->wsu_ns, NULL, $this->wsu_ns);

        $security_obj = new stdClass();

        $security_obj->UsernameToken = new SoapVar($auth, SOAP_ENC_OBJECT, NULL, $this->wss_ns, 'UsernameToken', $this->wss_ns);
        $security_obj->Timestamp = new SoapVar($timestamp_obj, SOAP_ENC_OBJECT, NULL, $this->wsu_ns, 'Timestamp', $this->wsu_ns);

        $security_sv = new SoapVar(
            new SoapVar($security_obj, SOAP_ENC_OBJECT, NULL, $this->wss_ns, 'Security', $this->wss_ns),
            SOAP_ENC_OBJECT, NULL, $this->wss_ns, 'Security', $this->wss_ns);

        parent::__construct($this->wss_ns, 'Security', $security_sv, true);
    }

    /**
     * This function implements a WS-Security authentication for PHP.
     *
     * @access private
     * @param string $user
     * @param string $password
     * @return SoapHeader
     */
    public static function soapClientWSSecurityHeader($user, $password, $id)
    {
        // Creating date using yyyy-mm-ddThh:mm:ssZ format
        $tm_created = gmdate('Y-m-d\TH:i:s\Z');
        $tm_expires = gmdate('Y-m-d\TH:i:s\Z', gmdate('U') + 180); //only necessary if using the timestamp element

        // Generating and encoding a random number
        $simple_nonce = mt_rand();
        $encoded_nonce = base64_encode($simple_nonce);

        // Compiling WSS string
        $passdigest = base64_encode(sha1($simple_nonce . $tm_created . $password, true));

        // Initializing namespaces
        $ns_wsse = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';
        $ns_wsu = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd';
        $password_type = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText';
        $encoding_type = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-soap-message-security-1.0#Base64Binary';

        // Creating WSS identification header using SimpleXML
        $root = new SimpleXMLElement('<root/>');

        $security = $root->addChild('wsse:Security', null, $ns_wsse);

        //the timestamp element is not required by all servers
        $timestamp = $security->addChild('wsu:Timestamp', null, $ns_wsu);
        $timestamp->addChild('wsu:Created', $tm_created, $ns_wsu);
        $timestamp->addChild('wsu:Expires', $tm_expires, $ns_wsu);

        $usernameToken = $security->addChild('wsse:UsernameToken', null, $ns_wsse);
        $usernameToken->addAttribute('wsu:Id', $id, $ns_wsu);
        $usernameToken->addChild('wsse:Username', $user, $ns_wsse);
        $usernameToken->addChild('wsse:Password', $password, $ns_wsse)->addAttribute('Type', $password_type);
        $usernameToken->addChild('wsse:Nonce', $encoded_nonce, $ns_wsse)->addAttribute('EncodingType', $encoding_type);
        $usernameToken->addChild('wsu:Created', $tm_created, $ns_wsu);

        // Recovering XML value from that object
        $root->registerXPathNamespace('wsse', $ns_wsse);
        $full = $root->xpath('/root/wsse:Security');
        $auth = $full[0]->asXML();

        return new SoapHeader($ns_wsse, 'Security', new SoapVar($auth, XSD_ANYXML), true);
    }
}
