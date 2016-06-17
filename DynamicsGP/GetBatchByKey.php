<?php

class GetBatchByKey
{

    /**
     * @var BatchKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param BatchKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return BatchKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param BatchKey $key
     * @return GetBatchByKey
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
     * @return GetBatchByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
