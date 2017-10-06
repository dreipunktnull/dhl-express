<?php


 function autoload_1e9424796b2a9ca9521d1263b8149d83($class)
{
    $classes = array(
        'DHL\Express\Webservice\Tracking\GblDHLExpressTrack' => __DIR__ .'/GblDHLExpressTrack.php',
        'DHL\Express\Webservice\Tracking\TrackShipmentRequest' => __DIR__ .'/trackShipmentRequest.php',
        'DHL\Express\Webservice\Tracking\TrackShipmentRequestResponse' => __DIR__ .'/trackShipmentRequestResponse.php',
        'DHL\Express\Webservice\Tracking\PublicTrackingRequest' => __DIR__ .'/pubTrackingRequest.php',
        'DHL\Express\Webservice\Tracking\TrackingRequest' => __DIR__ .'/TrackingRequest.php',
        'DHL\Express\Webservice\Tracking\Request' => __DIR__ .'/Request.php',
        'DHL\Express\Webservice\Tracking\ServiceHeader' => __DIR__ .'/ServiceHeader.php',
        'DHL\Express\Webservice\Tracking\ArrayOfAWBNumber' => __DIR__ .'/ArrayOfAWBNumber.php',
        'DHL\Express\Webservice\Tracking\ArrayOfTrackingPieceID' => __DIR__ .'/ArrayOfTrackingPieceID.php',
        'DHL\Express\Webservice\Tracking\LevelOfDetails' => __DIR__ .'/LevelOfDetails.php',
        'DHL\Express\Webservice\Tracking\pubTrackingResponse' => __DIR__ .'/pubTrackingResponse.php',
        'DHL\Express\Webservice\Tracking\TrackingResponse' => __DIR__ .'/TrackingResponse.php',
        'DHL\Express\Webservice\Tracking\Response' => __DIR__ .'/Response.php',
        'DHL\Express\Webservice\Tracking\ArrayOfAWBInfo' => __DIR__ .'/ArrayOfAWBInfo.php',
        'DHL\Express\Webservice\Tracking\AWBInfo' => __DIR__ .'/AWBInfo.php',
        'DHL\Express\Webservice\Tracking\Status' => __DIR__ .'/Status.php',
        'DHL\Express\Webservice\Tracking\ArrayOfCondition' => __DIR__ .'/ArrayOfCondition.php',
        'DHL\Express\Webservice\Tracking\Condition' => __DIR__ .'/Condition.php',
        'DHL\Express\Webservice\Tracking\ShipmentInfo' => __DIR__ .'/ShipmentInfo.php',
        'DHL\Express\Webservice\Tracking\OriginServiceArea' => __DIR__ .'/OriginServiceArea.php',
        'DHL\Express\Webservice\Tracking\DestinationServiceArea' => __DIR__ .'/DestinationServiceArea.php',
        'DHL\Express\Webservice\Tracking\WeightUnit' => __DIR__ .'/WeightUnit.php',
        'DHL\Express\Webservice\Tracking\ArrayOfShipmentEvent' => __DIR__ .'/ArrayOfShipmentEvent.php',
        'DHL\Express\Webservice\Tracking\ShipmentEvent' => __DIR__ .'/ShipmentEvent.php',
        'DHL\Express\Webservice\Tracking\ServiceEvent' => __DIR__ .'/ServiceEvent.php',
        'DHL\Express\Webservice\Tracking\ServiceArea' => __DIR__ .'/ServiceArea.php',
        'DHL\Express\Webservice\Tracking\Reference' => __DIR__ .'/Reference.php',
        'DHL\Express\Webservice\Tracking\TrackingPieces' => __DIR__ .'/TrackingPieces.php',
        'DHL\Express\Webservice\Tracking\ArrayOfPieceInfo' => __DIR__ .'/ArrayOfPieceInfo.php',
        'DHL\Express\Webservice\Tracking\PieceInfo' => __DIR__ .'/PieceInfo.php',
        'DHL\Express\Webservice\Tracking\PieceDetails' => __DIR__ .'/PieceDetails.php',
        'DHL\Express\Webservice\Tracking\ArrayOfPieceEvent' => __DIR__ .'/ArrayOfPieceEvent.php',
        'DHL\Express\Webservice\Tracking\PieceEvent' => __DIR__ .'/PieceEvent.php',
        'DHL\Express\Webservice\Tracking\ShipperReference' => __DIR__ .'/ShipperReference.php',
        'DHL\Express\Webservice\Tracking\Fault' => __DIR__ .'/Fault.php',
        'DHL\Express\Webservice\Tracking\ArrayOfPieceFault' => __DIR__ .'/ArrayOfPieceFault.php',
        'DHL\Express\Webservice\Tracking\PieceFault' => __DIR__ .'/PieceFault.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_1e9424796b2a9ca9521d1263b8149d83');

// Do nothing. The rest is just leftovers from the code generation.
{
}
