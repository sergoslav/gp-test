<?php

class GetApplicantReferenceByKey
{

    /**
     * @var ApplicantReferenceKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ApplicantReferenceKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ApplicantReferenceKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ApplicantReferenceKey $key
     * @return GetApplicantReferenceByKey
     */
    public function setKey($key)
    {
      $this->key = $key;
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
     * @return GetApplicantReferenceByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
