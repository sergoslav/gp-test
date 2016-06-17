<?php

class GetPurchaseReceiptList
{

    /**
     * @var PurchaseReceiptCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PurchaseReceiptCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return PurchaseReceiptCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PurchaseReceiptCriteria $criteria
     * @return GetPurchaseReceiptList
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
     * @return GetPurchaseReceiptList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
