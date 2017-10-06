# DHL Express SOAP API client

## Tracking

Example Tracking Service that is able to authenticate and track a package:

```php

use DHL\Express\Webservice\Soap\WssWsuAuthHeader;
use DHL\Express\Webservice\Tracking\ArrayOfAWBNumber;
use DHL\Express\Webservice\Tracking\GblDHLExpressTrack;
use DHL\Express\Webservice\Tracking\LevelOfDetails;
use DHL\Express\Webservice\Tracking\PublicTrackingRequest;
use DHL\Express\Webservice\Tracking\Request;
use DHL\Express\Webservice\Tracking\ServiceHeader;
use DHL\Express\Webservice\Tracking\TrackingRequest;
use DHL\Express\Webservice\Tracking\TrackShipmentRequest;
use Ramsey\Uuid\Uuid;

class TrackingService
{
    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $accountNumber;

    /**
     * @param string $user
     * @param string $password
     * @param string $accountNumber
     */
    public function __construct(string $user, string $password, string $accountNumber)
    {
        $this->user = $user;
        $this->password = $password;
        $this->accountNumber = $accountNumber;
    }

    /**
     * Tracks a package.
     *
     * @param string $trackingNumber
     * @param string $levelOfDetails
     * @return \DHL\Express\Webservice\Tracking\trackShipmentRequestResponse
     */
    public function track($trackingNumber, $levelOfDetails = LevelOfDetails::LAST_CHECK_POINT_ONLY)
    {
        $webservice = $this->prepareWebservice();
        $parameters = new TrackShipmentRequest();

        $trackingRequest = new TrackingRequest(new Request(new ServiceHeader(new \DateTime(), implode('', explode('-', Uuid::uuid4())))), $levelOfDetails);
        $trackingRequest->setAWBNumber(new ArrayOfAWBNumber([$trackingNumber]));

        $parameters->setTrackingRequest(new PublicTrackingRequest($trackingRequest));

        return $webservice->trackShipmentRequest($parameters);
    }

    /**
     * @return GblDHLExpressTrack
     */
    private function prepareWebservice(): GblDHLExpressTrack
    {
        $track = new GblDHLExpressTrack(['trace' => 1]);

        $wsse_header = WssWsuAuthHeader::soapClientWSSecurityHeader($this->user, $this->password, $this->accountNumber);
        $track->__setSoapHeaders([$wsse_header]);

        return $track;
    }
}

```

## License

MIT