<?php

class GetBackOfficeRoleList
{

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param Context $context
     */
    public function __construct($context)
    {
      $this->context = $context;
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
     * @return GetBackOfficeRoleList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
