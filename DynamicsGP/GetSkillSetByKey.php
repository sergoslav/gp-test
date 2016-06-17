<?php

class GetSkillSetByKey
{

    /**
     * @var SkillSetKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SkillSetKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return SkillSetKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param SkillSetKey $key
     * @return GetSkillSetByKey
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
     * @return GetSkillSetByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
