<?php

class PurchaseBinDetail extends BusinessObject
{

    /**
     * @var string $Bin
     */
    protected $Bin = null;

    /**
     * @var ItemKey $ItemKey
     */
    protected $ItemKey = null;

    /**
     * @var PurchaseBinDetailKey $Key
     */
    protected $Key = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $UofM
     */
    protected $UofM = null;

    
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
     * @return PurchaseBinDetail
     */
    public function setBin($Bin)
    {
      $this->Bin = $Bin;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getItemKey()
    {
      return $this->ItemKey;
    }

    /**
     * @param ItemKey $ItemKey
     * @return PurchaseBinDetail
     */
    public function setItemKey($ItemKey)
    {
      $this->ItemKey = $ItemKey;
      return $this;
    }

    /**
     * @return PurchaseBinDetailKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PurchaseBinDetailKey $Key
     * @return PurchaseBinDetail
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return PurchaseBinDetail
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return PurchaseBinDetail
     */
    public function setUofM($UofM)
    {
      $this->UofM = $UofM;
      return $this;
    }

}
