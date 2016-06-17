<?php

class GetSalespersonCommissionsByKeyResponse
{

    /**
     * @var SalespersonCommissions $GetSalespersonCommissionsByKeyResult
     */
    protected $GetSalespersonCommissionsByKeyResult = null;

    /**
     * @param SalespersonCommissions $GetSalespersonCommissionsByKeyResult
     */
    public function __construct($GetSalespersonCommissionsByKeyResult)
    {
      $this->GetSalespersonCommissionsByKeyResult = $GetSalespersonCommissionsByKeyResult;
    }

    /**
     * @return SalespersonCommissions
     */
    public function getGetSalespersonCommissionsByKeyResult()
    {
      return $this->GetSalespersonCommissionsByKeyResult;
    }

    /**
     * @param SalespersonCommissions $GetSalespersonCommissionsByKeyResult
     * @return GetSalespersonCommissionsByKeyResponse
     */
    public function setGetSalespersonCommissionsByKeyResult($GetSalespersonCommissionsByKeyResult)
    {
      $this->GetSalespersonCommissionsByKeyResult = $GetSalespersonCommissionsByKeyResult;
      return $this;
    }

}
