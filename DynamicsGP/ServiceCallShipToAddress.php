<?php

class ServiceCallShipToAddress extends ReturnMaterialAuthorizationShipToAddress
{

    /**
     * @var PhoneNumber $Phone1
     */
    protected $Phone1 = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PhoneNumber
     */
    public function getPhone1()
    {
      return $this->Phone1;
    }

    /**
     * @param PhoneNumber $Phone1
     * @return ServiceCallShipToAddress
     */
    public function setPhone1($Phone1)
    {
      $this->Phone1 = $Phone1;
      return $this;
    }

}
