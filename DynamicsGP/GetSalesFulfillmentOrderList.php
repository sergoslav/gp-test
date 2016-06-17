<?php

class GetSalesFulfillmentOrderList
{

    /**
     * @var SalesFulfillmentOrderCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SalesFulfillmentOrderCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return SalesFulfillmentOrderCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param SalesFulfillmentOrderCriteria $criteria
     * @return GetSalesFulfillmentOrderList
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return Context
     */
    public function getContext()
    {
      return $this->context;
    }

    /**
     * @param Context $context
     * @return GetSalesFulfillmentOrderList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
