<?php

class ItemVendorSummary
{

    /**
     * @var float $AverageLeadTime
     */
    protected $AverageLeadTime = null;

    /**
     * @var ItemVendorKey $Key
     */
    protected $Key = null;

    /**
     * @var Quantity $MaximumOrderQuantity
     */
    protected $MaximumOrderQuantity = null;

    /**
     * @var Quantity $MinimumOrderQuantity
     */
    protected $MinimumOrderQuantity = null;

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
     * @return ItemVendorSummary
     */
    public function setAverageLeadTime($AverageLeadTime)
    {
      $this->AverageLeadTime = $AverageLeadTime;
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
     * @return ItemVendorSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return ItemVendorSummary
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
     * @return ItemVendorSummary
     */
    public function setMinimumOrderQuantity($MinimumOrderQuantity)
    {
      $this->MinimumOrderQuantity = $MinimumOrderQuantity;
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
     * @return ItemVendorSummary
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
     * @return ItemVendorSummary
     */
    public function setVendorItemNumber($VendorItemNumber)
    {
      $this->VendorItemNumber = $VendorItemNumber;
      return $this;
    }

}
