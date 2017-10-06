<?php


 function autoload_fc80e0eb0e6728d1d6ebda8adddebaa1($class)
{
    $classes = array(
        'DHL\Express\Webservice\GblExpressRateBook' => __DIR__ .'/GblExpressRateBook.php',
        'DHL\Express\Webservice\ProcessShipmentRequestType' => __DIR__ .'/docTypeRef_ProcessShipmentRequestType.php',
        'DHL\Express\Webservice\ShipmentDetailType' => __DIR__ .'/docTypeRef_ShipmentDetailType.php',
        'DHL\Express\Webservice\ClientDetailType2' => __DIR__ .'/docTypeRef_ClientDetailType2.php',
        'DHL\Express\Webservice\RequestedShipmentType' => __DIR__ .'/docTypeRef_RequestedShipmentType.php',
        'DHL\Express\Webservice\ShipmentInfoType' => __DIR__ .'/docTypeRef_ShipmentInfoType.php',
        'DHL\Express\Webservice\DropOffType' => __DIR__ .'/DropOffType.php',
        'DHL\Express\Webservice\Billing' => __DIR__ .'/Billing.php',
        'DHL\Express\Webservice\ShipmentPaymentType' => __DIR__ .'/ShipmentPaymentType.php',
        'DHL\Express\Webservice\Services' => __DIR__ .'/Services.php',
        'DHL\Express\Webservice\Service' => __DIR__ .'/Service.php',
        'DHL\Express\Webservice\UnitOfMeasurement' => __DIR__ .'/UnitOfMeasurement.php',
        'DHL\Express\Webservice\LabelType' => __DIR__ .'/LabelType.php',
        'DHL\Express\Webservice\PaymentInfo' => __DIR__ .'/PaymentInfo.php',
        'DHL\Express\Webservice\InternationDetailType' => __DIR__ .'/docTypeRef_InternationDetailType.php',
        'DHL\Express\Webservice\CommoditiesType' => __DIR__ .'/docTypeRef_CommoditiesType.php',
        'DHL\Express\Webservice\Content' => __DIR__ .'/Content.php',
        'DHL\Express\Webservice\ShipType' => __DIR__ .'/docTypeRef_ShipType.php',
        'DHL\Express\Webservice\ContactInfoType' => __DIR__ .'/docTypeRef_ContactInfoType.php',
        'DHL\Express\Webservice\ContactType' => __DIR__ .'/docTypeRef_ContactType.php',
        'DHL\Express\Webservice\AddressType' => __DIR__ .'/docTypeRef_AddressType.php',
        'DHL\Express\Webservice\docTypeRef_PackagesType' => __DIR__ .'/docTypeRef_PackagesType.php',
        'DHL\Express\Webservice\docTypeRef_RequestedPackagesType' => __DIR__ .'/docTypeRef_RequestedPackagesType.php',
        'DHL\Express\Webservice\docTypeRef_DimensionsType' => __DIR__ .'/docTypeRef_DimensionsType.php',
        'DHL\Express\Webservice\DangerousGoods' => __DIR__ .'/docTypeRef_DangerousGoods.php',
        'DHL\Express\Webservice\docTypeRef_Content' => __DIR__ .'/docTypeRef_Content.php',
        'DHL\Express\Webservice\docTypeRef_NotificationType2' => __DIR__ .'/docTypeRef_NotificationType2.php',
        'DHL\Express\Webservice\docTypeRef_PackagesResultsType' => __DIR__ .'/docTypeRef_PackagesResultsType.php',
        'DHL\Express\Webservice\docTypeRef_PackageResultType' => __DIR__ .'/docTypeRef_PackageResultType.php',
        'DHL\Express\Webservice\docTypeRef_LabelImageType' => __DIR__ .'/docTypeRef_LabelImageType.php',
        'DHL\Express\Webservice\RateRequestType' => __DIR__ .'/docTypeRef_RateRequestType.php',
        'DHL\Express\Webservice\RateResponseType' => __DIR__ .'/docTypeRef_RateResponseType.php',
        'DHL\Express\Webservice\docTypeRef_ClientDetailType3' => __DIR__ .'/docTypeRef_ClientDetailType3.php',
        'DHL\Express\Webservice\RateRequest\RequestedShipmentType2' => __DIR__ .'/docTypeRef_RequestedShipmentType2.php',
        'DHL\Express\Webservice\RateRequest\DropOffType2' => __DIR__ .'/DropOffType2.php',
        'DHL\Express\Webservice\NextBusinessDay2' => __DIR__ .'/NextBusinessDay2.php',
        'DHL\Express\Webservice\ShipType2' => __DIR__ .'/docTypeRef_ShipType2.php',
        'DHL\Express\Webservice\RateRequest\AddressType' => __DIR__ .'/docTypeRef_AddressType2.php',
        'DHL\Express\Webservice\RateRequest\PackagesType2' => __DIR__ .'/docTypeRef_PackagesType2.php',
        'DHL\Express\Webservice\RateRequest\RequestedPackagesType2' => __DIR__ .'/docTypeRef_RequestedPackagesType2.php',
        'DHL\Express\Webservice\RateRequest\WeightType' => __DIR__ .'/docTypeRef_WeightType.php',
        'DHL\Express\Webservice\RateRequest\DimensionsType' => __DIR__ .'/docTypeRef_DimensionsType2.php',
        'DHL\Express\Webservice\UnitOfMeasurement2' => __DIR__ .'/UnitOfMeasurement2.php',
        'DHL\Express\Webservice\Content2' => __DIR__ .'/Content2.php',
        'DHL\Express\Webservice\PaymentInfo2' => __DIR__ .'/PaymentInfo2.php',
        'DHL\Express\Webservice\Billing2' => __DIR__ .'/Billing2.php',
        'DHL\Express\Webservice\ShipmentPaymentType2' => __DIR__ .'/ShipmentPaymentType2.php',
        'DHL\Express\Webservice\Services2' => __DIR__ .'/Services2.php',
        'DHL\Express\Webservice\Service2' => __DIR__ .'/Service2.php',
        'DHL\Express\Webservice\ProviderType' => __DIR__ .'/docTypeRef_ProviderType.php',
        'DHL\Express\Webservice\docTypeRef_NotificationType3' => __DIR__ .'/docTypeRef_NotificationType3.php',
        'DHL\Express\Webservice\ServiceType' => __DIR__ .'/docTypeRef_ServiceType.php',
        'DHL\Express\Webservice\TotalNetType' => __DIR__ .'/docTypeRef_TotalNetType.php',
        'DHL\Express\Webservice\docTypeRef_ChargesType' => __DIR__ .'/docTypeRef_ChargesType.php',
        'DHL\Express\Webservice\docTypeRef_ChargeType' => __DIR__ .'/docTypeRef_ChargeType.php',
        'DHL\Express\Webservice\NextBusinessDayInd2' => __DIR__ .'/NextBusinessDayInd2.php',
        'DHL\Express\Webservice\_x0040_account' => __DIR__ .'/_x0040_account.php',
        'DHL\Express\Webservice\docTypeRef_DeleteRequestType' => __DIR__ .'/docTypeRef_DeleteRequestType.php',
        'DHL\Express\Webservice\docTypeRef_DeleteResponseType' => __DIR__ .'/docTypeRef_DeleteResponseType.php',
        'DHL\Express\Webservice\docTypeRef_ClientDetailType' => __DIR__ .'/docTypeRef_ClientDetailType.php',
        'DHL\Express\Webservice\docTypeRef_NotificationType' => __DIR__ .'/docTypeRef_NotificationType.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_fc80e0eb0e6728d1d6ebda8adddebaa1');

// Do nothing. The rest is just leftovers from the code generation.
{
}
