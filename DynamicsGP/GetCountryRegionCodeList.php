<?php

class GetCountryRegionCodeList
{

    /**
     * @var CountryRegionCodeCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CountryRegionCodeCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return CountryRegionCodeCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CountryRegionCodeCriteria $criteria
     * @return GetCountryRegionCodeList
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
     * @return GetCountryRegionCodeList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
