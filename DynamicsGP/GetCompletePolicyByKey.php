<?php

class GetCompletePolicyByKey
{

    /**
     * @var PolicyKey $key
     */
    protected $key = null;

    /**
     * @var RoleKey $roleKey
     */
    protected $roleKey = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PolicyKey $key
     * @param RoleKey $roleKey
     * @param Context $context
     */
    public function __construct($key, $roleKey, $context)
    {
      $this->key = $key;
      $this->roleKey = $roleKey;
      $this->context = $context;
    }

    /**
     * @return PolicyKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param PolicyKey $key
     * @return GetCompletePolicyByKey
     */
    public function setKey($key)
    {
      $this->key = $key;
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
     * @return GetCompletePolicyByKey
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
     * @return GetCompletePolicyByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
