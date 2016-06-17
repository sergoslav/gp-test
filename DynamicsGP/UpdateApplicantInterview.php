<?php

class UpdateApplicantInterview
{

    /**
     * @var ApplicantInterview $businessObject
     */
    protected $businessObject = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ApplicantInterview $businessObject
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($businessObject, $context, $policy)
    {
      $this->businessObject = $businessObject;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return ApplicantInterview
     */
    public function getBusinessObject()
    {
      return $this->businessObject;
    }

    /**
     * @param ApplicantInterview $businessObject
     * @return UpdateApplicantInterview
     */
    public function setBusinessObject($businessObject)
    {
      $this->businessObject = $businessObject;
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
     * @return UpdateApplicantInterview
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
     * @return UpdateApplicantInterview
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
