<?php

class BaseChangedKeyCriteria extends Criteria
{

    /**
     * @var RestrictionOfNullableOfDataModificationAction $Action
     */
    protected $Action = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return RestrictionOfNullableOfDataModificationAction
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param RestrictionOfNullableOfDataModificationAction $Action
     * @return BaseChangedKeyCriteria
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
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
     * @return BaseChangedKeyCriteria
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate;
      return $this;
    }

}
