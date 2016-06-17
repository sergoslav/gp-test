<?php

class ProjectContractCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $BusinessManagerId
     */
    protected $BusinessManagerId = null;

    /**
     * @var LikeRestrictionOfstring $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var LikeRestrictionOfstring $Id
     */
    protected $Id = null;

    /**
     * @var LikeRestrictionOfstring $ProjectClassId
     */
    protected $ProjectClassId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getBusinessManagerId()
    {
      return $this->BusinessManagerId;
    }

    /**
     * @param LikeRestrictionOfstring $BusinessManagerId
     * @return ProjectContractCriteria
     */
    public function setBusinessManagerId($BusinessManagerId)
    {
      $this->BusinessManagerId = $BusinessManagerId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getCustomerId()
    {
      return $this->CustomerId;
    }

    /**
     * @param LikeRestrictionOfstring $CustomerId
     * @return ProjectContractCriteria
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
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
     * @return ProjectContractCriteria
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getProjectClassId()
    {
      return $this->ProjectClassId;
    }

    /**
     * @param LikeRestrictionOfstring $ProjectClassId
     * @return ProjectContractCriteria
     */
    public function setProjectClassId($ProjectClassId)
    {
      $this->ProjectClassId = $ProjectClassId;
      return $this;
    }

}
