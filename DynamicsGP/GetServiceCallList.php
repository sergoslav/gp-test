<?php

class GetServiceCallList
{

    /**
     * @var ServiceCallCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ServiceCallCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ServiceCallCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ServiceCallCriteria $criteria
     * @return GetServiceCallList
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
     * @return GetServiceCallList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
