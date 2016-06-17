<?php

class GetApplicantSkillByKey
{

    /**
     * @var ApplicantSkillKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ApplicantSkillKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ApplicantSkillKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ApplicantSkillKey $key
     * @return GetApplicantSkillByKey
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
     * @return GetApplicantSkillByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
