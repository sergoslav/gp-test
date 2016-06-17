<?php

class GetDynamicsOnlineConfigurationList
{

    /**
     * @var DynamicsOnlineConfigurationCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param DynamicsOnlineConfigurationCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return DynamicsOnlineConfigurationCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param DynamicsOnlineConfigurationCriteria $criteria
     * @return GetDynamicsOnlineConfigurationList
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
     * @return GetDynamicsOnlineConfigurationList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
