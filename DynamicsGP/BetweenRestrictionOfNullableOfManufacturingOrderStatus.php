<?php

class BetweenRestrictionOfNullableOfManufacturingOrderStatus extends ListRestrictionOfNullableOfManufacturingOrderStatus
{

    /**
     * @var ManufacturingOrderStatus $From
     */
    protected $From = null;

    /**
     * @var ManufacturingOrderStatus $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var ManufacturingOrderStatus $LessThan
     */
    protected $LessThan = null;

    /**
     * @var ManufacturingOrderStatus $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ManufacturingOrderStatus
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param ManufacturingOrderStatus $From
     * @return BetweenRestrictionOfNullableOfManufacturingOrderStatus
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return ManufacturingOrderStatus
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param ManufacturingOrderStatus $GreaterThan
     * @return BetweenRestrictionOfNullableOfManufacturingOrderStatus
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return ManufacturingOrderStatus
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param ManufacturingOrderStatus $LessThan
     * @return BetweenRestrictionOfNullableOfManufacturingOrderStatus
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return ManufacturingOrderStatus
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param ManufacturingOrderStatus $To
     * @return BetweenRestrictionOfNullableOfManufacturingOrderStatus
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
