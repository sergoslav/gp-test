<?php

class GetSalesTerritoryByKey
{

    /**
     * @var SalesTerritoryKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SalesTerritoryKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return SalesTerritoryKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param SalesTerritoryKey $key
     * @return GetSalesTerritoryByKey
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
     * @return GetSalesTerritoryByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
