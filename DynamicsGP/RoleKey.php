<?php

class RoleKey extends SecurityKey
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return RoleKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
