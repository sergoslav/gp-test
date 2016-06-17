<?php

class BankCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $Branch
     */
    protected $Branch = null;

    /**
     * @var LikeRestrictionOfstring $Id
     */
    protected $Id = null;

    /**
     * @var LikeRestrictionOfstring $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getBranch()
    {
      return $this->Branch;
    }

    /**
     * @param LikeRestrictionOfstring $Branch
     * @return BankCriteria
     */
    public function setBranch($Branch)
    {
      $this->Branch = $Branch;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param LikeRestrictionOfstring $Id
     * @return BankCriteria
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param LikeRestrictionOfstring $Name
     * @return BankCriteria
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
