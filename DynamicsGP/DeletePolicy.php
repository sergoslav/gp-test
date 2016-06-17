<?php

class DeletePolicy
{

    /**
     * @var PolicyKey $policyKey
     */
    protected $policyKey = null;

    /**
     * @var RoleKey $roleKey
     */
    protected $roleKey = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PolicyKey $policyKey
     * @param RoleKey $roleKey
     * @param Context $context
     */
    public function __construct($policyKey, $roleKey, $context)
    {
      $this->policyKey = $policyKey;
      $this->roleKey = $roleKey;
      $this->context = $context;
    }

    /**
     * @return PolicyKey
     */
    public function getPolicyKey()
    {
      return $this->policyKey;
    }

    /**
     * @param PolicyKey $policyKey
     * @return DeletePolicy
     */
    public function setPolicyKey($policyKey)
    {
      $this->policyKey = $policyKey;
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
     * @return DeletePolicy
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
     * @return DeletePolicy
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
