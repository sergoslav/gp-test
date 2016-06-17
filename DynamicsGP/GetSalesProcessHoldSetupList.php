<?php

class GetSalesProcessHoldSetupList
{

    /**
     * @var SalesProcessHoldSetupCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SalesProcessHoldSetupCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return SalesProcessHoldSetupCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param SalesProcessHoldSetupCriteria $criteria
     * @return GetSalesProcessHoldSetupList
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
     * @return GetSalesProcessHoldSetupList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
