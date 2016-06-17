<?php

class ManufacturingOrder extends ManufacturingOrderDocument
{

    /**
     * @var ArrayOfManufacturingOrderPickListItem $PickList
     */
    protected $PickList = null;

    /**
     * @var ArrayOfManufacturingOrderRouteStep $Route
     */
    protected $Route = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfManufacturingOrderPickListItem
     */
    public function getPickList()
    {
      return $this->PickList;
    }

    /**
     * @param ArrayOfManufacturingOrderPickListItem $PickList
     * @return ManufacturingOrder
     */
    public function setPickList($PickList)
    {
      $this->PickList = $PickList;
      return $this;
    }

    /**
     * @return ArrayOfManufacturingOrderRouteStep
     */
    public function getRoute()
    {
      return $this->Route;
    }

    /**
     * @param ArrayOfManufacturingOrderRouteStep $Route
     * @return ManufacturingOrder
     */
    public function setRoute($Route)
    {
      $this->Route = $Route;
      return $this;
    }

}
