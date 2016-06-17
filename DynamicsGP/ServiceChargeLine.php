<?php

class ServiceChargeLine extends ServiceLine
{

    /**
     * @var Percent $BillableMiscellaneousPercent
     */
    protected $BillableMiscellaneousPercent = null;

    /**
     * @var ServiceLinePurchaseOrderCreation $PurchaseOrder
     */
    protected $PurchaseOrder = null;

    /**
     * @var PurchaseTransactionLineKey $PurchaseOrderLineKey
     */
    protected $PurchaseOrderLineKey = null;

    /**
     * @var Quantity $QuantitySold
     */
    protected $QuantitySold = null;

    /**
     * @var MoneyAmount $TotalCost
     */
    protected $TotalCost = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Percent
     */
    public function getBillableMiscellaneousPercent()
    {
      return $this->BillableMiscellaneousPercent;
    }

    /**
     * @param Percent $BillableMiscellaneousPercent
     * @return ServiceChargeLine
     */
    public function setBillableMiscellaneousPercent($BillableMiscellaneousPercent)
    {
      $this->BillableMiscellaneousPercent = $BillableMiscellaneousPercent;
      return $this;
    }

    /**
     * @return ServiceLinePurchaseOrderCreation
     */
    public function getPurchaseOrder()
    {
      return $this->PurchaseOrder;
    }

    /**
     * @param ServiceLinePurchaseOrderCreation $PurchaseOrder
     * @return ServiceChargeLine
     */
    public function setPurchaseOrder($PurchaseOrder)
    {
      $this->PurchaseOrder = $PurchaseOrder;
      return $this;
    }

    /**
     * @return PurchaseTransactionLineKey
     */
    public function getPurchaseOrderLineKey()
    {
      return $this->PurchaseOrderLineKey;
    }

    /**
     * @param PurchaseTransactionLineKey $PurchaseOrderLineKey
     * @return ServiceChargeLine
     */
    public function setPurchaseOrderLineKey($PurchaseOrderLineKey)
    {
      $this->PurchaseOrderLineKey = $PurchaseOrderLineKey;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantitySold()
    {
      return $this->QuantitySold;
    }

    /**
     * @param Quantity $QuantitySold
     * @return ServiceChargeLine
     */
    public function setQuantitySold($QuantitySold)
    {
      $this->QuantitySold = $QuantitySold;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalCost()
    {
      return $this->TotalCost;
    }

    /**
     * @param MoneyAmount $TotalCost
     * @return ServiceChargeLine
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
      return $this;
    }

}
