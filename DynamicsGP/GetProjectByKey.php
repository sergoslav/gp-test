<?php

class GetProjectByKey
{

    /**
     * @var ProjectKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ProjectKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ProjectKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ProjectKey $key
     * @return GetProjectByKey
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
     * @return GetProjectByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
