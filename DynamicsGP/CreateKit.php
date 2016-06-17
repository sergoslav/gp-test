<?php

class CreateKit
{

    /**
     * @var Kit $kit
     */
    protected $kit = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param Kit $kit
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($kit, $context, $policy)
    {
      $this->kit = $kit;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return Kit
     */
    public function getKit()
    {
      return $this->kit;
    }

    /**
     * @param Kit $kit
     * @return CreateKit
     */
    public function setKit($kit)
    {
      $this->kit = $kit;
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
     * @return CreateKit
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
     * @return CreateKit
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
