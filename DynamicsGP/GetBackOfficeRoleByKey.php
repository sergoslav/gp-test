<?php

class GetBackOfficeRoleByKey
{

    /**
     * @var BackOfficeRoleKey $backOfficeRoleKey
     */
    protected $backOfficeRoleKey = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param BackOfficeRoleKey $backOfficeRoleKey
     * @param Context $context
     */
    public function __construct($backOfficeRoleKey, $context)
    {
      $this->backOfficeRoleKey = $backOfficeRoleKey;
      $this->context = $context;
    }

    /**
     * @return BackOfficeRoleKey
     */
    public function getBackOfficeRoleKey()
    {
      return $this->backOfficeRoleKey;
    }

    /**
     * @param BackOfficeRoleKey $backOfficeRoleKey
     * @return GetBackOfficeRoleByKey
     */
    public function setBackOfficeRoleKey($backOfficeRoleKey)
    {
      $this->backOfficeRoleKey = $backOfficeRoleKey;
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
     * @return GetBackOfficeRoleByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
