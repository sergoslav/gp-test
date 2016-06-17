<?php

class ParameterKey extends Key
{

    /**
     * @var BehaviorOptionKey $BehaviorOptionKey
     */
    protected $BehaviorOptionKey = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BehaviorOptionKey
     */
    public function getBehaviorOptionKey()
    {
      return $this->BehaviorOptionKey;
    }

    /**
     * @param BehaviorOptionKey $BehaviorOptionKey
     * @return ParameterKey
     */
    public function setBehaviorOptionKey($BehaviorOptionKey)
    {
      $this->BehaviorOptionKey = $BehaviorOptionKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return ParameterKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
