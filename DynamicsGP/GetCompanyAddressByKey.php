<?php

class GetCompanyAddressByKey
{

    /**
     * @var CompanyAddressKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CompanyAddressKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return CompanyAddressKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param CompanyAddressKey $key
     * @return GetCompanyAddressByKey
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
     * @return GetCompanyAddressByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
