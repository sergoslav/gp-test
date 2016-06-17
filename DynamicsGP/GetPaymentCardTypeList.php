<?php

class GetPaymentCardTypeList
{

    /**
     * @var PaymentCardTypeCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PaymentCardTypeCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return PaymentCardTypeCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PaymentCardTypeCriteria $criteria
     * @return GetPaymentCardTypeList
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
     * @return GetPaymentCardTypeList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
