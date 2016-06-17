<?php

class SalesBackorderComponent extends SalesComponent
{

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
     * @return Quantity
     */
    public function getQuantityCanceled()
    {
      return $this->QuantityCanceled;
    }

    /**
     * @param Quantity $QuantityCanceled
     * @return SalesBackorderComponent
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
     * @return SalesBackorderComponent
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
     * @return SalesBackorderComponent
     */
    public function setQuantityToOrder($QuantityToOrder)
    {
      $this->QuantityToOrder = $QuantityToOrder;
      return $this;
    }

}
