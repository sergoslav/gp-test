<?php

class GetSalespersonByKeyResponse
{

    /**
     * @var Salesperson $GetSalespersonByKeyResult
     */
    protected $GetSalespersonByKeyResult = null;

    /**
     * @param Salesperson $GetSalespersonByKeyResult
     */
    public function __construct($GetSalespersonByKeyResult)
    {
      $this->GetSalespersonByKeyResult = $GetSalespersonByKeyResult;
    }

    /**
     * @return Salesperson
     */
    public function getGetSalespersonByKeyResult()
    {
      return $this->GetSalespersonByKeyResult;
    }

    /**
     * @param Salesperson $GetSalespersonByKeyResult
     * @return GetSalespersonByKeyResponse
     */
    public function setGetSalespersonByKeyResult($GetSalespersonByKeyResult)
    {
      $this->GetSalespersonByKeyResult = $GetSalespersonByKeyResult;
      return $this;
    }

}
