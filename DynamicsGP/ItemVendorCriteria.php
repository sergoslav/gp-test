<?php

class ItemVendorCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $ItemId
     */
    protected $ItemId = null;

    /**
     * @var VendorScope $Scope
     */
    protected $Scope = null;

    /**
     * @var LikeRestrictionOfstring $VendorId
     */
    protected $VendorId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getItemId()
    {
      return $this->ItemId;
    }

    /**
     * @param LikeRestrictionOfstring $ItemId
     * @return ItemVendorCriteria
     */
    public function setItemId($ItemId)
    {
      $this->ItemId = $ItemId;
      return $this;
    }

    /**
     * @return VendorScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param VendorScope $Scope
     * @return ItemVendorCriteria
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getVendorId()
    {
      return $this->VendorId;
    }

    /**
     * @param LikeRestrictionOfstring $VendorId
     * @return ItemVendorCriteria
     */
    public function setVendorId($VendorId)
    {
      $this->VendorId = $VendorId;
      return $this;
    }

}
