<?php

class BetweenRestrictionOfNullableOfdecimal extends ListRestrictionOfNullableOfdecimal
{

    /**
     * @var float $From
     */
    protected $From = null;

    /**
     * @var float $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var float $LessThan
     */
    protected $LessThan = null;

    /**
     * @var float $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return float
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param float $From
     * @return BetweenRestrictionOfNullableOfdecimal
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return float
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param float $GreaterThan
     * @return BetweenRestrictionOfNullableOfdecimal
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return float
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param float $LessThan
     * @return BetweenRestrictionOfNullableOfdecimal
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return float
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param float $To
     * @return BetweenRestrictionOfNullableOfdecimal
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
