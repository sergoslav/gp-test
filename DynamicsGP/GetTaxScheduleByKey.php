<?php

class GetTaxScheduleByKey
{

    /**
     * @var TaxScheduleKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param TaxScheduleKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param TaxScheduleKey $key
     * @return GetTaxScheduleByKey
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
     * @return GetTaxScheduleByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
