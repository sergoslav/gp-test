<?php

class GetReturnMaterialAuthorizationList
{

    /**
     * @var ReturnMaterialAuthorizationCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ReturnMaterialAuthorizationCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ReturnMaterialAuthorizationCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ReturnMaterialAuthorizationCriteria $criteria
     * @return GetReturnMaterialAuthorizationList
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
     * @return GetReturnMaterialAuthorizationList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
