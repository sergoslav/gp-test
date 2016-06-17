<?php

class SalesInvoiceComponent extends SalesComponent
{

    /**
     * @var Quantity $BillingQuantity
     */
    protected $BillingQuantity = null;

    /**
     * @var ArrayOfSalesComponentBin $Bins
     */
    protected $Bins = null;

    /**
     * @var ArrayOfSalesComponentLot $Lots
     */
    protected $Lots = null;

    /**
     * @var Quantity $QuantityAllocated
     */
    protected $QuantityAllocated = null;

    /**
     * @var Quantity $QuantityCanceled
     */
    protected $QuantityCanceled = null;

    /**
     * @var Quantity $QuantityFulfilled
     */
    protected $QuantityFulfilled = null;

    /**
     * @var Quantity $QuantityToBackorder
     */
    protected $QuantityToBackorder = null;

    /**
     * @var ArrayOfSalesComponentSerial $Serials
     */
    protected $Serials = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Quantity
     */
    public function getBillingQuantity()
    {
      return $this->BillingQuantity;
    }

    /**
     * @param Quantity $BillingQuantity
     * @return SalesInvoiceComponent
     */
    public function setBillingQuantity($BillingQuantity)
    {
      $this->BillingQuantity = $BillingQuantity;
      return $this;
    }

    /**
     * @return ArrayOfSalesComponentBin
     */
    public function getBins()
    {
      return $this->Bins;
    }

    /**
     * @param ArrayOfSalesComponentBin $Bins
     * @return SalesInvoiceComponent
     */
    public function setBins($Bins)
    {
      $this->Bins = $Bins;
      return $this;
    }

    /**
     * @return ArrayOfSalesComponentLot
     */
    public function getLots()
    {
      return $this->Lots;
    }

    /**
     * @param ArrayOfSalesComponentLot $Lots
     * @return SalesInvoiceComponent
     */
    public function setLots($Lots)
    {
      $this->Lots = $Lots;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantityAllocated()
    {
      return $this->QuantityAllocated;
    }

    /**
     * @param Quantity $QuantityAllocated
     * @return SalesInvoiceComponent
     */
    public function setQuantityAllocated($QuantityAllocated)
    {
      $this->QuantityAllocated = $QuantityAllocated;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantityCanceled()
    {
      return $this->QuantityCanceled;
    }

    /**
     * @param Quantity $QuantityCanceled
     * @return SalesInvoiceComponent
     */
    public function setQuantityCanceled($QuantityCanceled)
    {
      $this->QuantityCanceled = $QuantityCanceled;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantityFulfilled()
    {
      return $this->QuantityFulfilled;
    }

    /**
     * @param Quantity $QuantityFulfilled
     * @return SalesInvoiceComponent
     */
    public function setQuantityFulfilled($QuantityFulfilled)
    {
      $this->QuantityFulfilled = $QuantityFulfilled;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantityToBackorder()
    {
      return $this->QuantityToBackorder;
    }

    /**
     * @param Quantity $QuantityToBackorder
     * @return SalesInvoiceComponent
     */
    public function setQuantityToBackorder($QuantityToBackorder)
    {
      $this->QuantityToBackorder = $QuantityToBackorder;
      return $this;
    }

    /**
     * @return ArrayOfSalesComponentSerial
     */
    public function getSerials()
    {
      return $this->Serials;
    }

    /**
     * @param ArrayOfSalesComponentSerial $Serials
     * @return SalesInvoiceComponent
     */
    public function setSerials($Serials)
    {
      $this->Serials = $Serials;
      return $this;
    }

}
