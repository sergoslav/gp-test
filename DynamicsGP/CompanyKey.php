<?php

class CompanyKey extends OrganizationKey
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    
    public function __construct()
    {
    
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
     * @return CompanyKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
