<?php

class GetProjectBudgetByKey
{

    /**
     * @var ProjectBudgetKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ProjectBudgetKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ProjectBudgetKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ProjectBudgetKey $key
     * @return GetProjectBudgetByKey
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
     * @return GetProjectBudgetByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
