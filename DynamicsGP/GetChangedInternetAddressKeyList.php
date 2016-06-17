<?php

class GetChangedInternetAddressKeyList
{

    /**
     * @var InternetAddressKeyChangedCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param InternetAddressKeyChangedCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return InternetAddressKeyChangedCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param InternetAddressKeyChangedCriteria $criteria
     * @return GetChangedInternetAddressKeyList
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
     * @return GetChangedInternetAddressKeyList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
