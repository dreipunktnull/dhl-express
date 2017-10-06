<?php

namespace DHL\Express\Webservice\Soap;


use SoapHeader;
use SoapVar;

class AuthHeader
{
    protected $nonce;

    protected $timestamp;

    private $OASIS = 'http://docs.oasis-open.org/wss/2004/01';
    const PASSWORD_DIGEST = 'PasswordDigest';
    const PASSWORD_TEXT = 'PasswordText';

    /**
     * WS-Security Username
     * @var string
     */
    private $username;

    /**
     * WS-Security Password
     * @var string
     */
    private $password;

    /**
     * WS-Security PasswordType
     * @var string
     */
    private $passwordType;

    /**
     * @var string
     */
    private $customerId;

    public function __construct($username, $password, $passwordType, $customerId)
    {
        $this->username = $username;
        $this->password = $password;
        $this->passwordType = $passwordType;
        $this->customerId = $customerId;
    }

    /**
     * Generate password digest.
     *
     * Using the password directly may work also, but it's not secure to transmit it without encryption.
     * And anyway, at least with axis+wss4j, the nonce and timestamp are mandatory anyway.
     *
     * @return string   base64 encoded password digest
     */
    private function generatePasswordDigest()
    {
        $this->nonce = mt_rand();
        $this->timestamp = gmdate('Y-m-d\TH:i:s\Z');

        $packedNonce = pack('H*', $this->nonce);
        $packedTimestamp = pack('a*', $this->timestamp);
        $packedPassword = pack('a*', $this->password);

        $hash = sha1($packedNonce . $packedTimestamp . $packedPassword);
        $packedHash = pack('H*', $hash);

        return base64_encode($packedHash);
    }

    /**
     * Generates WS-Security headers
     *
     * @return SoapHeader
     */
    public function generateWSSecurityHeader()
    {
        if ($this->passwordType === self::PASSWORD_DIGEST) {
            $password = $this->generatePasswordDigest();
            $nonce = sha1($this->nonce);
        } elseif ($this->passwordType === self::PASSWORD_TEXT) {
            $password = $this->password;
            $nonce = sha1(mt_rand());
        } else {
            return null;
        }
        $xml = '
<wsse:Security SOAP-ENV:mustUnderstand="1" xmlns:wsse="' . $this->OASIS . '/oasis-200401-wss-wssecurity-secext-1.0.xsd">
	<wsse:UsernameToken >
	<wsse:Username>' . $this->username . '</wsse:Username>
	<wsse:Password Type="' . $this->OASIS . '/oasis-200401-wss-username-token-profile-1.0#' . $this->passwordType . '">' . $password . '</wsse:Password>
	<wsse:Nonce EncodingType="' . $this->OASIS . '/oasis-200401-wss-soap-message-security-1.0#Base64Binary">' . $nonce . '</wsse:Nonce>';

        if ($this->passwordType === self::PASSWORD_DIGEST) {
            $xml .= "\n\t" . '<wsu:Created xmlns:wsu="' . $this->OASIS . '/oasis-200401-wss-wssecurity-utility-1.0.xsd">' . $this->timestamp . '</wsu:Created>';
        }

        $xml .= '
	</wsse:UsernameToken>
</wsse:Security>';

        return new SoapHeader(
            $this->OASIS . '/oasis-200401-wss-wssecurity-secext-1.0.xsd',
            'Security',
            new SoapVar($xml, XSD_ANYXML),
            true);
    }
}
