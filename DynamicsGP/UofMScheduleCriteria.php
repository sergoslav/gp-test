<?php

class UofMScheduleCriteria extends Criteria
{

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var LikeRestrictionOfstring $UnitofMeasureScheduleId
     */
    protected $UnitofMeasureScheduleId = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return UofMScheduleCriteria
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getUnitofMeasureScheduleId()
    {
      return $this->UnitofMeasureScheduleId;
    }

    /**
     * @param LikeRestrictionOfstring $UnitofMeasureScheduleId
     * @return UofMScheduleCriteria
     */
    public function setUnitofMeasureScheduleId($UnitofMeasureScheduleId)
    {
      $this->UnitofMeasureScheduleId = $UnitofMeasureScheduleId;
      return $this;
    }

}
