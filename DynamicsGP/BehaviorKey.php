<?php

class BehaviorKey extends Key
{

    /**
     * @var guid $Id
     */
    protected $Id = null;

    /**
     * @var PolicyKey $PolicyKey
     */
    protected $PolicyKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return guid
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param guid $Id
     * @return BehaviorKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return PolicyKey
     */
    public function getPolicyKey()
    {
      return $this->PolicyKey;
    }

    /**
     * @param PolicyKey $PolicyKey
     * @return BehaviorKey
     */
    public function setPolicyKey($PolicyKey)
    {
      $this->PolicyKey = $PolicyKey;
      return $this;
    }

}
