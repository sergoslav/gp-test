<?php

class ServiceLine extends BusinessObject
{

    /**
     * @var \DateTime $EntryDateTime
     */
    protected $EntryDateTime = null;

    /**
     * @var int $EquipmentLineSequenceNumber
     */
    protected $EquipmentLineSequenceNumber = null;

    /**
     * @var string $FrontOfficeIntegrationId
     */
    protected $FrontOfficeIntegrationId = null;

    /**
     * @var string $ItemDescription
     */
    protected $ItemDescription = null;

    /**
     * @var ItemKey $ItemKey
     */
    protected $ItemKey = null;

    /**
     * @var ServiceLineKey $Key
     */
    protected $Key = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var PriceLevelKey $PriceLevelKey
     */
    protected $PriceLevelKey = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var ServiceTechnicianKey $TechnicianKey
     */
    protected $TechnicianKey = null;

    /**
     * @var MoneyAmount $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var MoneyAmount $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var MoneyAmount $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @var string $UofM
     */
    protected $UofM = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getEntryDateTime()
    {
      if ($this->EntryDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EntryDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EntryDateTime
     * @return ServiceLine
     */
    public function setEntryDateTime(\DateTime $EntryDateTime = null)
    {
      if ($EntryDateTime == null) {
       $this->EntryDateTime = null;
      } else {
        $this->EntryDateTime = $EntryDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getEquipmentLineSequenceNumber()
    {
      return $this->EquipmentLineSequenceNumber;
    }

    /**
     * @param int $EquipmentLineSequenceNumber
     * @return ServiceLine
     */
    public function setEquipmentLineSequenceNumber($EquipmentLineSequenceNumber)
    {
      $this->EquipmentLineSequenceNumber = $EquipmentLineSequenceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrontOfficeIntegrationId()
    {
      return $this->FrontOfficeIntegrationId;
    }

    /**
     * @param string $FrontOfficeIntegrationId
     * @return ServiceLine
     */
    public function setFrontOfficeIntegrationId($FrontOfficeIntegrationId)
    {
      $this->FrontOfficeIntegrationId = $FrontOfficeIntegrationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemDescription()
    {
      return $this->ItemDescription;
    }

    /**
     * @param string $ItemDescription
     * @return ServiceLine
     */
    public function setItemDescription($ItemDescription)
    {
      $this->ItemDescription = $ItemDescription;
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
     * @return ServiceLine
     */
    public function setItemKey($ItemKey)
    {
      $this->ItemKey = $ItemKey;
      return $this;
    }

    /**
     * @return ServiceLineKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ServiceLineKey $Key
     * @return ServiceLine
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
      return $this->Note;
    }

    /**
     * @param string $Note
     * @return ServiceLine
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
      return $this;
    }

    /**
     * @return PriceLevelKey
     */
    public function getPriceLevelKey()
    {
      return $this->PriceLevelKey;
    }

    /**
     * @param PriceLevelKey $PriceLevelKey
     * @return ServiceLine
     */
    public function setPriceLevelKey($PriceLevelKey)
    {
      $this->PriceLevelKey = $PriceLevelKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTaxAmount()
    {
      return $this->TaxAmount;
    }

    /**
     * @param MoneyAmount $TaxAmount
     * @return ServiceLine
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return ServiceTechnicianKey
     */
    public function getTechnicianKey()
    {
      return $this->TechnicianKey;
    }

    /**
     * @param ServiceTechnicianKey $TechnicianKey
     * @return ServiceLine
     */
    public function setTechnicianKey($TechnicianKey)
    {
      $this->TechnicianKey = $TechnicianKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalAmount()
    {
      return $this->TotalAmount;
    }

    /**
     * @param MoneyAmount $TotalAmount
     * @return ServiceLine
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
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
     * @return ServiceLine
     */
    public function setUnitCost($UnitCost)
    {
      $this->UnitCost = $UnitCost;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getUnitPrice()
    {
      return $this->UnitPrice;
    }

    /**
     * @param MoneyAmount $UnitPrice
     * @return ServiceLine
     */
    public function setUnitPrice($UnitPrice)
    {
      $this->UnitPrice = $UnitPrice;
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
     * @return ServiceLine
     */
    public function setUofM($UofM)
    {
      $this->UofM = $UofM;
      return $this;
    }

}
