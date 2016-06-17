<?php

class GetManufacturingOrderByKey
{

    /**
     * @var ManufacturingOrderDocumentKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ManufacturingOrderDocumentKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ManufacturingOrderDocumentKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ManufacturingOrderDocumentKey $key
     * @return GetManufacturingOrderByKey
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
     * @return GetManufacturingOrderByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
