<?php

class ItemVendor extends BusinessObject
{

    /**
     * @var float $AverageLeadTime
     */
    protected $AverageLeadTime = null;

    /**
     * @var Quantity $EconomicOrderQuantity
     */
    protected $EconomicOrderQuantity = null;

    /**
     * @var FreeOnBoard $FreeOnBoard
     */
    protected $FreeOnBoard = null;

    /**
     * @var ItemVendorKey $Key
     */
    protected $Key = null;

    /**
     * @var CurrencyKey $LastCurrencyKey
     */
    protected $LastCurrencyKey = null;

    /**
     * @var MoneyAmount $LastOriginatingCost
     */
    protected $LastOriginatingCost = null;

    /**
     * @var Quantity $MaximumOrderQuantity
     */
    protected $MaximumOrderQuantity = null;

    /**
     * @var Quantity $MinimumOrderQuantity
     */
    protected $MinimumOrderQuantity = null;

    /**
     * @var int $NumberOfReceipts
     */
    protected $NumberOfReceipts = null;

    /**
     * @var Quantity $OrderMultipleQuantity
     */
    protected $OrderMultipleQuantity = null;

    /**
     * @var int $PlanningLeadTime
     */
    protected $PlanningLeadTime = null;

    /**
     * @var string $PurchasingUofM
     */
    protected $PurchasingUofM = null;

    /**
     * @var Quantity $RequisitionedQuantity
     */
    protected $RequisitionedQuantity = null;

    /**
     * @var string $VendorItemDescription
     */
    protected $VendorItemDescription = null;

    /**
     * @var string $VendorItemNumber
     */
    protected $VendorItemNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return float
     */
    public function getAverageLeadTime()
    {
      return $this->AverageLeadTime;
    }

    /**
     * @param float $AverageLeadTime
     * @return ItemVendor
     */
    public function setAverageLeadTime($AverageLeadTime)
    {
      $this->AverageLeadTime = $AverageLeadTime;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getEconomicOrderQuantity()
    {
      return $this->EconomicOrderQuantity;
    }

    /**
     * @param Quantity $EconomicOrderQuantity
     * @return ItemVendor
     */
    public function setEconomicOrderQuantity($EconomicOrderQuantity)
    {
      $this->EconomicOrderQuantity = $EconomicOrderQuantity;
      return $this;
    }

    /**
     * @return FreeOnBoard
     */
    public function getFreeOnBoard()
    {
      return $this->FreeOnBoard;
    }

    /**
     * @param FreeOnBoard $FreeOnBoard
     * @return ItemVendor
     */
    public function setFreeOnBoard($FreeOnBoard)
    {
      $this->FreeOnBoard = $FreeOnBoard;
      return $this;
    }

    /**
     * @return ItemVendorKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ItemVendorKey $Key
     * @return ItemVendor
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return CurrencyKey
     */
    public function getLastCurrencyKey()
    {
      return $this->LastCurrencyKey;
    }

    /**
     * @param CurrencyKey $LastCurrencyKey
     * @return ItemVendor
     */
    public function setLastCurrencyKey($LastCurrencyKey)
    {
      $this->LastCurrencyKey = $LastCurrencyKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getLastOriginatingCost()
    {
      return $this->LastOriginatingCost;
    }

    /**
     * @param MoneyAmount $LastOriginatingCost
     * @return ItemVendor
     */
    public function setLastOriginatingCost($LastOriginatingCost)
    {
      $this->LastOriginatingCost = $LastOriginatingCost;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getMaximumOrderQuantity()
    {
      return $this->MaximumOrderQuantity;
    }

    /**
     * @param Quantity $MaximumOrderQuantity
     * @return ItemVendor
     */
    public function setMaximumOrderQuantity($MaximumOrderQuantity)
    {
      $this->MaximumOrderQuantity = $MaximumOrderQuantity;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getMinimumOrderQuantity()
    {
      return $this->MinimumOrderQuantity;
    }

    /**
     * @param Quantity $MinimumOrderQuantity
     * @return ItemVendor
     */
    public function setMinimumOrderQuantity($MinimumOrderQuantity)
    {
      $this->MinimumOrderQuantity = $MinimumOrderQuantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfReceipts()
    {
      return $this->NumberOfReceipts;
    }

    /**
     * @param int $NumberOfReceipts
     * @return ItemVendor
     */
    public function setNumberOfReceipts($NumberOfReceipts)
    {
      $this->NumberOfReceipts = $NumberOfReceipts;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getOrderMultipleQuantity()
    {
      return $this->OrderMultipleQuantity;
    }

    /**
     * @param Quantity $OrderMultipleQuantity
     * @return ItemVendor
     */
    public function setOrderMultipleQuantity($OrderMultipleQuantity)
    {
      $this->OrderMultipleQuantity = $OrderMultipleQuantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getPlanningLeadTime()
    {
      return $this->PlanningLeadTime;
    }

    /**
     * @param int $PlanningLeadTime
     * @return ItemVendor
     */
    public function setPlanningLeadTime($PlanningLeadTime)
    {
      $this->PlanningLeadTime = $PlanningLeadTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchasingUofM()
    {
      return $this->PurchasingUofM;
    }

    /**
     * @param string $PurchasingUofM
     * @return ItemVendor
     */
    public function setPurchasingUofM($PurchasingUofM)
    {
      $this->PurchasingUofM = $PurchasingUofM;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getRequisitionedQuantity()
    {
      return $this->RequisitionedQuantity;
    }

    /**
     * @param Quantity $RequisitionedQuantity
     * @return ItemVendor
     */
    public function setRequisitionedQuantity($RequisitionedQuantity)
    {
      $this->RequisitionedQuantity = $RequisitionedQuantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorItemDescription()
    {
      return $this->VendorItemDescription;
    }

    /**
     * @param string $VendorItemDescription
     * @return ItemVendor
     */
    public function setVendorItemDescription($VendorItemDescription)
    {
      $this->VendorItemDescription = $VendorItemDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorItemNumber()
    {
      return $this->VendorItemNumber;
    }

    /**
     * @param string $VendorItemNumber
     * @return ItemVendor
     */
    public function setVendorItemNumber($VendorItemNumber)
    {
      $this->VendorItemNumber = $VendorItemNumber;
      return $this;
    }

}
