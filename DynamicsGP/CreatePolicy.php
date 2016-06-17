<?php

class CreatePolicy
{

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @var RoleKey $roleKey
     */
    protected $roleKey = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param Policy $policy
     * @param RoleKey $roleKey
     * @param Context $context
     */
    public function __construct($policy, $roleKey, $context)
    {
      $this->policy = $policy;
      $this->roleKey = $roleKey;
      $this->context = $context;
    }

    /**
     * @return Policy
     */
    public function getPolicy()
    {
      return $this->policy;
    }

    /**
     * @param Policy $policy
     * @return CreatePolicy
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
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
     * @return CreatePolicy
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
     * @return CreatePolicy
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
