<?php

class GetServiceEquipmentList
{

    /**
     * @var ServiceEquipmentCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ServiceEquipmentCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ServiceEquipmentCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ServiceEquipmentCriteria $criteria
     * @return GetServiceEquipmentList
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
     * @return GetServiceEquipmentList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
