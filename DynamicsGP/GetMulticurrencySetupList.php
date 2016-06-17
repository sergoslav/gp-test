<?php

class GetMulticurrencySetupList
{

    /**
     * @var MulticurrencySetupCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param MulticurrencySetupCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return MulticurrencySetupCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param MulticurrencySetupCriteria $criteria
     * @return GetMulticurrencySetupList
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
     * @return GetMulticurrencySetupList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
