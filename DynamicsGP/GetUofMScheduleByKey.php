<?php

class GetUofMScheduleByKey
{

    /**
     * @var UofMScheduleKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param UofMScheduleKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return UofMScheduleKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param UofMScheduleKey $key
     * @return GetUofMScheduleByKey
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
     * @return GetUofMScheduleByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
