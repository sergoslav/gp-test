<?php

class ProjectChangeOrderCriteria extends Criteria
{

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $Date
     */
    protected $Date = null;

    /**
     * @var LikeRestrictionOfstring $Id
     */
    protected $Id = null;

    /**
     * @var LikeRestrictionOfstring $ProjectContractId
     */
    protected $ProjectContractId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $Date
     * @return ProjectChangeOrderCriteria
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
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
     * @return ProjectChangeOrderCriteria
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return ProjectChangeOrderCriteria
     */
    public function setProjectContractId($ProjectContractId)
    {
      $this->ProjectContractId = $ProjectContractId;
      return $this;
    }

}
