<?php

class ItemCriteriaBase extends Criteria
{

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var LikeRestrictionOfstring $Description
     */
    protected $Description = null;

    /**
     * @var LikeRestrictionOfstring $GenericDescription
     */
    protected $GenericDescription = null;

    /**
     * @var LikeRestrictionOfstring $ItemClassId
     */
    protected $ItemClassId = null;

    /**
     * @var LikeRestrictionOfstring $ItemId
     */
    protected $ItemId = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var LikeRestrictionOfstring $ShortDescription
     */
    protected $ShortDescription = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getCreatedDate()
    {
      return $this->CreatedDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $CreatedDate
     * @return ItemCriteriaBase
     */
    public function setCreatedDate($CreatedDate)
    {
      $this->CreatedDate = $CreatedDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param LikeRestrictionOfstring $Description
     * @return ItemCriteriaBase
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getGenericDescription()
    {
      return $this->GenericDescription;
    }

    /**
     * @param LikeRestrictionOfstring $GenericDescription
     * @return ItemCriteriaBase
     */
    public function setGenericDescription($GenericDescription)
    {
      $this->GenericDescription = $GenericDescription;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getItemClassId()
    {
      return $this->ItemClassId;
    }

    /**
     * @param LikeRestrictionOfstring $ItemClassId
     * @return ItemCriteriaBase
     */
    public function setItemClassId($ItemClassId)
    {
      $this->ItemClassId = $ItemClassId;
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
     * @return ItemCriteriaBase
     */
    public function setItemId($ItemId)
    {
      $this->ItemId = $ItemId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getLastModifiedDate()
    {
      return $this->LastModifiedDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     * @return ItemCriteriaBase
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getModifiedDate()
    {
      return $this->ModifiedDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $ModifiedDate
     * @return ItemCriteriaBase
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getShortDescription()
    {
      return $this->ShortDescription;
    }

    /**
     * @param LikeRestrictionOfstring $ShortDescription
     * @return ItemCriteriaBase
     */
    public function setShortDescription($ShortDescription)
    {
      $this->ShortDescription = $ShortDescription;
      return $this;
    }

}
