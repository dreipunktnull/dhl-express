<?php

namespace DHL\Express\Webservice;

use DHL\Express\Webservice\RateRequest\AddressType2;
use DHL\Express\Webservice\RateRequest\DimensionsType;
use DHL\Express\Webservice\RateRequest\RequestedPackagesType2;
use DHL\Express\Webservice\RateRequest\PackagesType2;
use DHL\Express\Webservice\RateRequest\RequestedShipmentType2;
use DHL\Express\Webservice\RateRequest\WeightType;

class GblExpressRateBook extends \SoapClient
{
    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'docTypeRef_ProcessShipmentRequestType' => ProcessShipmentRequestType::class,
        'docTypeRef_ShipmentDetailType' => ShipmentDetailType::class,
        'docTypeRef_ClientDetailType2' => ClientDetailType2::class,
        'docTypeRef_RequestedShipmentType' => RequestedShipmentType::class,
        'docTypeRef_ShipmentInfoType' => ShipmentInfoType::class,
        'Billing' => Billing::class,
        'Services' => Services::class,
        'Service' => Service::class,
        'docTypeRef_InternationDetailType' => InternationDetailType::class,
        'docTypeRef_CommoditiesType' => CommoditiesType::class,
        'docTypeRef_ShipType' => ShipType::class,
        'docTypeRef_ContactInfoType' => ContactInfoType::class,
        'docTypeRef_ContactType' => ContactType::class,
        'docTypeRef_AddressType' => AddressType::class,
        'docTypeRef_PackagesType' => docTypeRef_PackagesType::class,
        'docTypeRef_RequestedPackagesType' => docTypeRef_RequestedPackagesType::class,
        'docTypeRef_DimensionsType' => docTypeRef_DimensionsType::class,
        'docTypeRef_DangerousGoods' => DangerousGoods::class,
        'docTypeRef_Content' => docTypeRef_Content::class,
        'docTypeRef_NotificationType2' => docTypeRef_NotificationType2::class,
        'docTypeRef_PackagesResultsType' => docTypeRef_PackagesResultsType::class,
        'docTypeRef_PackageResultType' => docTypeRef_PackageResultType::class,
        'docTypeRef_LabelImageType' => docTypeRef_LabelImageType::class,
        'docTypeRef_RateRequestType' => RateRequestType::class,
        'docTypeRef_RateResponseType' => RateResponseType::class,
        'docTypeRef_ClientDetailType3' => docTypeRef_ClientDetailType3::class,
        'docTypeRef_RequestedShipmentType2' => RequestedShipmentType2::class,
        'docTypeRef_ShipType2' => ShipType2::class,
        'docTypeRef_AddressType2' => AddressType2::class,
        'docTypeRef_PackagesType2' => PackagesType2::class,
        'docTypeRef_RequestedPackagesType2' => RequestedPackagesType2::class,
        'docTypeRef_WeightType' => WeightType::class,
        'docTypeRef_DimensionsType2' => DimensionsType::class,
        'Billing2' => Billing2::class,
        'Services2' => Services2::class,
        'Service2' => Service2::class,
        'docTypeRef_ProviderType' => ProviderType::class,
        'docTypeRef_NotificationType3' => docTypeRef_NotificationType3::class,
        'docTypeRef_ServiceType' => ServiceType::class,
        'docTypeRef_TotalNetType' => TotalNetType::class,
        'docTypeRef_ChargesType' => docTypeRef_ChargesType::class,
        'docTypeRef_ChargeType' => docTypeRef_ChargeType::class,
        'docTypeRef_DeleteRequestType' => docTypeRef_DeleteRequestType::class,
        'docTypeRef_DeleteResponseType' => docTypeRef_DeleteResponseType::class,
        'docTypeRef_ClientDetailType' => docTypeRef_ClientDetailType::class,
        'docTypeRef_NotificationType' => docTypeRef_NotificationType::class,
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
        $options = array_merge(array(
            'features' => 1,
        ), $options);
        if (!$wsdl) {
            $wsdl = 'https://wsbexpress.dhl.com/sndpt/expressRateBook?WSDL';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param ProcessShipmentRequestType $parameters
     * @return ShipmentDetailType
     */
    public function createShipmentRequest(ProcessShipmentRequestType $parameters)
    {
        return $this->__soapCall('createShipmentRequest', array($parameters));
    }

    /**
     * @param RateRequestType $parameters
     * @return RateResponseType
     */
    public function getRateRequest(RateRequestType $parameters)
    {
        return $this->__soapCall('getRateRequest', array($parameters));
    }

    /**
     * @param docTypeRef_DeleteRequestType $parameters
     * @return docTypeRef_DeleteResponseType
     */
    public function deleteShipmentRequest(docTypeRef_DeleteRequestType $parameters)
    {
        return $this->__soapCall('deleteShipmentRequest', array($parameters));
    }
}
