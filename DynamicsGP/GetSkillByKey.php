<?php

class GetSkillByKey
{

    /**
     * @var SkillKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SkillKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return SkillKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param SkillKey $key
     * @return GetSkillByKey
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
     * @return GetSkillByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
