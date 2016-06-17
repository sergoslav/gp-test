<?php

class VendorManufacturingOrder extends ManufacturingOrderDocument
{

    /**
     * @var ArrayOfManufacturingOrderRouteStep $Route
     */
    protected $Route = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return VendorManufacturingOrder
     */
    public function setRoute($Route)
    {
      $this->Route = $Route;
      return $this;
    }

}
