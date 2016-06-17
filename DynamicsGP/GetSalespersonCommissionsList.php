<?php

class GetSalespersonCommissionsList
{

    /**
     * @var SalespersonCommissionsCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SalespersonCommissionsCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return SalespersonCommissionsCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param SalespersonCommissionsCriteria $criteria
     * @return GetSalespersonCommissionsList
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
     * @return GetSalespersonCommissionsList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
