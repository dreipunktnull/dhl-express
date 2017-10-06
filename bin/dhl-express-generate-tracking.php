<?php
require_once __DIR__ . '/../vendor/autoload.php';

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config([
        'inputFile' => 'https://wsbexpress.dhl.com:443/sndpt/glDHLExpressTrack?WSDL',
        'outputDir' => 'src-tracking',
        'namespaceName' => 'DHL\\Express\\Webservice\\Tracking',
        'operationNames' => 'trackShipmentRequest',
        'sharedTypes' => true,
    ])
);
