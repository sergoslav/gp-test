<?php

class SalesReturnLine extends SalesLine
{

    /**
     * @var ArrayOfSalesLineBin $Bins
     */
    protected $Bins = null;

    /**
     * @var ArrayOfSalesReturnComponent $Components
     */
    protected $Components = null;

    /**
     * @var ArrayOfSalesLineLot $Lots
     */
    protected $Lots = null;

    /**
     * @var SalesReturnQuantities $ReturnQuantity
     */
    protected $ReturnQuantity = null;

    /**
     * @var ArrayOfSalesLineSerial $Serials
     */
    protected $Serials = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return SalesReturnLine
     */
    public function setBins($Bins)
    {
      $this->Bins = $Bins;
      return $this;
    }

    /**
     * @return ArrayOfSalesReturnComponent
     */
    public function getComponents()
    {
      return $this->Components;
    }

    /**
     * @param ArrayOfSalesReturnComponent $Components
     * @return SalesReturnLine
     */
    public function setComponents($Components)
    {
      $this->Components = $Components;
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
     * @return SalesReturnLine
     */
    public function setLots($Lots)
    {
      $this->Lots = $Lots;
      return $this;
    }

    /**
     * @return SalesReturnQuantities
     */
    public function getReturnQuantity()
    {
      return $this->ReturnQuantity;
    }

    /**
     * @param SalesReturnQuantities $ReturnQuantity
     * @return SalesReturnLine
     */
    public function setReturnQuantity($ReturnQuantity)
    {
      $this->ReturnQuantity = $ReturnQuantity;
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
     * @return SalesReturnLine
     */
    public function setSerials($Serials)
    {
      $this->Serials = $Serials;
      return $this;
    }

}
