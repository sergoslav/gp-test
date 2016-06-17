<?php

class Planning
{

    /**
     * @var Quantity $FixedOrderQuantity
     */
    protected $FixedOrderQuantity = null;

    /**
     * @var float $ManufacturingLeadTime
     */
    protected $ManufacturingLeadTime = null;

    /**
     * @var Quantity $MaximumOrderQuantity
     */
    protected $MaximumOrderQuantity = null;

    /**
     * @var Quantity $MinimumOrderQuantity
     */
    protected $MinimumOrderQuantity = null;

    /**
     * @var Quantity $OrderMultipleQuantity
     */
    protected $OrderMultipleQuantity = null;

    /**
     * @var Quantity $OrderPointQuantity
     */
    protected $OrderPointQuantity = null;

    /**
     * @var OrderPolicy $OrderPolicy
     */
    protected $OrderPolicy = null;

    /**
     * @var Quantity $OrderUpToLevelQuantity
     */
    protected $OrderUpToLevelQuantity = null;

    /**
     * @var float $PurchasingLeadTime
     */
    protected $PurchasingLeadTime = null;

    /**
     * @var Quantity $ReorderVarianceQuantity
     */
    protected $ReorderVarianceQuantity = null;

    /**
     * @var ReplenishmentMethod $ReplenishmentMethod
     */
    protected $ReplenishmentMethod = null;

    /**
     * @var Quantity $SafetyStockQuantity
     */
    protected $SafetyStockQuantity = null;

    /**
     * @var Percent $ShrinkageFactor
     */
    protected $ShrinkageFactor = null;

    /**
     * @var int $TimeFence
     */
    protected $TimeFence = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Quantity
     */
    public function getFixedOrderQuantity()
    {
      return $this->FixedOrderQuantity;
    }

    /**
     * @param Quantity $FixedOrderQuantity
     * @return Planning
     */
    public function setFixedOrderQuantity($FixedOrderQuantity)
    {
      $this->FixedOrderQuantity = $FixedOrderQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getManufacturingLeadTime()
    {
      return $this->ManufacturingLeadTime;
    }

    /**
     * @param float $ManufacturingLeadTime
     * @return Planning
     */
    public function setManufacturingLeadTime($ManufacturingLeadTime)
    {
      $this->ManufacturingLeadTime = $ManufacturingLeadTime;
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
     * @return Planning
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
     * @return Planning
     */
    public function setMinimumOrderQuantity($MinimumOrderQuantity)
    {
      $this->MinimumOrderQuantity = $MinimumOrderQuantity;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getOrderMultipleQuantity()
    {
      return $this->OrderMultipleQuantity;
    }

    /**
     * @param Quantity $OrderMultipleQuantity
     * @return Planning
     */
    public function setOrderMultipleQuantity($OrderMultipleQuantity)
    {
      $this->OrderMultipleQuantity = $OrderMultipleQuantity;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getOrderPointQuantity()
    {
      return $this->OrderPointQuantity;
    }

    /**
     * @param Quantity $OrderPointQuantity
     * @return Planning
     */
    public function setOrderPointQuantity($OrderPointQuantity)
    {
      $this->OrderPointQuantity = $OrderPointQuantity;
      return $this;
    }

    /**
     * @return OrderPolicy
     */
    public function getOrderPolicy()
    {
      return $this->OrderPolicy;
    }

    /**
     * @param OrderPolicy $OrderPolicy
     * @return Planning
     */
    public function setOrderPolicy($OrderPolicy)
    {
      $this->OrderPolicy = $OrderPolicy;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getOrderUpToLevelQuantity()
    {
      return $this->OrderUpToLevelQuantity;
    }

    /**
     * @param Quantity $OrderUpToLevelQuantity
     * @return Planning
     */
    public function setOrderUpToLevelQuantity($OrderUpToLevelQuantity)
    {
      $this->OrderUpToLevelQuantity = $OrderUpToLevelQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchasingLeadTime()
    {
      return $this->PurchasingLeadTime;
    }

    /**
     * @param float $PurchasingLeadTime
     * @return Planning
     */
    public function setPurchasingLeadTime($PurchasingLeadTime)
    {
      $this->PurchasingLeadTime = $PurchasingLeadTime;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getReorderVarianceQuantity()
    {
      return $this->ReorderVarianceQuantity;
    }

    /**
     * @param Quantity $ReorderVarianceQuantity
     * @return Planning
     */
    public function setReorderVarianceQuantity($ReorderVarianceQuantity)
    {
      $this->ReorderVarianceQuantity = $ReorderVarianceQuantity;
      return $this;
    }

    /**
     * @return ReplenishmentMethod
     */
    public function getReplenishmentMethod()
    {
      return $this->ReplenishmentMethod;
    }

    /**
     * @param ReplenishmentMethod $ReplenishmentMethod
     * @return Planning
     */
    public function setReplenishmentMethod($ReplenishmentMethod)
    {
      $this->ReplenishmentMethod = $ReplenishmentMethod;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getSafetyStockQuantity()
    {
      return $this->SafetyStockQuantity;
    }

    /**
     * @param Quantity $SafetyStockQuantity
     * @return Planning
     */
    public function setSafetyStockQuantity($SafetyStockQuantity)
    {
      $this->SafetyStockQuantity = $SafetyStockQuantity;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getShrinkageFactor()
    {
      return $this->ShrinkageFactor;
    }

    /**
     * @param Percent $ShrinkageFactor
     * @return Planning
     */
    public function setShrinkageFactor($ShrinkageFactor)
    {
      $this->ShrinkageFactor = $ShrinkageFactor;
      return $this;
    }

    /**
     * @return int
     */
    public function getTimeFence()
    {
      return $this->TimeFence;
    }

    /**
     * @param int $TimeFence
     * @return Planning
     */
    public function setTimeFence($TimeFence)
    {
      $this->TimeFence = $TimeFence;
      return $this;
    }

}
