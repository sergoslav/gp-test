<?php

class VendorManufacturingOrderCriteria extends ManufacturingOrderDocumentCriteria
{

    /**
     * @var VendorManufacturingOrderScope $Scope
     */
    protected $Scope = null;

    /**
     * @var LikeRestrictionOfstring $VendorKeyId
     */
    protected $VendorKeyId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return VendorManufacturingOrderScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param VendorManufacturingOrderScope $Scope
     * @return VendorManufacturingOrderCriteria
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getVendorKeyId()
    {
      return $this->VendorKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $VendorKeyId
     * @return VendorManufacturingOrderCriteria
     */
    public function setVendorKeyId($VendorKeyId)
    {
      $this->VendorKeyId = $VendorKeyId;
      return $this;
    }

}
