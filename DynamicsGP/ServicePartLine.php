<?php

class ServicePartLine extends ServiceLine
{

    /**
     * @var Percent $BillablePartsPercent
     */
    protected $BillablePartsPercent = null;

    /**
     * @var boolean $DoNotCreateReturnLine
     */
    protected $DoNotCreateReturnLine = null;

    /**
     * @var AddressKey $MiscellaneousAddressKey
     */
    protected $MiscellaneousAddressKey = null;

    /**
     * @var ServiceLinePurchaseOrderCreation $PurchaseOrder
     */
    protected $PurchaseOrder = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var Quantity $QuantityBackordered
     */
    protected $QuantityBackordered = null;

    /**
     * @var ServiceAddressOptionTypes $ShipToAddressOptionType
     */
    protected $ShipToAddressOptionType = null;

    /**
     * @var ServiceCallStatusCodeKey $StatusCodeKey
     */
    protected $StatusCodeKey = null;

    /**
     * @var ServicePartUseType $UseType
     */
    protected $UseType = null;

    /**
     * @var WarehouseKey $WarehouseKey
     */
    protected $WarehouseKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Percent
     */
    public function getBillablePartsPercent()
    {
      return $this->BillablePartsPercent;
    }

    /**
     * @param Percent $BillablePartsPercent
     * @return ServicePartLine
     */
    public function setBillablePartsPercent($BillablePartsPercent)
    {
      $this->BillablePartsPercent = $BillablePartsPercent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoNotCreateReturnLine()
    {
      return $this->DoNotCreateReturnLine;
    }

    /**
     * @param boolean $DoNotCreateReturnLine
     * @return ServicePartLine
     */
    public function setDoNotCreateReturnLine($DoNotCreateReturnLine)
    {
      $this->DoNotCreateReturnLine = $DoNotCreateReturnLine;
      return $this;
    }

    /**
     * @return AddressKey
     */
    public function getMiscellaneousAddressKey()
    {
      return $this->MiscellaneousAddressKey;
    }

    /**
     * @param AddressKey $MiscellaneousAddressKey
     * @return ServicePartLine
     */
    public function setMiscellaneousAddressKey($MiscellaneousAddressKey)
    {
      $this->MiscellaneousAddressKey = $MiscellaneousAddressKey;
      return $this;
    }

    /**
     * @return ServiceLinePurchaseOrderCreation
     */
    public function getPurchaseOrder()
    {
      return $this->PurchaseOrder;
    }

    /**
     * @param ServiceLinePurchaseOrderCreation $PurchaseOrder
     * @return ServicePartLine
     */
    public function setPurchaseOrder($PurchaseOrder)
    {
      $this->PurchaseOrder = $PurchaseOrder;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param Quantity $Quantity
     * @return ServicePartLine
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantityBackordered()
    {
      return $this->QuantityBackordered;
    }

    /**
     * @param Quantity $QuantityBackordered
     * @return ServicePartLine
     */
    public function setQuantityBackordered($QuantityBackordered)
    {
      $this->QuantityBackordered = $QuantityBackordered;
      return $this;
    }

    /**
     * @return ServiceAddressOptionTypes
     */
    public function getShipToAddressOptionType()
    {
      return $this->ShipToAddressOptionType;
    }

    /**
     * @param ServiceAddressOptionTypes $ShipToAddressOptionType
     * @return ServicePartLine
     */
    public function setShipToAddressOptionType($ShipToAddressOptionType)
    {
      $this->ShipToAddressOptionType = $ShipToAddressOptionType;
      return $this;
    }

    /**
     * @return ServiceCallStatusCodeKey
     */
    public function getStatusCodeKey()
    {
      return $this->StatusCodeKey;
    }

    /**
     * @param ServiceCallStatusCodeKey $StatusCodeKey
     * @return ServicePartLine
     */
    public function setStatusCodeKey($StatusCodeKey)
    {
      $this->StatusCodeKey = $StatusCodeKey;
      return $this;
    }

    /**
     * @return ServicePartUseType
     */
    public function getUseType()
    {
      return $this->UseType;
    }

    /**
     * @param ServicePartUseType $UseType
     * @return ServicePartLine
     */
    public function setUseType($UseType)
    {
      $this->UseType = $UseType;
      return $this;
    }

    /**
     * @return WarehouseKey
     */
    public function getWarehouseKey()
    {
      return $this->WarehouseKey;
    }

    /**
     * @param WarehouseKey $WarehouseKey
     * @return ServicePartLine
     */
    public function setWarehouseKey($WarehouseKey)
    {
      $this->WarehouseKey = $WarehouseKey;
      return $this;
    }

}
