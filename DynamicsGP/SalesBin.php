<?php

class SalesBin extends BusinessObject
{

    /**
     * @var string $Bin
     */
    protected $Bin = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var QuantityType $QuantityType
     */
    protected $QuantityType = null;

    
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
     * @return SalesBin
     */
    public function setBin($Bin)
    {
      $this->Bin = $Bin;
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
     * @return SalesBin
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return QuantityType
     */
    public function getQuantityType()
    {
      return $this->QuantityType;
    }

    /**
     * @param QuantityType $QuantityType
     * @return SalesBin
     */
    public function setQuantityType($QuantityType)
    {
      $this->QuantityType = $QuantityType;
      return $this;
    }

}
