<?php

class BetweenRestrictionOfNullableOfManufacturingOrderPriority extends ListRestrictionOfNullableOfManufacturingOrderPriority
{

    /**
     * @var ManufacturingOrderPriority $From
     */
    protected $From = null;

    /**
     * @var ManufacturingOrderPriority $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var ManufacturingOrderPriority $LessThan
     */
    protected $LessThan = null;

    /**
     * @var ManufacturingOrderPriority $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ManufacturingOrderPriority
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param ManufacturingOrderPriority $From
     * @return BetweenRestrictionOfNullableOfManufacturingOrderPriority
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return ManufacturingOrderPriority
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param ManufacturingOrderPriority $GreaterThan
     * @return BetweenRestrictionOfNullableOfManufacturingOrderPriority
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return ManufacturingOrderPriority
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param ManufacturingOrderPriority $LessThan
     * @return BetweenRestrictionOfNullableOfManufacturingOrderPriority
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return ManufacturingOrderPriority
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param ManufacturingOrderPriority $To
     * @return BetweenRestrictionOfNullableOfManufacturingOrderPriority
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
