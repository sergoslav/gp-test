<?php

class GetServiceCallByKey
{

    /**
     * @var ServiceDocumentKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ServiceDocumentKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ServiceDocumentKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ServiceDocumentKey $key
     * @return GetServiceCallByKey
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
     * @return GetServiceCallByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
