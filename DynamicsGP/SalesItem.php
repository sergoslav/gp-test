<?php

class SalesItem extends InventoriedItem
{

    /**
     * @var LotCategoryKey $LotCategoryKey
     */
    protected $LotCategoryKey = null;

    /**
     * @var int $MinimumShelfLifeDays1
     */
    protected $MinimumShelfLifeDays1 = null;

    /**
     * @var int $MinimumShelfLifeDays2
     */
    protected $MinimumShelfLifeDays2 = null;

    /**
     * @var ArrayOfSalesItemWarehouse $Quantities
     */
    protected $Quantities = null;

    /**
     * @var boolean $RevalueInventory
     */
    protected $RevalueInventory = null;

    /**
     * @var Percent $TolerancePercentage
     */
    protected $TolerancePercentage = null;

    /**
     * @var TrackingOption $TrackingOption
     */
    protected $TrackingOption = null;

    /**
     * @var ValuationMethod $ValuationMethod
     */
    protected $ValuationMethod = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LotCategoryKey
     */
    public function getLotCategoryKey()
    {
      return $this->LotCategoryKey;
    }

    /**
     * @param LotCategoryKey $LotCategoryKey
     * @return SalesItem
     */
    public function setLotCategoryKey($LotCategoryKey)
    {
      $this->LotCategoryKey = $LotCategoryKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumShelfLifeDays1()
    {
      return $this->MinimumShelfLifeDays1;
    }

    /**
     * @param int $MinimumShelfLifeDays1
     * @return SalesItem
     */
    public function setMinimumShelfLifeDays1($MinimumShelfLifeDays1)
    {
      $this->MinimumShelfLifeDays1 = $MinimumShelfLifeDays1;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumShelfLifeDays2()
    {
      return $this->MinimumShelfLifeDays2;
    }

    /**
     * @param int $MinimumShelfLifeDays2
     * @return SalesItem
     */
    public function setMinimumShelfLifeDays2($MinimumShelfLifeDays2)
    {
      $this->MinimumShelfLifeDays2 = $MinimumShelfLifeDays2;
      return $this;
    }

    /**
     * @return ArrayOfSalesItemWarehouse
     */
    public function getQuantities()
    {
      return $this->Quantities;
    }

    /**
     * @param ArrayOfSalesItemWarehouse $Quantities
     * @return SalesItem
     */
    public function setQuantities($Quantities)
    {
      $this->Quantities = $Quantities;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRevalueInventory()
    {
      return $this->RevalueInventory;
    }

    /**
     * @param boolean $RevalueInventory
     * @return SalesItem
     */
    public function setRevalueInventory($RevalueInventory)
    {
      $this->RevalueInventory = $RevalueInventory;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getTolerancePercentage()
    {
      return $this->TolerancePercentage;
    }

    /**
     * @param Percent $TolerancePercentage
     * @return SalesItem
     */
    public function setTolerancePercentage($TolerancePercentage)
    {
      $this->TolerancePercentage = $TolerancePercentage;
      return $this;
    }

    /**
     * @return TrackingOption
     */
    public function getTrackingOption()
    {
      return $this->TrackingOption;
    }

    /**
     * @param TrackingOption $TrackingOption
     * @return SalesItem
     */
    public function setTrackingOption($TrackingOption)
    {
      $this->TrackingOption = $TrackingOption;
      return $this;
    }

    /**
     * @return ValuationMethod
     */
    public function getValuationMethod()
    {
      return $this->ValuationMethod;
    }

    /**
     * @param ValuationMethod $ValuationMethod
     * @return SalesItem
     */
    public function setValuationMethod($ValuationMethod)
    {
      $this->ValuationMethod = $ValuationMethod;
      return $this;
    }

}
