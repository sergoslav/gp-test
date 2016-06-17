<?php

class GetTaxScheduleList
{

    /**
     * @var TaxScheduleCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param TaxScheduleCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return TaxScheduleCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param TaxScheduleCriteria $criteria
     * @return GetTaxScheduleList
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
     * @return GetTaxScheduleList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
