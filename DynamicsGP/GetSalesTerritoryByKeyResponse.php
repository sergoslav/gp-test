<?php

class GetSalesTerritoryByKeyResponse
{

    /**
     * @var SalesTerritory $GetSalesTerritoryByKeyResult
     */
    protected $GetSalesTerritoryByKeyResult = null;

    /**
     * @param SalesTerritory $GetSalesTerritoryByKeyResult
     */
    public function __construct($GetSalesTerritoryByKeyResult)
    {
      $this->GetSalesTerritoryByKeyResult = $GetSalesTerritoryByKeyResult;
    }

    /**
     * @return SalesTerritory
     */
    public function getGetSalesTerritoryByKeyResult()
    {
      return $this->GetSalesTerritoryByKeyResult;
    }

    /**
     * @param SalesTerritory $GetSalesTerritoryByKeyResult
     * @return GetSalesTerritoryByKeyResponse
     */
    public function setGetSalesTerritoryByKeyResult($GetSalesTerritoryByKeyResult)
    {
      $this->GetSalesTerritoryByKeyResult = $GetSalesTerritoryByKeyResult;
      return $this;
    }

}
