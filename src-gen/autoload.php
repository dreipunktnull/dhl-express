<?php


use DHL\Express\Webservice\RateRequest\AddressType2;
use DHL\Express\Webservice\InternationDetailType;
use DHL\Express\Webservice\CommoditiesType;
use DHL\Express\Webservice\Content;
use DHL\Express\Webservice\ShipType;
use DHL\Express\Webservice\ContactInfoType;
use DHL\Express\Webservice\ContactType;
use DHL\Express\Webservice\AddressType;
use DHL\Express\Webservice\docTypeRef_PackagesType;
use DHL\Express\Webservice\docTypeRef_RequestedPackagesType;
use DHL\Express\Webservice\docTypeRef_DimensionsType;
use DHL\Express\Webservice\DangerousGoods;
use DHL\Express\Webservice\docTypeRef_Content;
use DHL\Express\Webservice\docTypeRef_NotificationType2;
use DHL\Express\Webservice\docTypeRef_PackagesResultsType;
use DHL\Express\Webservice\docTypeRef_PackageResultType;
use DHL\Express\Webservice\docTypeRef_LabelImageType;
use DHL\Express\Webservice\RateRequestType;
use DHL\Express\Webservice\RateResponseType;
use DHL\Express\Webservice\docTypeRef_ClientDetailType3;
use DHL\Express\Webservice\RateRequest\RequestedShipmentType2;
use DHL\Express\Webservice\RateRequest\DropOffType2;
use DHL\Express\Webservice\NextBusinessDay2;
use DHL\Express\Webservice\ShipType2;
use DHL\Express\Webservice\RateRequest\PackagesType2;
use DHL\Express\Webservice\RateRequest\RequestedPackagesType2;
use DHL\Express\Webservice\RateRequest\WeightType;
use DHL\Express\Webservice\RateRequest\DimensionsType;
use DHL\Express\Webservice\UnitOfMeasurement2;
use DHL\Express\Webservice\Content2;
use DHL\Express\Webservice\PaymentInfo2;
use DHL\Express\Webservice\Billing2;
use DHL\Express\Webservice\ShipmentPaymentType2;
use DHL\Express\Webservice\Services2;
use DHL\Express\Webservice\Service2;
use DHL\Express\Webservice\ProviderType;
use DHL\Express\Webservice\docTypeRef_NotificationType3;
use DHL\Express\Webservice\ServiceType;
use DHL\Express\Webservice\TotalNetType;
use DHL\Express\Webservice\docTypeRef_ChargesType;
use DHL\Express\Webservice\docTypeRef_ChargeType;
use DHL\Express\Webservice\NextBusinessDayInd2;
use DHL\Express\Webservice\_x0040_account;
use DHL\Express\Webservice\DeleteShipment\DeleteRequestType;
use DHL\Express\Webservice\DeleteShipment\DeleteResponseType;
use DHL\Express\Webservice\docTypeRef_ClientDetailType;
use DHL\Express\Webservice\DeleteShipment\NotificationType;
use DHL\Express\Webservice\PaymentInfo;
use DHL\Express\Webservice\LabelType;
use DHL\Express\Webservice\UnitOfMeasurement;
use DHL\Express\Webservice\Service;
use DHL\Express\Webservice\Services;
use DHL\Express\Webservice\ShipmentPaymentType;
use DHL\Express\Webservice\Billing;
use DHL\Express\Webservice\DropOffType;
use DHL\Express\Webservice\ShipmentInfoType;
use DHL\Express\Webservice\RequestedShipmentType;
use DHL\Express\Webservice\ClientDetailType2;
use DHL\Express\Webservice\ShipmentDetailType;
use DHL\Express\Webservice\ProcessShipmentRequestType;
use DHL\Express\Webservice\GblExpressRateBook;

function autoload_fc80e0eb0e6728d1d6ebda8adddebaa1($class)
{
    $classes = array(
        GblExpressRateBook::class => __DIR__ .'/GblExpressRateBook.php',
        ProcessShipmentRequestType::class => __DIR__ .'/docTypeRef_ProcessShipmentRequestType.php',
        ShipmentDetailType::class => __DIR__ .'/docTypeRef_ShipmentDetailType.php',
        ClientDetailType2::class => __DIR__ .'/docTypeRef_ClientDetailType2.php',
        RequestedShipmentType::class => __DIR__ .'/docTypeRef_RequestedShipmentType.php',
        ShipmentInfoType::class => __DIR__ .'/docTypeRef_ShipmentInfoType.php',
        DropOffType::class => __DIR__ .'/DropOffType.php',
        Billing::class => __DIR__ .'/Billing.php',
        ShipmentPaymentType::class => __DIR__ .'/ShipmentPaymentType.php',
        Services::class => __DIR__ .'/Services.php',
        Service::class => __DIR__ .'/Service.php',
        UnitOfMeasurement::class => __DIR__ .'/UnitOfMeasurement.php',
        LabelType::class => __DIR__ .'/LabelType.php',
        PaymentInfo::class => __DIR__ .'/PaymentInfo.php',
        InternationDetailType::class => __DIR__ .'/docTypeRef_InternationDetailType.php',
        CommoditiesType::class => __DIR__ .'/docTypeRef_CommoditiesType.php',
        Content::class => __DIR__ .'/Content.php',
        ShipType::class => __DIR__ .'/docTypeRef_ShipType.php',
        ContactInfoType::class => __DIR__ .'/docTypeRef_ContactInfoType.php',
        ContactType::class => __DIR__ .'/docTypeRef_ContactType.php',
        AddressType::class => __DIR__ .'/docTypeRef_AddressType.php',
        docTypeRef_PackagesType::class => __DIR__ .'/docTypeRef_PackagesType.php',
        docTypeRef_RequestedPackagesType::class => __DIR__ .'/docTypeRef_RequestedPackagesType.php',
        docTypeRef_DimensionsType::class => __DIR__ .'/docTypeRef_DimensionsType.php',
        DangerousGoods::class => __DIR__ .'/docTypeRef_DangerousGoods.php',
        docTypeRef_Content::class => __DIR__ .'/docTypeRef_Content.php',
        docTypeRef_NotificationType2::class => __DIR__ .'/docTypeRef_NotificationType2.php',
        docTypeRef_PackagesResultsType::class => __DIR__ .'/docTypeRef_PackagesResultsType.php',
        docTypeRef_PackageResultType::class => __DIR__ .'/docTypeRef_PackageResultType.php',
        docTypeRef_LabelImageType::class => __DIR__ .'/docTypeRef_LabelImageType.php',
        RateRequestType::class => __DIR__ .'/docTypeRef_RateRequestType.php',
        RateResponseType::class => __DIR__ .'/docTypeRef_RateResponseType.php',
        docTypeRef_ClientDetailType3::class => __DIR__ .'/docTypeRef_ClientDetailType3.php',
        RequestedShipmentType2::class => __DIR__ .'/docTypeRef_RequestedShipmentType2.php',
        DropOffType2::class => __DIR__ .'/DropOffType2.php',
        NextBusinessDay2::class => __DIR__ .'/NextBusinessDay2.php',
        ShipType2::class => __DIR__ .'/docTypeRef_ShipType2.php',
        AddressType2::class => __DIR__ .'/docTypeRef_AddressType2.php',
        PackagesType2::class => __DIR__ .'/docTypeRef_PackagesType2.php',
        RequestedPackagesType2::class => __DIR__ .'/docTypeRef_RequestedPackagesType2.php',
        WeightType::class => __DIR__ .'/docTypeRef_WeightType.php',
        DimensionsType::class => __DIR__ .'/docTypeRef_DimensionsType2.php',
        UnitOfMeasurement2::class => __DIR__ .'/UnitOfMeasurement2.php',
        Content2::class => __DIR__ .'/Content2.php',
        PaymentInfo2::class => __DIR__ .'/PaymentInfo2.php',
        Billing2::class => __DIR__ .'/Billing2.php',
        ShipmentPaymentType2::class => __DIR__ .'/ShipmentPaymentType2.php',
        Services2::class => __DIR__ .'/Services2.php',
        Service2::class => __DIR__ .'/Service2.php',
        ProviderType::class => __DIR__ .'/docTypeRef_ProviderType.php',
        docTypeRef_NotificationType3::class => __DIR__ .'/docTypeRef_NotificationType3.php',
        ServiceType::class => __DIR__ .'/docTypeRef_ServiceType.php',
        TotalNetType::class => __DIR__ .'/docTypeRef_TotalNetType.php',
        docTypeRef_ChargesType::class => __DIR__ .'/docTypeRef_ChargesType.php',
        docTypeRef_ChargeType::class => __DIR__ .'/docTypeRef_ChargeType.php',
        NextBusinessDayInd2::class => __DIR__ .'/NextBusinessDayInd2.php',
        _x0040_account::class => __DIR__ .'/_x0040_account.php',
        DeleteRequestType::class => __DIR__ .'/docTypeRef_DeleteRequestType.php',
        DeleteResponseType::class => __DIR__ .'/docTypeRef_DeleteResponseType.php',
        docTypeRef_ClientDetailType::class => __DIR__ .'/docTypeRef_ClientDetailType.php',
        NotificationType::class => __DIR__ .'/docTypeRef_NotificationType.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_fc80e0eb0e6728d1d6ebda8adddebaa1');
