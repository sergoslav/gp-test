<?php

class AXCompanyKey extends OrganizationKey
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
     * @return AXCompanyKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
