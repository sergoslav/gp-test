<?php

class GetPolicyListByRoleKey
{

    /**
     * @var RoleKey $roleKey
     */
    protected $roleKey = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param RoleKey $roleKey
     * @param Context $context
     */
    public function __construct($roleKey, $context)
    {
      $this->roleKey = $roleKey;
      $this->context = $context;
    }

    /**
     * @return RoleKey
     */
    public function getRoleKey()
    {
      return $this->roleKey;
    }

    /**
     * @param RoleKey $roleKey
     * @return GetPolicyListByRoleKey
     */
    public function setRoleKey($roleKey)
    {
      $this->roleKey = $roleKey;
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
     * @return GetPolicyListByRoleKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
