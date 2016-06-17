<?php

class UpdateReturnMaterialAuthorization
{

    /**
     * @var ReturnMaterialAuthorization $returnMaterialAuthorization
     */
    protected $returnMaterialAuthorization = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ReturnMaterialAuthorization $returnMaterialAuthorization
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($returnMaterialAuthorization, $context, $policy)
    {
      $this->returnMaterialAuthorization = $returnMaterialAuthorization;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return ReturnMaterialAuthorization
     */
    public function getReturnMaterialAuthorization()
    {
      return $this->returnMaterialAuthorization;
    }

    /**
     * @param ReturnMaterialAuthorization $returnMaterialAuthorization
     * @return UpdateReturnMaterialAuthorization
     */
    public function setReturnMaterialAuthorization($returnMaterialAuthorization)
    {
      $this->returnMaterialAuthorization = $returnMaterialAuthorization;
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
     * @return UpdateReturnMaterialAuthorization
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
     * @return UpdateReturnMaterialAuthorization
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
