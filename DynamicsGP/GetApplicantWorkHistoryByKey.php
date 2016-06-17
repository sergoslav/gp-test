<?php

class GetApplicantWorkHistoryByKey
{

    /**
     * @var ApplicantWorkHistoryKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ApplicantWorkHistoryKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ApplicantWorkHistoryKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ApplicantWorkHistoryKey $key
     * @return GetApplicantWorkHistoryByKey
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
     * @return GetApplicantWorkHistoryByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
