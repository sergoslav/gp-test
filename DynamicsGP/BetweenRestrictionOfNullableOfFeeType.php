<?php

class BetweenRestrictionOfNullableOfFeeType extends ListRestrictionOfNullableOfFeeType
{

    /**
     * @var FeeType $From
     */
    protected $From = null;

    /**
     * @var FeeType $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var FeeType $LessThan
     */
    protected $LessThan = null;

    /**
     * @var FeeType $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FeeType
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param FeeType $From
     * @return BetweenRestrictionOfNullableOfFeeType
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return FeeType
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param FeeType $GreaterThan
     * @return BetweenRestrictionOfNullableOfFeeType
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return FeeType
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param FeeType $LessThan
     * @return BetweenRestrictionOfNullableOfFeeType
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return FeeType
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param FeeType $To
     * @return BetweenRestrictionOfNullableOfFeeType
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
