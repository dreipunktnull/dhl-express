<?php

namespace DHL\Express\Webservice\Tracking;

class GblDHLExpressTrack extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'trackShipmentRequest' => TrackShipmentRequest::class,
      'trackShipmentRequestResponse' => TrackShipmentRequestResponse::class,
      'pubTrackingRequest' => PublicTrackingRequest::class,
      'TrackingRequest' => TrackingRequest::class,
      'Request' => Request::class,
      'ServiceHeader' => ServiceHeader::class,
      'ArrayOfAWBNumber' => ArrayOfAWBNumber::class,
      'ArrayOfTrackingPieceID' => ArrayOfTrackingPieceID::class,
      'pubTrackingResponse' => pubTrackingResponse::class,
      'TrackingResponse' => TrackingResponse::class,
      'Response' => Response::class,
      'ArrayOfAWBInfo' => ArrayOfAWBInfo::class,
      'AWBInfo' => AWBInfo::class,
      'Status' => Status::class,
      'ArrayOfCondition' => ArrayOfCondition::class,
      'Condition' => Condition::class,
      'ShipmentInfo' => ShipmentInfo::class,
      'OriginServiceArea' => OriginServiceArea::class,
      'DestinationServiceArea' => DestinationServiceArea::class,
      'ArrayOfShipmentEvent' => ArrayOfShipmentEvent::class,
      'ShipmentEvent' => ShipmentEvent::class,
      'ServiceEvent' => ServiceEvent::class,
      'ServiceArea' => ServiceArea::class,
      'Reference' => Reference::class,
      'TrackingPieces' => TrackingPieces::class,
      'ArrayOfPieceInfo' => ArrayOfPieceInfo::class,
      'PieceInfo' => PieceInfo::class,
      'PieceDetails' => PieceDetails::class,
      'ArrayOfPieceEvent' => ArrayOfPieceEvent::class,
      'PieceEvent' => PieceEvent::class,
      'ShipperReference' => ShipperReference::class,
      'Fault' => Fault::class,
      'ArrayOfPieceFault' => ArrayOfPieceFault::class,
      'PieceFault' => PieceFault::class,
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
     * @param TrackShipmentRequest $parameters
     * @return TrackShipmentRequestResponse
     */
    public function trackShipmentRequest(TrackShipmentRequest $parameters)
    {
      return $this->__soapCall('trackShipmentRequest', array($parameters));
    }

}
