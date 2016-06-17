<?php

class GetCompanyByKey
{

    /**
     * @var CompanyKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CompanyKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return CompanyKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param CompanyKey $key
     * @return GetCompanyByKey
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
     * @return GetCompanyByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
