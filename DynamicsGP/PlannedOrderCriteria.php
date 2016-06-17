<?php

class PlannedOrderCriteria extends PlannedOrderCriteriaBase
{

    /**
     * @var ListRestrictionOfNullableOfPlannedOrderReplenishment $ReplenishmentMethod
     */
    protected $ReplenishmentMethod = null;

    /**
     * @var BetweenRestrictionOfNullableOfint $RunNumber
     */
    protected $RunNumber = null;

    /**
     * @var RestrictionOfNullableOfboolean $Transferred
     */
    protected $Transferred = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ListRestrictionOfNullableOfPlannedOrderReplenishment
     */
    public function getReplenishmentMethod()
    {
      return $this->ReplenishmentMethod;
    }

    /**
     * @param ListRestrictionOfNullableOfPlannedOrderReplenishment $ReplenishmentMethod
     * @return PlannedOrderCriteria
     */
    public function setReplenishmentMethod($ReplenishmentMethod)
    {
      $this->ReplenishmentMethod = $ReplenishmentMethod;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfint
     */
    public function getRunNumber()
    {
      return $this->RunNumber;
    }

    /**
     * @param BetweenRestrictionOfNullableOfint $RunNumber
     * @return PlannedOrderCriteria
     */
    public function setRunNumber($RunNumber)
    {
      $this->RunNumber = $RunNumber;
      return $this;
    }

    /**
     * @return RestrictionOfNullableOfboolean
     */
    public function getTransferred()
    {
      return $this->Transferred;
    }

    /**
     * @param RestrictionOfNullableOfboolean $Transferred
     * @return PlannedOrderCriteria
     */
    public function setTransferred($Transferred)
    {
      $this->Transferred = $Transferred;
      return $this;
    }

}
