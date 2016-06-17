<?php

class InventoryLine extends InventoryLineBase
{

    /**
     * @var ArrayOfInventoryBin $Bins
     */
    protected $Bins = null;

    /**
     * @var GLAccountNumberKey $InventoryGLAccount
     */
    protected $InventoryGLAccount = null;

    /**
     * @var GLAccountNumberKey $InventoryOffsetGLAccount
     */
    protected $InventoryOffsetGLAccount = null;

    /**
     * @var ArrayOfInventoryLot $Lots
     */
    protected $Lots = null;

    /**
     * @var ArrayOfInventorySerial $Serials
     */
    protected $Serials = null;

    /**
     * @var string $UofM
     */
    protected $UofM = null;

    /**
     * @var WarehouseKey $WarehouseKey
     */
    protected $WarehouseKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfInventoryBin
     */
    public function getBins()
    {
      return $this->Bins;
    }

    /**
     * @param ArrayOfInventoryBin $Bins
     * @return InventoryLine
     */
    public function setBins($Bins)
    {
      $this->Bins = $Bins;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getInventoryGLAccount()
    {
      return $this->InventoryGLAccount;
    }

    /**
     * @param GLAccountNumberKey $InventoryGLAccount
     * @return InventoryLine
     */
    public function setInventoryGLAccount($InventoryGLAccount)
    {
      $this->InventoryGLAccount = $InventoryGLAccount;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getInventoryOffsetGLAccount()
    {
      return $this->InventoryOffsetGLAccount;
    }

    /**
     * @param GLAccountNumberKey $InventoryOffsetGLAccount
     * @return InventoryLine
     */
    public function setInventoryOffsetGLAccount($InventoryOffsetGLAccount)
    {
      $this->InventoryOffsetGLAccount = $InventoryOffsetGLAccount;
      return $this;
    }

    /**
     * @return ArrayOfInventoryLot
     */
    public function getLots()
    {
      return $this->Lots;
    }

    /**
     * @param ArrayOfInventoryLot $Lots
     * @return InventoryLine
     */
    public function setLots($Lots)
    {
      $this->Lots = $Lots;
      return $this;
    }

    /**
     * @return ArrayOfInventorySerial
     */
    public function getSerials()
    {
      return $this->Serials;
    }

    /**
     * @param ArrayOfInventorySerial $Serials
     * @return InventoryLine
     */
    public function setSerials($Serials)
    {
      $this->Serials = $Serials;
      return $this;
    }

    /**
     * @return string
     */
    public function getUofM()
    {
      return $this->UofM;
    }

    /**
     * @param string $UofM
     * @return InventoryLine
     */
    public function setUofM($UofM)
    {
      $this->UofM = $UofM;
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
     * @return InventoryLine
     */
    public function setWarehouseKey($WarehouseKey)
    {
      $this->WarehouseKey = $WarehouseKey;
      return $this;
    }

}
