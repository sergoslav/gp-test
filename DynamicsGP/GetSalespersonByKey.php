<?php

class GetSalespersonByKey
{

    /**
     * @var SalespersonKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SalespersonKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return SalespersonKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param SalespersonKey $key
     * @return GetSalespersonByKey
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
     * @return GetSalespersonByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
