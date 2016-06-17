<?php

class GetTaxScheduleDetailByKey
{

    /**
     * @var TaxScheduleDetailKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param TaxScheduleDetailKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return TaxScheduleDetailKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param TaxScheduleDetailKey $key
     * @return GetTaxScheduleDetailByKey
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
     * @return GetTaxScheduleDetailByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
