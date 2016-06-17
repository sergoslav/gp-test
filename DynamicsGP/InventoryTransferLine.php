<?php

class InventoryTransferLine extends InventoryLineBase
{

    /**
     * @var ArrayOfInventoryTransferBin $Bins
     */
    protected $Bins = null;

    /**
     * @var GLAccountNumberKey $InventoryFromGLAccount
     */
    protected $InventoryFromGLAccount = null;

    /**
     * @var GLAccountNumberKey $InventoryToGLAccount
     */
    protected $InventoryToGLAccount = null;

    /**
     * @var ArrayOfInventoryTransferLot $Lots
     */
    protected $Lots = null;

    /**
     * @var QuantityType $QuantityTypeFrom
     */
    protected $QuantityTypeFrom = null;

    /**
     * @var QuantityType $QuantityTypeTo
     */
    protected $QuantityTypeTo = null;

    /**
     * @var ArrayOfInventoryTransferSerial $Serials
     */
    protected $Serials = null;

    /**
     * @var WarehouseKey $WarehouseFromKey
     */
    protected $WarehouseFromKey = null;

    /**
     * @var WarehouseKey $WarehouseToKey
     */
    protected $WarehouseToKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfInventoryTransferBin
     */
    public function getBins()
    {
      return $this->Bins;
    }

    /**
     * @param ArrayOfInventoryTransferBin $Bins
     * @return InventoryTransferLine
     */
    public function setBins($Bins)
    {
      $this->Bins = $Bins;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getInventoryFromGLAccount()
    {
      return $this->InventoryFromGLAccount;
    }

    /**
     * @param GLAccountNumberKey $InventoryFromGLAccount
     * @return InventoryTransferLine
     */
    public function setInventoryFromGLAccount($InventoryFromGLAccount)
    {
      $this->InventoryFromGLAccount = $InventoryFromGLAccount;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getInventoryToGLAccount()
    {
      return $this->InventoryToGLAccount;
    }

    /**
     * @param GLAccountNumberKey $InventoryToGLAccount
     * @return InventoryTransferLine
     */
    public function setInventoryToGLAccount($InventoryToGLAccount)
    {
      $this->InventoryToGLAccount = $InventoryToGLAccount;
      return $this;
    }

    /**
     * @return ArrayOfInventoryTransferLot
     */
    public function getLots()
    {
      return $this->Lots;
    }

    /**
     * @param ArrayOfInventoryTransferLot $Lots
     * @return InventoryTransferLine
     */
    public function setLots($Lots)
    {
      $this->Lots = $Lots;
      return $this;
    }

    /**
     * @return QuantityType
     */
    public function getQuantityTypeFrom()
    {
      return $this->QuantityTypeFrom;
    }

    /**
     * @param QuantityType $QuantityTypeFrom
     * @return InventoryTransferLine
     */
    public function setQuantityTypeFrom($QuantityTypeFrom)
    {
      $this->QuantityTypeFrom = $QuantityTypeFrom;
      return $this;
    }

    /**
     * @return QuantityType
     */
    public function getQuantityTypeTo()
    {
      return $this->QuantityTypeTo;
    }

    /**
     * @param QuantityType $QuantityTypeTo
     * @return InventoryTransferLine
     */
    public function setQuantityTypeTo($QuantityTypeTo)
    {
      $this->QuantityTypeTo = $QuantityTypeTo;
      return $this;
    }

    /**
     * @return ArrayOfInventoryTransferSerial
     */
    public function getSerials()
    {
      return $this->Serials;
    }

    /**
     * @param ArrayOfInventoryTransferSerial $Serials
     * @return InventoryTransferLine
     */
    public function setSerials($Serials)
    {
      $this->Serials = $Serials;
      return $this;
    }

    /**
     * @return WarehouseKey
     */
    public function getWarehouseFromKey()
    {
      return $this->WarehouseFromKey;
    }

    /**
     * @param WarehouseKey $WarehouseFromKey
     * @return InventoryTransferLine
     */
    public function setWarehouseFromKey($WarehouseFromKey)
    {
      $this->WarehouseFromKey = $WarehouseFromKey;
      return $this;
    }

    /**
     * @return WarehouseKey
     */
    public function getWarehouseToKey()
    {
      return $this->WarehouseToKey;
    }

    /**
     * @param WarehouseKey $WarehouseToKey
     * @return InventoryTransferLine
     */
    public function setWarehouseToKey($WarehouseToKey)
    {
      $this->WarehouseToKey = $WarehouseToKey;
      return $this;
    }

}
