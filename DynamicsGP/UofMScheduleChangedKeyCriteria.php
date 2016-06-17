<?php

class UofMScheduleChangedKeyCriteria extends BaseChangedKeyCriteria
{

    /**
     * @var BetweenRestrictionOfstring $UofMScheduleKeyId
     */
    protected $UofMScheduleKeyId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getUofMScheduleKeyId()
    {
      return $this->UofMScheduleKeyId;
    }

    /**
     * @param BetweenRestrictionOfstring $UofMScheduleKeyId
     * @return UofMScheduleChangedKeyCriteria
     */
    public function setUofMScheduleKeyId($UofMScheduleKeyId)
    {
      $this->UofMScheduleKeyId = $UofMScheduleKeyId;
      return $this;
    }

}
