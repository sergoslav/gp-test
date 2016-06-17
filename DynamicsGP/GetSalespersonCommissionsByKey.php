<?php

class GetSalespersonCommissionsByKey
{

    /**
     * @var SalespersonCommissionsKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SalespersonCommissionsKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return SalespersonCommissionsKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param SalespersonCommissionsKey $key
     * @return GetSalespersonCommissionsByKey
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
     * @return GetSalespersonCommissionsByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
