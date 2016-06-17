<?php

class SalesInvoiceLine extends SalesLine
{

    /**
     * @var \DateTime $ActualShipDate
     */
    protected $ActualShipDate = null;

    /**
     * @var Quantity $BillingQuantity
     */
    protected $BillingQuantity = null;

    /**
     * @var ArrayOfSalesLineBin $Bins
     */
    protected $Bins = null;

    /**
     * @var ArrayOfSalesInvoiceComponent $Components
     */
    protected $Components = null;

    /**
     * @var \DateTime $FulfillDate
     */
    protected $FulfillDate = null;

    /**
     * @var ArrayOfSalesLineLot $Lots
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
     * @var ArrayOfSalesLineSerial $Serials
     */
    protected $Serials = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getActualShipDate()
    {
      if ($this->ActualShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ActualShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ActualShipDate
     * @return SalesInvoiceLine
     */
    public function setActualShipDate(\DateTime $ActualShipDate = null)
    {
      if ($ActualShipDate == null) {
       $this->ActualShipDate = null;
      } else {
        $this->ActualShipDate = $ActualShipDate->format(\DateTime::ATOM);
      }
      return $this;
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
     * @return SalesInvoiceLine
     */
    public function setBillingQuantity($BillingQuantity)
    {
      $this->BillingQuantity = $BillingQuantity;
      return $this;
    }

    /**
     * @return ArrayOfSalesLineBin
     */
    public function getBins()
    {
      return $this->Bins;
    }

    /**
     * @param ArrayOfSalesLineBin $Bins
     * @return SalesInvoiceLine
     */
    public function setBins($Bins)
    {
      $this->Bins = $Bins;
      return $this;
    }

    /**
     * @return ArrayOfSalesInvoiceComponent
     */
    public function getComponents()
    {
      return $this->Components;
    }

    /**
     * @param ArrayOfSalesInvoiceComponent $Components
     * @return SalesInvoiceLine
     */
    public function setComponents($Components)
    {
      $this->Components = $Components;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFulfillDate()
    {
      if ($this->FulfillDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FulfillDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FulfillDate
     * @return SalesInvoiceLine
     */
    public function setFulfillDate(\DateTime $FulfillDate = null)
    {
      if ($FulfillDate == null) {
       $this->FulfillDate = null;
      } else {
        $this->FulfillDate = $FulfillDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfSalesLineLot
     */
    public function getLots()
    {
      return $this->Lots;
    }

    /**
     * @param ArrayOfSalesLineLot $Lots
     * @return SalesInvoiceLine
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
     * @return SalesInvoiceLine
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
     * @return SalesInvoiceLine
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
     * @return SalesInvoiceLine
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
     * @return SalesInvoiceLine
     */
    public function setQuantityToBackorder($QuantityToBackorder)
    {
      $this->QuantityToBackorder = $QuantityToBackorder;
      return $this;
    }

    /**
     * @return ArrayOfSalesLineSerial
     */
    public function getSerials()
    {
      return $this->Serials;
    }

    /**
     * @param ArrayOfSalesLineSerial $Serials
     * @return SalesInvoiceLine
     */
    public function setSerials($Serials)
    {
      $this->Serials = $Serials;
      return $this;
    }

}
