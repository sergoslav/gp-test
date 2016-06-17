<?php

class BetweenRestrictionOfNullableOfPlannedOrderReplenishment extends ListRestrictionOfNullableOfPlannedOrderReplenishment
{

    /**
     * @var PlannedOrderReplenishment $From
     */
    protected $From = null;

    /**
     * @var PlannedOrderReplenishment $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var PlannedOrderReplenishment $LessThan
     */
    protected $LessThan = null;

    /**
     * @var PlannedOrderReplenishment $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PlannedOrderReplenishment
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param PlannedOrderReplenishment $From
     * @return BetweenRestrictionOfNullableOfPlannedOrderReplenishment
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return PlannedOrderReplenishment
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param PlannedOrderReplenishment $GreaterThan
     * @return BetweenRestrictionOfNullableOfPlannedOrderReplenishment
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return PlannedOrderReplenishment
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param PlannedOrderReplenishment $LessThan
     * @return BetweenRestrictionOfNullableOfPlannedOrderReplenishment
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return PlannedOrderReplenishment
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param PlannedOrderReplenishment $To
     * @return BetweenRestrictionOfNullableOfPlannedOrderReplenishment
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
