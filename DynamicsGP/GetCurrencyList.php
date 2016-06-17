<?php

class GetCurrencyList
{

    /**
     * @var CurrencyCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CurrencyCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return CurrencyCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CurrencyCriteria $criteria
     * @return GetCurrencyList
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
     * @return GetCurrencyList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
