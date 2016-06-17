<?php

class BusinessAddress extends InternationalAddress
{

    /**
     * @var string $ContactPerson
     */
    protected $ContactPerson = null;

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
    public function getContactPerson()
    {
      return $this->ContactPerson;
    }

    /**
     * @param string $ContactPerson
     * @return BusinessAddress
     */
    public function setContactPerson($ContactPerson)
    {
      $this->ContactPerson = $ContactPerson;
      return $this;
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
     * @return BusinessAddress
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
