<?php

class DeleteApplicantInterview
{

    /**
     * @var ApplicantInterviewTypeKey $businessObjectKey
     */
    protected $businessObjectKey = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ApplicantInterviewTypeKey $businessObjectKey
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($businessObjectKey, $context, $policy)
    {
      $this->businessObjectKey = $businessObjectKey;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return ApplicantInterviewTypeKey
     */
    public function getBusinessObjectKey()
    {
      return $this->businessObjectKey;
    }

    /**
     * @param ApplicantInterviewTypeKey $businessObjectKey
     * @return DeleteApplicantInterview
     */
    public function setBusinessObjectKey($businessObjectKey)
    {
      $this->businessObjectKey = $businessObjectKey;
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
     * @return DeleteApplicantInterview
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
     * @return DeleteApplicantInterview
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
