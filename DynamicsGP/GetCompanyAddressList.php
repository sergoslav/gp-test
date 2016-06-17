<?php

class GetCompanyAddressList
{

    /**
     * @var CompanyAddressCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CompanyAddressCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return CompanyAddressCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CompanyAddressCriteria $criteria
     * @return GetCompanyAddressList
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
     * @return GetCompanyAddressList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
