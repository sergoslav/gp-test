<?php

class GetTaxDetailList
{

    /**
     * @var TaxDetailCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param TaxDetailCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return TaxDetailCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param TaxDetailCriteria $criteria
     * @return GetTaxDetailList
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
     * @return GetTaxDetailList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
