<?php

class ServiceEquipmentCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $AddressId
     */
    protected $AddressId = null;

    /**
     * @var LikeRestrictionOfstring $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var LikeRestrictionOfstring $Id
     */
    protected $Id = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $InstallDate
     */
    protected $InstallDate = null;

    /**
     * @var LikeRestrictionOfstring $ItemId
     */
    protected $ItemId = null;

    /**
     * @var ServiceEquipmentScope $Scope
     */
    protected $Scope = null;

    /**
     * @var LikeRestrictionOfstring $StatusId
     */
    protected $StatusId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getAddressId()
    {
      return $this->AddressId;
    }

    /**
     * @param LikeRestrictionOfstring $AddressId
     * @return ServiceEquipmentCriteria
     */
    public function setAddressId($AddressId)
    {
      $this->AddressId = $AddressId;
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
     * @return ServiceEquipmentCriteria
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
     * @return ServiceEquipmentCriteria
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getInstallDate()
    {
      return $this->InstallDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $InstallDate
     * @return ServiceEquipmentCriteria
     */
    public function setInstallDate($InstallDate)
    {
      $this->InstallDate = $InstallDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getItemId()
    {
      return $this->ItemId;
    }

    /**
     * @param LikeRestrictionOfstring $ItemId
     * @return ServiceEquipmentCriteria
     */
    public function setItemId($ItemId)
    {
      $this->ItemId = $ItemId;
      return $this;
    }

    /**
     * @return ServiceEquipmentScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param ServiceEquipmentScope $Scope
     * @return ServiceEquipmentCriteria
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getStatusId()
    {
      return $this->StatusId;
    }

    /**
     * @param LikeRestrictionOfstring $StatusId
     * @return ServiceEquipmentCriteria
     */
    public function setStatusId($StatusId)
    {
      $this->StatusId = $StatusId;
      return $this;
    }

}
