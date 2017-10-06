<?php

namespace DHL\Express\Webservice;

class InternationDetailType
{

    /**
     * @var CommoditiesType $Commodities
     */
    protected $Commodities = null;

    /**
     * @var Content $Content
     */
    protected $Content = null;

    /**
     * @var ExportReference $ExportReference
     */
    protected $ExportReference = null;

    /**
     * @param CommoditiesType $Commodities
     */
    public function __construct($Commodities)
    {
      $this->Commodities = $Commodities;
    }

    /**
     * @return CommoditiesType
     */
    public function getCommodities()
    {
      return $this->Commodities;
    }

    /**
     * @param CommoditiesType $Commodities
     * @return \DHL\Express\Webservice\InternationDetailType
     */
    public function setCommodities($Commodities)
    {
      $this->Commodities = $Commodities;
      return $this;
    }

    /**
     * @return Content
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param Content $Content
     * @return \DHL\Express\Webservice\InternationDetailType
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return ExportReference
     */
    public function getExportReference()
    {
      return $this->ExportReference;
    }

    /**
     * @param ExportReference $ExportReference
     * @return \DHL\Express\Webservice\InternationDetailType
     */
    public function setExportReference($ExportReference)
    {
      $this->ExportReference = $ExportReference;
      return $this;
    }

}
