<?php

class GetTaxDetailListResponse
{

    /**
     * @var ArrayOfTaxDetail $GetTaxDetailListResult
     */
    protected $GetTaxDetailListResult = null;

    /**
     * @param ArrayOfTaxDetail $GetTaxDetailListResult
     */
    public function __construct($GetTaxDetailListResult)
    {
      $this->GetTaxDetailListResult = $GetTaxDetailListResult;
    }

    /**
     * @return ArrayOfTaxDetail
     */
    public function getGetTaxDetailListResult()
    {
      return $this->GetTaxDetailListResult;
    }

    /**
     * @param ArrayOfTaxDetail $GetTaxDetailListResult
     * @return GetTaxDetailListResponse
     */
    public function setGetTaxDetailListResult($GetTaxDetailListResult)
    {
      $this->GetTaxDetailListResult = $GetTaxDetailListResult;
      return $this;
    }

}
