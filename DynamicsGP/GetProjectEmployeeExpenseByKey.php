<?php

class GetProjectEmployeeExpenseByKey
{

    /**
     * @var ProjectEmployeeExpenseKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ProjectEmployeeExpenseKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ProjectEmployeeExpenseKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ProjectEmployeeExpenseKey $key
     * @return GetProjectEmployeeExpenseByKey
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
     * @return GetProjectEmployeeExpenseByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
