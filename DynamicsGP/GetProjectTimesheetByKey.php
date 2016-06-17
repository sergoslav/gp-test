<?php

class GetProjectTimesheetByKey
{

    /**
     * @var ProjectTimesheetKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ProjectTimesheetKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ProjectTimesheetKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ProjectTimesheetKey $key
     * @return GetProjectTimesheetByKey
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
     * @return GetProjectTimesheetByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
