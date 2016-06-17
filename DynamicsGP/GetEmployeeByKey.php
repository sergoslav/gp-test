<?php

class GetEmployeeByKey
{

    /**
     * @var EmployeeKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param EmployeeKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return EmployeeKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param EmployeeKey $key
     * @return GetEmployeeByKey
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
     * @return GetEmployeeByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
