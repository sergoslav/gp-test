<?php

class GetBankList
{

    /**
     * @var BankCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param BankCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return BankCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param BankCriteria $criteria
     * @return GetBankList
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
     * @return GetBankList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
