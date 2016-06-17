<?php

class Warehouse extends BusinessObject
{

    /**
     * @var InternationalAddress $Address
     */
    protected $Address = null;

    /**
     * @var ArrayOfWarehouseBin $Bins
     */
    protected $Bins = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $IncludeInPlanning
     */
    protected $IncludeInPlanning = null;

    /**
     * @var WarehouseKey $Key
     */
    protected $Key = null;

    /**
     * @var TaxScheduleKey $PurchaseTaxScheduleKey
     */
    protected $PurchaseTaxScheduleKey = null;

    /**
     * @var TaxScheduleKey $SalesTaxScheduleKey
     */
    protected $SalesTaxScheduleKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return InternationalAddress
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param InternationalAddress $Address
     * @return Warehouse
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return ArrayOfWarehouseBin
     */
    public function getBins()
    {
      return $this->Bins;
    }

    /**
     * @param ArrayOfWarehouseBin $Bins
     * @return Warehouse
     */
    public function setBins($Bins)
    {
      $this->Bins = $Bins;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return Warehouse
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeInPlanning()
    {
      return $this->IncludeInPlanning;
    }

    /**
     * @param boolean $IncludeInPlanning
     * @return Warehouse
     */
    public function setIncludeInPlanning($IncludeInPlanning)
    {
      $this->IncludeInPlanning = $IncludeInPlanning;
      return $this;
    }

    /**
     * @return WarehouseKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param WarehouseKey $Key
     * @return Warehouse
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getPurchaseTaxScheduleKey()
    {
      return $this->PurchaseTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $PurchaseTaxScheduleKey
     * @return Warehouse
     */
    public function setPurchaseTaxScheduleKey($PurchaseTaxScheduleKey)
    {
      $this->PurchaseTaxScheduleKey = $PurchaseTaxScheduleKey;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getSalesTaxScheduleKey()
    {
      return $this->SalesTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $SalesTaxScheduleKey
     * @return Warehouse
     */
    public function setSalesTaxScheduleKey($SalesTaxScheduleKey)
    {
      $this->SalesTaxScheduleKey = $SalesTaxScheduleKey;
      return $this;
    }

}
