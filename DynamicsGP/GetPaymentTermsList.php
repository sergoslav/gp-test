<?php

class GetPaymentTermsList
{

    /**
     * @var PaymentTermsCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PaymentTermsCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return PaymentTermsCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PaymentTermsCriteria $criteria
     * @return GetPaymentTermsList
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
     * @return GetPaymentTermsList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
