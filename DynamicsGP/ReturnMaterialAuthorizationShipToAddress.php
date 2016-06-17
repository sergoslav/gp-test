<?php

class ReturnMaterialAuthorizationShipToAddress extends ServiceAddress
{

    /**
     * @var string $ContactPerson
     */
    protected $ContactPerson = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getContactPerson()
    {
      return $this->ContactPerson;
    }

    /**
     * @param string $ContactPerson
     * @return ReturnMaterialAuthorizationShipToAddress
     */
    public function setContactPerson($ContactPerson)
    {
      $this->ContactPerson = $ContactPerson;
      return $this;
    }

}
