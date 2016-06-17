<?php

class BusinessObjectSummaryCriteria extends Criteria
{

    /**
     * @var RestrictionOfstring $BusinessObjectKey
     */
    protected $BusinessObjectKey = null;

    /**
     * @var LikeRestrictionOfstring $DisplayId
     */
    protected $DisplayId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return RestrictionOfstring
     */
    public function getBusinessObjectKey()
    {
      return $this->BusinessObjectKey;
    }

    /**
     * @param RestrictionOfstring $BusinessObjectKey
     * @return BusinessObjectSummaryCriteria
     */
    public function setBusinessObjectKey($BusinessObjectKey)
    {
      $this->BusinessObjectKey = $BusinessObjectKey;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getDisplayId()
    {
      return $this->DisplayId;
    }

    /**
     * @param LikeRestrictionOfstring $DisplayId
     * @return BusinessObjectSummaryCriteria
     */
    public function setDisplayId($DisplayId)
    {
      $this->DisplayId = $DisplayId;
      return $this;
    }

}
