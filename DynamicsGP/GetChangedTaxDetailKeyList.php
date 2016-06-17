<?php

class GetChangedTaxDetailKeyList
{

    /**
     * @var TaxDetailChangedKeyCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param TaxDetailChangedKeyCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return TaxDetailChangedKeyCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param TaxDetailChangedKeyCriteria $criteria
     * @return GetChangedTaxDetailKeyList
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
     * @return GetChangedTaxDetailKeyList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
