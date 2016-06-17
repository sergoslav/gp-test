<?php

class GetTaxDetailByKeyResponse
{

    /**
     * @var TaxDetail $GetTaxDetailByKeyResult
     */
    protected $GetTaxDetailByKeyResult = null;

    /**
     * @param TaxDetail $GetTaxDetailByKeyResult
     */
    public function __construct($GetTaxDetailByKeyResult)
    {
      $this->GetTaxDetailByKeyResult = $GetTaxDetailByKeyResult;
    }

    /**
     * @return TaxDetail
     */
    public function getGetTaxDetailByKeyResult()
    {
      return $this->GetTaxDetailByKeyResult;
    }

    /**
     * @param TaxDetail $GetTaxDetailByKeyResult
     * @return GetTaxDetailByKeyResponse
     */
    public function setGetTaxDetailByKeyResult($GetTaxDetailByKeyResult)
    {
      $this->GetTaxDetailByKeyResult = $GetTaxDetailByKeyResult;
      return $this;
    }

}
