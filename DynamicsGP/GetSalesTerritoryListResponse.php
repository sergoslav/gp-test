<?php

class GetSalesTerritoryListResponse
{

    /**
     * @var ArrayOfSalesTerritorySummary $GetSalesTerritoryListResult
     */
    protected $GetSalesTerritoryListResult = null;

    /**
     * @param ArrayOfSalesTerritorySummary $GetSalesTerritoryListResult
     */
    public function __construct($GetSalesTerritoryListResult)
    {
      $this->GetSalesTerritoryListResult = $GetSalesTerritoryListResult;
    }

    /**
     * @return ArrayOfSalesTerritorySummary
     */
    public function getGetSalesTerritoryListResult()
    {
      return $this->GetSalesTerritoryListResult;
    }

    /**
     * @param ArrayOfSalesTerritorySummary $GetSalesTerritoryListResult
     * @return GetSalesTerritoryListResponse
     */
    public function setGetSalesTerritoryListResult($GetSalesTerritoryListResult)
    {
      $this->GetSalesTerritoryListResult = $GetSalesTerritoryListResult;
      return $this;
    }

}
