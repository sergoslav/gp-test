<?php

class GetPolicyRoles
{

    /**
     * @var PolicyKey $policyKey
     */
    protected $policyKey = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PolicyKey $policyKey
     * @param Context $context
     */
    public function __construct($policyKey, $context)
    {
      $this->policyKey = $policyKey;
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
     * @return GetPolicyRoles
     */
    public function setPolicyKey($policyKey)
    {
      $this->policyKey = $policyKey;
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
     * @return GetPolicyRoles
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
