<?php

class GetProjectContractByKey
{

    /**
     * @var ProjectContractKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ProjectContractKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ProjectContractKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ProjectContractKey $key
     * @return GetProjectContractByKey
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
     * @return GetProjectContractByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
