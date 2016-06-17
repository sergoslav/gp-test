<?php

class GetApplicantByKey
{

    /**
     * @var ApplicantKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ApplicantKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ApplicantKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ApplicantKey $key
     * @return GetApplicantByKey
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
     * @return GetApplicantByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
