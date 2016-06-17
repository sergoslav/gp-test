<?php

class GetPolicyByKey
{

    /**
     * @var PolicyKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PolicyKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return PolicyKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param PolicyKey $key
     * @return GetPolicyByKey
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
     * @return GetPolicyByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
