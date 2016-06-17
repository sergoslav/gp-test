<?php

class GetProjectChangeOrderByKey
{

    /**
     * @var ProjectChangeOrderKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ProjectChangeOrderKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ProjectChangeOrderKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ProjectChangeOrderKey $key
     * @return GetProjectChangeOrderByKey
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
     * @return GetProjectChangeOrderByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
