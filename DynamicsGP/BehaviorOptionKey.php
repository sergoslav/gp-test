<?php

class BehaviorOptionKey extends Key
{

    /**
     * @var BehaviorKey $BehaviorKey
     */
    protected $BehaviorKey = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BehaviorKey
     */
    public function getBehaviorKey()
    {
      return $this->BehaviorKey;
    }

    /**
     * @param BehaviorKey $BehaviorKey
     * @return BehaviorOptionKey
     */
    public function setBehaviorKey($BehaviorKey)
    {
      $this->BehaviorKey = $BehaviorKey;
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
     * @return BehaviorOptionKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
