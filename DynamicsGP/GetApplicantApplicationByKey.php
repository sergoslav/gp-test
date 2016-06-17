<?php

class GetApplicantApplicationByKey
{

    /**
     * @var ApplicantSequenceKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ApplicantSequenceKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ApplicantSequenceKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ApplicantSequenceKey $key
     * @return GetApplicantApplicationByKey
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
     * @return GetApplicantApplicationByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
