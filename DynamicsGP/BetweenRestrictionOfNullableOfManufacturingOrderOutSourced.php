<?php

class BetweenRestrictionOfNullableOfManufacturingOrderOutSourced extends ListRestrictionOfNullableOfManufacturingOrderOutSourced
{

    /**
     * @var ManufacturingOrderOutSourced $From
     */
    protected $From = null;

    /**
     * @var ManufacturingOrderOutSourced $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var ManufacturingOrderOutSourced $LessThan
     */
    protected $LessThan = null;

    /**
     * @var ManufacturingOrderOutSourced $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ManufacturingOrderOutSourced
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param ManufacturingOrderOutSourced $From
     * @return BetweenRestrictionOfNullableOfManufacturingOrderOutSourced
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return ManufacturingOrderOutSourced
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param ManufacturingOrderOutSourced $GreaterThan
     * @return BetweenRestrictionOfNullableOfManufacturingOrderOutSourced
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return ManufacturingOrderOutSourced
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param ManufacturingOrderOutSourced $LessThan
     * @return BetweenRestrictionOfNullableOfManufacturingOrderOutSourced
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return ManufacturingOrderOutSourced
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param ManufacturingOrderOutSourced $To
     * @return BetweenRestrictionOfNullableOfManufacturingOrderOutSourced
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
