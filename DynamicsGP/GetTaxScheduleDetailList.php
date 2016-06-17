<?php

class GetTaxScheduleDetailList
{

    /**
     * @var TaxScheduleDetailCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param TaxScheduleDetailCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return TaxScheduleDetailCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param TaxScheduleDetailCriteria $criteria
     * @return GetTaxScheduleDetailList
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
     * @return GetTaxScheduleDetailList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
