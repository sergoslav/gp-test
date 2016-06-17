<?php

class GetCountryRegionCodeByKey
{

    /**
     * @var CountryRegionCodeKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CountryRegionCodeKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return CountryRegionCodeKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param CountryRegionCodeKey $key
     * @return GetCountryRegionCodeByKey
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
     * @return GetCountryRegionCodeByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
