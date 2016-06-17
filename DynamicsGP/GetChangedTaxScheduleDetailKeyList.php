<?php

class GetChangedTaxScheduleDetailKeyList
{

    /**
     * @var TaxScheduleDetailChangedKeyCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param TaxScheduleDetailChangedKeyCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return TaxScheduleDetailChangedKeyCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param TaxScheduleDetailChangedKeyCriteria $criteria
     * @return GetChangedTaxScheduleDetailKeyList
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
     * @return GetChangedTaxScheduleDetailKeyList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
