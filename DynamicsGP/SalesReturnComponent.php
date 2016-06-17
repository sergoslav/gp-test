<?php

class SalesReturnComponent extends SalesComponent
{

    /**
     * @var ArrayOfSalesComponentBin $Bins
     */
    protected $Bins = null;

    /**
     * @var ArrayOfSalesComponentLot $Lots
     */
    protected $Lots = null;

    /**
     * @var SalesReturnQuantities $ReturnQuantity
     */
    protected $ReturnQuantity = null;

    /**
     * @var ArrayOfSalesComponentSerial $Serials
     */
    protected $Serials = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return SalesReturnComponent
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
     * @return SalesReturnComponent
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
     * @return SalesReturnComponent
     */
    public function setReturnQuantity($ReturnQuantity)
    {
      $this->ReturnQuantity = $ReturnQuantity;
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
     * @return SalesReturnComponent
     */
    public function setSerials($Serials)
    {
      $this->Serials = $Serials;
      return $this;
    }

}
