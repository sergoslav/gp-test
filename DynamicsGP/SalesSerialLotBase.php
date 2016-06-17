<?php

class SalesSerialLotBase extends BusinessObject
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
     * @var boolean $IsPosted
     */
    protected $IsPosted = null;

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
     * @return SalesSerialLotBase
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
     * @return SalesSerialLotBase
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
     * @return SalesSerialLotBase
     */
    public function setDateSequenceNumber($DateSequenceNumber)
    {
      $this->DateSequenceNumber = $DateSequenceNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPosted()
    {
      return $this->IsPosted;
    }

    /**
     * @param boolean $IsPosted
     * @return SalesSerialLotBase
     */
    public function setIsPosted($IsPosted)
    {
      $this->IsPosted = $IsPosted;
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
     * @return SalesSerialLotBase
     */
    public function setUnitCost($UnitCost)
    {
      $this->UnitCost = $UnitCost;
      return $this;
    }

}
