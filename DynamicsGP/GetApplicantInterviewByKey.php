<?php

class GetApplicantInterviewByKey
{

    /**
     * @var ApplicantInterviewTypeKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ApplicantInterviewTypeKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ApplicantInterviewTypeKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ApplicantInterviewTypeKey $key
     * @return GetApplicantInterviewByKey
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
     * @return GetApplicantInterviewByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
