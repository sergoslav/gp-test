<?php

class PurchaseSerialDetail extends BusinessObject
{

    /**
     * @var string $Bin
     */
    protected $Bin = null;

    /**
     * @var PurchaseSerialDetailKey $Key
     */
    protected $Key = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var MoneyAmount $UnitCost
     */
    protected $UnitCost = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getBin()
    {
      return $this->Bin;
    }

    /**
     * @param string $Bin
     * @return PurchaseSerialDetail
     */
    public function setBin($Bin)
    {
      $this->Bin = $Bin;
      return $this;
    }

    /**
     * @return PurchaseSerialDetailKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PurchaseSerialDetailKey $Key
     * @return PurchaseSerialDetail
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
      return $this->SerialNumber;
    }

    /**
     * @param string $SerialNumber
     * @return PurchaseSerialDetail
     */
    public function setSerialNumber($SerialNumber)
    {
      $this->SerialNumber = $SerialNumber;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getUnitCost()
    {
      return $this->UnitCost;
    }

    /**
     * @param MoneyAmount $UnitCost
     * @return PurchaseSerialDetail
     */
    public function setUnitCost($UnitCost)
    {
      $this->UnitCost = $UnitCost;
      return $this;
    }

}
