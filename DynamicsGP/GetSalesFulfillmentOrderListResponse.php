<?php

class GetSalesFulfillmentOrderListResponse
{

    /**
     * @var ArrayOfSalesFulfillmentOrderSummary $GetSalesFulfillmentOrderListResult
     */
    protected $GetSalesFulfillmentOrderListResult = null;

    /**
     * @param ArrayOfSalesFulfillmentOrderSummary $GetSalesFulfillmentOrderListResult
     */
    public function __construct($GetSalesFulfillmentOrderListResult)
    {
      $this->GetSalesFulfillmentOrderListResult = $GetSalesFulfillmentOrderListResult;
    }

    /**
     * @return ArrayOfSalesFulfillmentOrderSummary
     */
    public function getGetSalesFulfillmentOrderListResult()
    {
      return $this->GetSalesFulfillmentOrderListResult;
    }

    /**
     * @param ArrayOfSalesFulfillmentOrderSummary $GetSalesFulfillmentOrderListResult
     * @return GetSalesFulfillmentOrderListResponse
     */
    public function setGetSalesFulfillmentOrderListResult($GetSalesFulfillmentOrderListResult)
    {
      $this->GetSalesFulfillmentOrderListResult = $GetSalesFulfillmentOrderListResult;
      return $this;
    }

}
