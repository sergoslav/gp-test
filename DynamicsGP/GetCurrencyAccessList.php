<?php

class GetCurrencyAccessList
{

    /**
     * @var CurrencyAccessCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CurrencyAccessCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return CurrencyAccessCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CurrencyAccessCriteria $criteria
     * @return GetCurrencyAccessList
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
     * @return GetCurrencyAccessList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
