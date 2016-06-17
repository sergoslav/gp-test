<?php

class CreateServiceEquipment
{

    /**
     * @var ServiceEquipment $serviceEquipment
     */
    protected $serviceEquipment = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ServiceEquipment $serviceEquipment
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($serviceEquipment, $context, $policy)
    {
      $this->serviceEquipment = $serviceEquipment;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return ServiceEquipment
     */
    public function getServiceEquipment()
    {
      return $this->serviceEquipment;
    }

    /**
     * @param ServiceEquipment $serviceEquipment
     * @return CreateServiceEquipment
     */
    public function setServiceEquipment($serviceEquipment)
    {
      $this->serviceEquipment = $serviceEquipment;
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
     * @return CreateServiceEquipment
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return Policy
     */
    public function getPolicy()
    {
      return $this->policy;
    }

    /**
     * @param Policy $policy
     * @return CreateServiceEquipment
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
