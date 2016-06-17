<?php

class GetApplicantTestByKey
{

    /**
     * @var ApplicantTestKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ApplicantTestKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ApplicantTestKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ApplicantTestKey $key
     * @return GetApplicantTestByKey
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
     * @return GetApplicantTestByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
