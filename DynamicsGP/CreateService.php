<?php

class CreateService
{

    /**
     * @var Service $service
     */
    protected $service = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param Service $service
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($service, $context, $policy)
    {
      $this->service = $service;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return Service
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param Service $service
     * @return CreateService
     */
    public function setService($service)
    {
      $this->service = $service;
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
     * @return CreateService
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
     * @return CreateService
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
