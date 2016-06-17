<?php

class PlannedOrderCriteriaBase extends Criteria
{

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var LikeRestrictionOfstring $ItemKey
     */
    protected $ItemKey = null;

    /**
     * @var LikeRestrictionOfstring $LocationKey
     */
    protected $LocationKey = null;

    /**
     * @var LikeRestrictionOfstring $PlannedOrderKey
     */
    protected $PlannedOrderKey = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $ReleaseDate
     */
    protected $ReleaseDate = null;

    /**
     * @var LikeRestrictionOfstring $VendorKeyId
     */
    protected $VendorKeyId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getDueDate()
    {
      return $this->DueDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $DueDate
     * @return PlannedOrderCriteriaBase
     */
    public function setDueDate($DueDate)
    {
      $this->DueDate = $DueDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getItemKey()
    {
      return $this->ItemKey;
    }

    /**
     * @param LikeRestrictionOfstring $ItemKey
     * @return PlannedOrderCriteriaBase
     */
    public function setItemKey($ItemKey)
    {
      $this->ItemKey = $ItemKey;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getLocationKey()
    {
      return $this->LocationKey;
    }

    /**
     * @param LikeRestrictionOfstring $LocationKey
     * @return PlannedOrderCriteriaBase
     */
    public function setLocationKey($LocationKey)
    {
      $this->LocationKey = $LocationKey;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getPlannedOrderKey()
    {
      return $this->PlannedOrderKey;
    }

    /**
     * @param LikeRestrictionOfstring $PlannedOrderKey
     * @return PlannedOrderCriteriaBase
     */
    public function setPlannedOrderKey($PlannedOrderKey)
    {
      $this->PlannedOrderKey = $PlannedOrderKey;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getReleaseDate()
    {
      return $this->ReleaseDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $ReleaseDate
     * @return PlannedOrderCriteriaBase
     */
    public function setReleaseDate($ReleaseDate)
    {
      $this->ReleaseDate = $ReleaseDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getVendorKeyId()
    {
      return $this->VendorKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $VendorKeyId
     * @return PlannedOrderCriteriaBase
     */
    public function setVendorKeyId($VendorKeyId)
    {
      $this->VendorKeyId = $VendorKeyId;
      return $this;
    }

}
