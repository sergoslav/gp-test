<?php

class InventoryLotBase extends BusinessObject
{

    /**
     * @var \DateTime $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var InventoryLotKey $Key
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
     * @var \DateTime $ReceivedDate
     */
    protected $ReceivedDate = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return InventoryLotBase
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
     * @return InventoryLotKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param InventoryLotKey $Key
     * @return InventoryLotBase
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
     * @return InventoryLotBase
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
     * @return InventoryLotBase
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
     * @return InventoryLotBase
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReceivedDate()
    {
      if ($this->ReceivedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReceivedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReceivedDate
     * @return InventoryLotBase
     */
    public function setReceivedDate(\DateTime $ReceivedDate = null)
    {
      if ($ReceivedDate == null) {
       $this->ReceivedDate = null;
      } else {
        $this->ReceivedDate = $ReceivedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
