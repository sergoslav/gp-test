<?php

class BetweenRestrictionOfNullableOfCompensationPeriod extends ListRestrictionOfNullableOfCompensationPeriod
{

    /**
     * @var CompensationPeriod $From
     */
    protected $From = null;

    /**
     * @var CompensationPeriod $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var CompensationPeriod $LessThan
     */
    protected $LessThan = null;

    /**
     * @var CompensationPeriod $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CompensationPeriod
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param CompensationPeriod $From
     * @return BetweenRestrictionOfNullableOfCompensationPeriod
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return CompensationPeriod
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param CompensationPeriod $GreaterThan
     * @return BetweenRestrictionOfNullableOfCompensationPeriod
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return CompensationPeriod
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param CompensationPeriod $LessThan
     * @return BetweenRestrictionOfNullableOfCompensationPeriod
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return CompensationPeriod
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param CompensationPeriod $To
     * @return BetweenRestrictionOfNullableOfCompensationPeriod
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
