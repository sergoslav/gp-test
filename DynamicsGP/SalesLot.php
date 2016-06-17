<?php

class SalesLot extends SalesSerialLot
{

    /**
     * @var \DateTime $ExpirationDate
     */
    protected $ExpirationDate = null;

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
     * @var \DateTime $UserDate
     */
    protected $UserDate = null;

    
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
     * @return SalesLot
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
     * @return string
     */
    public function getLotNumber()
    {
      return $this->LotNumber;
    }

    /**
     * @param string $LotNumber
     * @return SalesLot
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
     * @return SalesLot
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
     * @return SalesLot
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUserDate()
    {
      if ($this->UserDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UserDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UserDate
     * @return SalesLot
     */
    public function setUserDate(\DateTime $UserDate = null)
    {
      if ($UserDate == null) {
       $this->UserDate = null;
      } else {
        $this->UserDate = $UserDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
