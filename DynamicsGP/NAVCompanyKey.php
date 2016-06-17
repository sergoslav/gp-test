<?php

class NAVCompanyKey extends OrganizationKey
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
     * @return NAVCompanyKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
