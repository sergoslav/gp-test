<?php

class GetHRRequisitionByKey
{

    /**
     * @var HRRequisitionNumberKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param HRRequisitionNumberKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return HRRequisitionNumberKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param HRRequisitionNumberKey $key
     * @return GetHRRequisitionByKey
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
     * @return GetHRRequisitionByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
