<?php

class ReturnMaterialAuthorizationReturnToAddress extends ServiceAddress
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return ReturnMaterialAuthorizationReturnToAddress
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
