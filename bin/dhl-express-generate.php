<?php
require_once __DIR__ . '/../vendor/autoload.php';

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config([
        'inputFile' => 'https://wsbexpress.dhl.com/sndpt/expressRateBook?WSDL',
        'outputDir' => 'src-gen',
        'namespaceName' => 'DHL\\Express\\Webservice',
        'operationNames' => 'createShipmentRequest, getRateRequest, deleteShipmentRequest',
        'sharedTypes' => true,
    ])
);
