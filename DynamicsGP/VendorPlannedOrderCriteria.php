<?php

class VendorPlannedOrderCriteria extends PlannedOrderCriteriaBase
{

    /**
     * @var VendorPlannedOrderScope $Scope
     */
    protected $Scope = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return VendorPlannedOrderScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param VendorPlannedOrderScope $Scope
     * @return VendorPlannedOrderCriteria
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

}
