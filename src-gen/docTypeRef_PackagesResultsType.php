<?php

namespace DHL\Express\Webservice;

class docTypeRef_PackagesResultsType
{

    /**
     * @var docTypeRef_PackageResultType[] $PackageResult
     */
    protected $PackageResult = null;

    /**
     * @param docTypeRef_PackageResultType[] $PackageResult
     */
    public function __construct(array $PackageResult)
    {
      $this->PackageResult = $PackageResult;
    }

    /**
     * @return docTypeRef_PackageResultType[]
     */
    public function getPackageResult()
    {
      return $this->PackageResult;
    }

    /**
     * @param docTypeRef_PackageResultType[] $PackageResult
     * @return \DHL\Express\Webservice\docTypeRef_PackagesResultsType
     */
    public function setPackageResult(array $PackageResult)
    {
      $this->PackageResult = $PackageResult;
      return $this;
    }

}
