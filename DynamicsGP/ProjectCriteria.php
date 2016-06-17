<?php

class ProjectCriteria extends Criteria
{

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

    /**
     * @var LikeRestrictionOfstring $ProjectContractId
     */
    protected $ProjectContractId = null;

    /**
     * @var LikeRestrictionOfstring $ProjectId
     */
    protected $ProjectId = null;

    /**
     * @var LikeRestrictionOfstring $ProjectManagerId
     */
    protected $ProjectManagerId = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return ProjectCriteria
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
     * @return ProjectCriteria
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
     * @return ProjectCriteria
     */
    public function setProjectClassId($ProjectClassId)
    {
      $this->ProjectClassId = $ProjectClassId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getProjectContractId()
    {
      return $this->ProjectContractId;
    }

    /**
     * @param LikeRestrictionOfstring $ProjectContractId
     * @return ProjectCriteria
     */
    public function setProjectContractId($ProjectContractId)
    {
      $this->ProjectContractId = $ProjectContractId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getProjectId()
    {
      return $this->ProjectId;
    }

    /**
     * @param LikeRestrictionOfstring $ProjectId
     * @return ProjectCriteria
     */
    public function setProjectId($ProjectId)
    {
      $this->ProjectId = $ProjectId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getProjectManagerId()
    {
      return $this->ProjectManagerId;
    }

    /**
     * @param LikeRestrictionOfstring $ProjectManagerId
     * @return ProjectCriteria
     */
    public function setProjectManagerId($ProjectManagerId)
    {
      $this->ProjectManagerId = $ProjectManagerId;
      return $this;
    }

}
