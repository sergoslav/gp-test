<?php

class PurchaseInvoiceApplyReceipt extends BusinessObject
{

    /**
     * @var MoneyAmount $Cost
     */
    protected $Cost = null;

    /**
     * @var boolean $DoesRevalueInventory
     */
    protected $DoesRevalueInventory = null;

    /**
     * @var PurchaseInvoiceApplyReceiptKey $Key
     */
    protected $Key = null;

    /**
     * @var Quantity $QuantityInvoiced
     */
    protected $QuantityInvoiced = null;

    /**
     * @var MoneyAmount $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var GLAccountNumberKey $VarianceGLAccountKey
     */
    protected $VarianceGLAccountKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getCost()
    {
      return $this->Cost;
    }

    /**
     * @param MoneyAmount $Cost
     * @return PurchaseInvoiceApplyReceipt
     */
    public function setCost($Cost)
    {
      $this->Cost = $Cost;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoesRevalueInventory()
    {
      return $this->DoesRevalueInventory;
    }

    /**
     * @param boolean $DoesRevalueInventory
     * @return PurchaseInvoiceApplyReceipt
     */
    public function setDoesRevalueInventory($DoesRevalueInventory)
    {
      $this->DoesRevalueInventory = $DoesRevalueInventory;
      return $this;
    }

    /**
     * @return PurchaseInvoiceApplyReceiptKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PurchaseInvoiceApplyReceiptKey $Key
     * @return PurchaseInvoiceApplyReceipt
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantityInvoiced()
    {
      return $this->QuantityInvoiced;
    }

    /**
     * @param Quantity $QuantityInvoiced
     * @return PurchaseInvoiceApplyReceipt
     */
    public function setQuantityInvoiced($QuantityInvoiced)
    {
      $this->QuantityInvoiced = $QuantityInvoiced;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getUnitCost()
    {
      return $this->UnitCost;
    }

    /**
     * @param MoneyAmount $UnitCost
     * @return PurchaseInvoiceApplyReceipt
     */
    public function setUnitCost($UnitCost)
    {
      $this->UnitCost = $UnitCost;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getVarianceGLAccountKey()
    {
      return $this->VarianceGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $VarianceGLAccountKey
     * @return PurchaseInvoiceApplyReceipt
     */
    public function setVarianceGLAccountKey($VarianceGLAccountKey)
    {
      $this->VarianceGLAccountKey = $VarianceGLAccountKey;
      return $this;
    }

}
