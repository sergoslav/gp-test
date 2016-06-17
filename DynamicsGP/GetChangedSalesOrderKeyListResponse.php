<?php

class GetChangedSalesOrderKeyListResponse
{

    /**
     * @var ArrayOfChangedSalesOrderKey $GetChangedSalesOrderKeyListResult
     */
    protected $GetChangedSalesOrderKeyListResult = null;

    /**
     * @param ArrayOfChangedSalesOrderKey $GetChangedSalesOrderKeyListResult
     */
    public function __construct($GetChangedSalesOrderKeyListResult)
    {
      $this->GetChangedSalesOrderKeyListResult = $GetChangedSalesOrderKeyListResult;
    }

    /**
     * @return ArrayOfChangedSalesOrderKey
     */
    public function getGetChangedSalesOrderKeyListResult()
    {
      return $this->GetChangedSalesOrderKeyListResult;
    }

    /**
     * @param ArrayOfChangedSalesOrderKey $GetChangedSalesOrderKeyListResult
     * @return GetChangedSalesOrderKeyListResponse
     */
    public function setGetChangedSalesOrderKeyListResult($GetChangedSalesOrderKeyListResult)
    {
      $this->GetChangedSalesOrderKeyListResult = $GetChangedSalesOrderKeyListResult;
      return $this;
    }

}
