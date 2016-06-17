<?php

class DeleteApplicantApplication
{

    /**
     * @var ApplicantSequenceKey $businessObjectKey
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
     * @param ApplicantSequenceKey $businessObjectKey
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
     * @return ApplicantSequenceKey
     */
    public function getBusinessObjectKey()
    {
      return $this->businessObjectKey;
    }

    /**
     * @param ApplicantSequenceKey $businessObjectKey
     * @return DeleteApplicantApplication
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
     * @return DeleteApplicantApplication
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
     * @return DeleteApplicantApplication
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
