<?php

class PurchaseLotDetail extends BusinessObject
{

    /**
     * @var string $Bin
     */
    protected $Bin = null;

    /**
     * @var \DateTime $DateReceived
     */
    protected $DateReceived = null;

    /**
     * @var float $DateSequenceNumber
     */
    protected $DateSequenceNumber = null;

    /**
     * @var \DateTime $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var PurchaseLotDetailKey $Key
     */
    protected $Key = null;

    /**
     * @var string $LotNumber
     */
    protected $LotNumber = null;

    /**
     * @var \DateTime $ManufacturedDate
     */
    protected $ManufacturedDate = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

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
     * @return PurchaseLotDetail
     */
    public function setBin($Bin)
    {
      $this->Bin = $Bin;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateReceived()
    {
      if ($this->DateReceived == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateReceived);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateReceived
     * @return PurchaseLotDetail
     */
    public function setDateReceived(\DateTime $DateReceived = null)
    {
      if ($DateReceived == null) {
       $this->DateReceived = null;
      } else {
        $this->DateReceived = $DateReceived->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getDateSequenceNumber()
    {
      return $this->DateSequenceNumber;
    }

    /**
     * @param float $DateSequenceNumber
     * @return PurchaseLotDetail
     */
    public function setDateSequenceNumber($DateSequenceNumber)
    {
      $this->DateSequenceNumber = $DateSequenceNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
      if ($this->ExpirationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpirationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpirationDate
     * @return PurchaseLotDetail
     */
    public function setExpirationDate(\DateTime $ExpirationDate = null)
    {
      if ($ExpirationDate == null) {
       $this->ExpirationDate = null;
      } else {
        $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return PurchaseLotDetailKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PurchaseLotDetailKey $Key
     * @return PurchaseLotDetail
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getLotNumber()
    {
      return $this->LotNumber;
    }

    /**
     * @param string $LotNumber
     * @return PurchaseLotDetail
     */
    public function setLotNumber($LotNumber)
    {
      $this->LotNumber = $LotNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getManufacturedDate()
    {
      if ($this->ManufacturedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ManufacturedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ManufacturedDate
     * @return PurchaseLotDetail
     */
    public function setManufacturedDate(\DateTime $ManufacturedDate = null)
    {
      if ($ManufacturedDate == null) {
       $this->ManufacturedDate = null;
      } else {
        $this->ManufacturedDate = $ManufacturedDate->format(\DateTime::ATOM);
      }
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
     * @return PurchaseLotDetail
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return PurchaseLotDetail
     */
    public function setUnitCost($UnitCost)
    {
      $this->UnitCost = $UnitCost;
      return $this;
    }

}
