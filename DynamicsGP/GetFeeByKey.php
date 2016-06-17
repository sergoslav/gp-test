<?php

class GetFeeByKey
{

    /**
     * @var ItemKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ItemKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ItemKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ItemKey $key
     * @return GetFeeByKey
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
     * @return GetFeeByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
