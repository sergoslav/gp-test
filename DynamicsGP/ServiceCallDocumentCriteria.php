<?php

class ServiceCallDocumentCriteria extends ServiceDocumentCriteria
{

    /**
     * @var ServiceCallDocumentScope $Scope
     */
    protected $Scope = null;

    /**
     * @var LikeRestrictionOfstring $ServiceTypeId
     */
    protected $ServiceTypeId = null;

    /**
     * @var LikeRestrictionOfstring $StatusCodeId
     */
    protected $StatusCodeId = null;

    /**
     * @var LikeRestrictionOfstring $TechnicianId
     */
    protected $TechnicianId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ServiceCallDocumentScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param ServiceCallDocumentScope $Scope
     * @return ServiceCallDocumentCriteria
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getServiceTypeId()
    {
      return $this->ServiceTypeId;
    }

    /**
     * @param LikeRestrictionOfstring $ServiceTypeId
     * @return ServiceCallDocumentCriteria
     */
    public function setServiceTypeId($ServiceTypeId)
    {
      $this->ServiceTypeId = $ServiceTypeId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getStatusCodeId()
    {
      return $this->StatusCodeId;
    }

    /**
     * @param LikeRestrictionOfstring $StatusCodeId
     * @return ServiceCallDocumentCriteria
     */
    public function setStatusCodeId($StatusCodeId)
    {
      $this->StatusCodeId = $StatusCodeId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getTechnicianId()
    {
      return $this->TechnicianId;
    }

    /**
     * @param LikeRestrictionOfstring $TechnicianId
     * @return ServiceCallDocumentCriteria
     */
    public function setTechnicianId($TechnicianId)
    {
      $this->TechnicianId = $TechnicianId;
      return $this;
    }

}
