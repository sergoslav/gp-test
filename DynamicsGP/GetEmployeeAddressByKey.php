<?php

class GetEmployeeAddressByKey
{

    /**
     * @var EmployeeAddressKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param EmployeeAddressKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return EmployeeAddressKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param EmployeeAddressKey $key
     * @return GetEmployeeAddressByKey
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
     * @return GetEmployeeAddressByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
