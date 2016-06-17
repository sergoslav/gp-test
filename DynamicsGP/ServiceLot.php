<?php

class ServiceLot extends ServiceSerialLot
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
     * @var \DateTime $ManufactureDate
     */
    protected $ManufactureDate = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    
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
     * @return ServiceLot
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
     * @return ServiceLot
     */
    public function setLotNumber($LotNumber)
    {
      $this->LotNumber = $LotNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getManufactureDate()
    {
      if ($this->ManufactureDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ManufactureDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ManufactureDate
     * @return ServiceLot
     */
    public function setManufactureDate(\DateTime $ManufactureDate = null)
    {
      if ($ManufactureDate == null) {
       $this->ManufactureDate = null;
      } else {
        $this->ManufactureDate = $ManufactureDate->format(\DateTime::ATOM);
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
     * @return ServiceLot
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

}
