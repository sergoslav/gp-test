<?php

class GetProjectMiscellaneousLogByKey
{

    /**
     * @var ProjectMiscellaneousLogKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ProjectMiscellaneousLogKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ProjectMiscellaneousLogKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ProjectMiscellaneousLogKey $key
     * @return GetProjectMiscellaneousLogByKey
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
     * @return GetProjectMiscellaneousLogByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
