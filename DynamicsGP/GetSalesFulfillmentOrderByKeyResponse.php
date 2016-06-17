<?php

class GetSalesFulfillmentOrderByKeyResponse
{

    /**
     * @var SalesFulfillmentOrder $GetSalesFulfillmentOrderByKeyResult
     */
    protected $GetSalesFulfillmentOrderByKeyResult = null;

    /**
     * @param SalesFulfillmentOrder $GetSalesFulfillmentOrderByKeyResult
     */
    public function __construct($GetSalesFulfillmentOrderByKeyResult)
    {
      $this->GetSalesFulfillmentOrderByKeyResult = $GetSalesFulfillmentOrderByKeyResult;
    }

    /**
     * @return SalesFulfillmentOrder
     */
    public function getGetSalesFulfillmentOrderByKeyResult()
    {
      return $this->GetSalesFulfillmentOrderByKeyResult;
    }

    /**
     * @param SalesFulfillmentOrder $GetSalesFulfillmentOrderByKeyResult
     * @return GetSalesFulfillmentOrderByKeyResponse
     */
    public function setGetSalesFulfillmentOrderByKeyResult($GetSalesFulfillmentOrderByKeyResult)
    {
      $this->GetSalesFulfillmentOrderByKeyResult = $GetSalesFulfillmentOrderByKeyResult;
      return $this;
    }

}
