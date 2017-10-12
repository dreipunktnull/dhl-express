<?php

use DHL\Express\Webservice\Tracking\GblDHLExpressTrack;
use DHL\Express\Webservice\Tracking\TrackShipmentRequest;
use DHL\Express\Webservice\Tracking\TrackShipmentRequestResponse;
use DHL\Express\Webservice\Tracking\PublicTrackingRequest;
use DHL\Express\Webservice\Tracking\TrackingRequest;
use DHL\Express\Webservice\Tracking\Request;
use DHL\Express\Webservice\Tracking\ServiceHeader;
use DHL\Express\Webservice\Tracking\ArrayOfAWBNumber;
use DHL\Express\Webservice\Tracking\ArrayOfTrackingPieceID;
use DHL\Express\Webservice\Tracking\LevelOfDetails;
use DHL\Express\Webservice\Tracking\pubTrackingResponse;
use DHL\Express\Webservice\Tracking\TrackingResponse;
use DHL\Express\Webservice\Tracking\Response;
use DHL\Express\Webservice\Tracking\ArrayOfAWBInfo;
use DHL\Express\Webservice\Tracking\AWBInfo;
use DHL\Express\Webservice\Tracking\Status;
use DHL\Express\Webservice\Tracking\ArrayOfCondition;
use DHL\Express\Webservice\Tracking\Condition;
use DHL\Express\Webservice\Tracking\ShipmentInfo;
use DHL\Express\Webservice\Tracking\OriginServiceArea;
use DHL\Express\Webservice\Tracking\DestinationServiceArea;
use DHL\Express\Webservice\Tracking\WeightUnit;
use DHL\Express\Webservice\Tracking\ArrayOfShipmentEvent;
use DHL\Express\Webservice\Tracking\ShipmentEvent;
use DHL\Express\Webservice\Tracking\ServiceEvent;
use DHL\Express\Webservice\Tracking\ServiceArea;
use DHL\Express\Webservice\Tracking\Reference;
use DHL\Express\Webservice\Tracking\TrackingPieces;
use DHL\Express\Webservice\Tracking\ArrayOfPieceInfo;
use DHL\Express\Webservice\Tracking\PieceInfo;
use DHL\Express\Webservice\Tracking\PieceDetails;
use DHL\Express\Webservice\Tracking\ArrayOfPieceEvent;
use DHL\Express\Webservice\Tracking\PieceEvent;
use DHL\Express\Webservice\Tracking\ShipperReference;
use DHL\Express\Webservice\Tracking\Fault;
use DHL\Express\Webservice\Tracking\ArrayOfPieceFault;
use DHL\Express\Webservice\Tracking\PieceFault;

function autoload_1e9424796b2a9ca9521d1263b8149d83($class)
{
    $classes = array(
        GblDHLExpressTrack::class => __DIR__ .'/GblDHLExpressTrack.php',
        TrackShipmentRequest::class => __DIR__ .'/trackShipmentRequest.php',
        TrackShipmentRequestResponse::class => __DIR__ .'/trackShipmentRequestResponse.php',
        PublicTrackingRequest::class => __DIR__ .'/pubTrackingRequest.php',
        TrackingRequest::class => __DIR__ .'/TrackingRequest.php',
        Request::class => __DIR__ .'/Request.php',
        ServiceHeader::class => __DIR__ .'/ServiceHeader.php',
        ArrayOfAWBNumber::class => __DIR__ .'/ArrayOfAWBNumber.php',
        ArrayOfTrackingPieceID::class => __DIR__ .'/ArrayOfTrackingPieceID.php',
        LevelOfDetails::class => __DIR__ .'/LevelOfDetails.php',
        pubTrackingResponse::class => __DIR__ .'/pubTrackingResponse.php',
        TrackingResponse::class => __DIR__ .'/TrackingResponse.php',
        Response::class => __DIR__ .'/Response.php',
        ArrayOfAWBInfo::class => __DIR__ .'/ArrayOfAWBInfo.php',
        AWBInfo::class => __DIR__ .'/AWBInfo.php',
        Status::class => __DIR__ .'/Status.php',
        ArrayOfCondition::class => __DIR__ .'/ArrayOfCondition.php',
        Condition::class => __DIR__ .'/Condition.php',
        ShipmentInfo::class => __DIR__ .'/ShipmentInfo.php',
        OriginServiceArea::class => __DIR__ .'/OriginServiceArea.php',
        DestinationServiceArea::class => __DIR__ .'/DestinationServiceArea.php',
        WeightUnit::class => __DIR__ .'/WeightUnit.php',
        ArrayOfShipmentEvent::class => __DIR__ .'/ArrayOfShipmentEvent.php',
        ShipmentEvent::class => __DIR__ .'/ShipmentEvent.php',
        ServiceEvent::class => __DIR__ .'/ServiceEvent.php',
        ServiceArea::class => __DIR__ .'/ServiceArea.php',
        Reference::class => __DIR__ .'/Reference.php',
        TrackingPieces::class => __DIR__ .'/TrackingPieces.php',
        ArrayOfPieceInfo::class => __DIR__ .'/ArrayOfPieceInfo.php',
        PieceInfo::class => __DIR__ .'/PieceInfo.php',
        PieceDetails::class => __DIR__ .'/PieceDetails.php',
        ArrayOfPieceEvent::class => __DIR__ .'/ArrayOfPieceEvent.php',
        PieceEvent::class => __DIR__ .'/PieceEvent.php',
        ShipperReference::class => __DIR__ .'/ShipperReference.php',
        Fault::class => __DIR__ .'/Fault.php',
        ArrayOfPieceFault::class => __DIR__ .'/ArrayOfPieceFault.php',
        PieceFault::class => __DIR__ .'/PieceFault.php'
    );

    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_1e9424796b2a9ca9521d1263b8149d83');
