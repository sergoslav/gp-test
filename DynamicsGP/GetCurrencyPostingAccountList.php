<?php

class GetCurrencyPostingAccountList
{

    /**
     * @var CurrencyPostingAccountCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CurrencyPostingAccountCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return CurrencyPostingAccountCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CurrencyPostingAccountCriteria $criteria
     * @return GetCurrencyPostingAccountList
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
     * @return GetCurrencyPostingAccountList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
