<?php

class CreateServiceCall
{

    /**
     * @var ServiceCall $serviceCall
     */
    protected $serviceCall = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ServiceCall $serviceCall
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($serviceCall, $context, $policy)
    {
      $this->serviceCall = $serviceCall;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return ServiceCall
     */
    public function getServiceCall()
    {
      return $this->serviceCall;
    }

    /**
     * @param ServiceCall $serviceCall
     * @return CreateServiceCall
     */
    public function setServiceCall($serviceCall)
    {
      $this->serviceCall = $serviceCall;
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
     * @return CreateServiceCall
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
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
     * @return CreateServiceCall
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
