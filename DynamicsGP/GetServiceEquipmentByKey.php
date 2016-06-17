<?php

class GetServiceEquipmentByKey
{

    /**
     * @var ServiceEquipmentKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ServiceEquipmentKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ServiceEquipmentKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ServiceEquipmentKey $key
     * @return GetServiceEquipmentByKey
     */
    public function setKey($key)
    {
      $this->key = $key;
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
     * @return GetServiceEquipmentByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
