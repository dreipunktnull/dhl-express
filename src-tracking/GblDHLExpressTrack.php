<?php

namespace DHL\Express\Webservice\Tracking;

class GblDHLExpressTrack extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'trackShipmentRequest' => 'DHL\\Express\\Webservice\\Tracking\\trackShipmentRequest',
      'trackShipmentRequestResponse' => 'DHL\\Express\\Webservice\\Tracking\\trackShipmentRequestResponse',
      'pubTrackingRequest' => 'DHL\\Express\\Webservice\\Tracking\\pubTrackingRequest',
      'TrackingRequest' => 'DHL\\Express\\Webservice\\Tracking\\TrackingRequest',
      'Request' => 'DHL\\Express\\Webservice\\Tracking\\Request',
      'ServiceHeader' => 'DHL\\Express\\Webservice\\Tracking\\ServiceHeader',
      'ArrayOfAWBNumber' => 'DHL\\Express\\Webservice\\Tracking\\ArrayOfAWBNumber',
      'ArrayOfTrackingPieceID' => 'DHL\\Express\\Webservice\\Tracking\\ArrayOfTrackingPieceID',
      'pubTrackingResponse' => 'DHL\\Express\\Webservice\\Tracking\\pubTrackingResponse',
      'TrackingResponse' => 'DHL\\Express\\Webservice\\Tracking\\TrackingResponse',
      'Response' => 'DHL\\Express\\Webservice\\Tracking\\Response',
      'ArrayOfAWBInfo' => 'DHL\\Express\\Webservice\\Tracking\\ArrayOfAWBInfo',
      'AWBInfo' => 'DHL\\Express\\Webservice\\Tracking\\AWBInfo',
      'Status' => 'DHL\\Express\\Webservice\\Tracking\\Status',
      'ArrayOfCondition' => 'DHL\\Express\\Webservice\\Tracking\\ArrayOfCondition',
      'Condition' => 'DHL\\Express\\Webservice\\Tracking\\Condition',
      'ShipmentInfo' => 'DHL\\Express\\Webservice\\Tracking\\ShipmentInfo',
      'OriginServiceArea' => 'DHL\\Express\\Webservice\\Tracking\\OriginServiceArea',
      'DestinationServiceArea' => 'DHL\\Express\\Webservice\\Tracking\\DestinationServiceArea',
      'ArrayOfShipmentEvent' => 'DHL\\Express\\Webservice\\Tracking\\ArrayOfShipmentEvent',
      'ShipmentEvent' => 'DHL\\Express\\Webservice\\Tracking\\ShipmentEvent',
      'ServiceEvent' => 'DHL\\Express\\Webservice\\Tracking\\ServiceEvent',
      'ServiceArea' => 'DHL\\Express\\Webservice\\Tracking\\ServiceArea',
      'Reference' => 'DHL\\Express\\Webservice\\Tracking\\Reference',
      'TrackingPieces' => 'DHL\\Express\\Webservice\\Tracking\\TrackingPieces',
      'ArrayOfPieceInfo' => 'DHL\\Express\\Webservice\\Tracking\\ArrayOfPieceInfo',
      'PieceInfo' => 'DHL\\Express\\Webservice\\Tracking\\PieceInfo',
      'PieceDetails' => 'DHL\\Express\\Webservice\\Tracking\\PieceDetails',
      'ArrayOfPieceEvent' => 'DHL\\Express\\Webservice\\Tracking\\ArrayOfPieceEvent',
      'PieceEvent' => 'DHL\\Express\\Webservice\\Tracking\\PieceEvent',
      'ShipperReference' => 'DHL\\Express\\Webservice\\Tracking\\ShipperReference',
      'Fault' => 'DHL\\Express\\Webservice\\Tracking\\Fault',
      'ArrayOfPieceFault' => 'DHL\\Express\\Webservice\\Tracking\\ArrayOfPieceFault',
      'PieceFault' => 'DHL\\Express\\Webservice\\Tracking\\PieceFault',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://wsbexpress.dhl.com:443/sndpt/glDHLExpressTrack?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param trackShipmentRequest $parameters
     * @return trackShipmentRequestResponse
     */
    public function trackShipmentRequest(trackShipmentRequest $parameters)
    {
      return $this->__soapCall('trackShipmentRequest', array($parameters));
    }

}
