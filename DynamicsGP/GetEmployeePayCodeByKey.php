<?php

class GetEmployeePayCodeByKey
{

    /**
     * @var EmployeePayCodeKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param EmployeePayCodeKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return EmployeePayCodeKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param EmployeePayCodeKey $key
     * @return GetEmployeePayCodeByKey
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
     * @return GetEmployeePayCodeByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
