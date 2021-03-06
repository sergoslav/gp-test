<?php

class GetPayablesMiscellaneousChargeList
{

    /**
     * @var PayablesMiscellaneousChargeCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PayablesMiscellaneousChargeCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return PayablesMiscellaneousChargeCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PayablesMiscellaneousChargeCriteria $criteria
     * @return GetPayablesMiscellaneousChargeList
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
     * @return GetPayablesMiscellaneousChargeList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
