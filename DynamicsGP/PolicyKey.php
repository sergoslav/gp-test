<?php

class PolicyKey extends Key
{

    /**
     * @var guid $Id
     */
    protected $Id = null;

    
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
     * @return PolicyKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
