<?php

class SalesBackorderLine extends SalesLine
{

    /**
     * @var ArrayOfSalesBackorderComponent $Components
     */
    protected $Components = null;

    /**
     * @var Quantity $QuantityCanceled
     */
    protected $QuantityCanceled = null;

    /**
     * @var Quantity $QuantityToInvoice
     */
    protected $QuantityToInvoice = null;

    /**
     * @var Quantity $QuantityToOrder
     */
    protected $QuantityToOrder = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfSalesBackorderComponent
     */
    public function getComponents()
    {
      return $this->Components;
    }

    /**
     * @param ArrayOfSalesBackorderComponent $Components
     * @return SalesBackorderLine
     */
    public function setComponents($Components)
    {
      $this->Components = $Components;
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
     * @return SalesBackorderLine
     */
    public function setQuantityCanceled($QuantityCanceled)
    {
      $this->QuantityCanceled = $QuantityCanceled;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantityToInvoice()
    {
      return $this->QuantityToInvoice;
    }

    /**
     * @param Quantity $QuantityToInvoice
     * @return SalesBackorderLine
     */
    public function setQuantityToInvoice($QuantityToInvoice)
    {
      $this->QuantityToInvoice = $QuantityToInvoice;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantityToOrder()
    {
      return $this->QuantityToOrder;
    }

    /**
     * @param Quantity $QuantityToOrder
     * @return SalesBackorderLine
     */
    public function setQuantityToOrder($QuantityToOrder)
    {
      $this->QuantityToOrder = $QuantityToOrder;
      return $this;
    }

}
