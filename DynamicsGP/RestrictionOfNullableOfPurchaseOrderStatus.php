<?php

class RestrictionOfNullableOfPurchaseOrderStatus
{

    /**
     * @var PurchaseOrderStatus $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var PurchaseOrderStatus $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PurchaseOrderStatus
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param PurchaseOrderStatus $EqualValue
     * @return RestrictionOfNullableOfPurchaseOrderStatus
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return PurchaseOrderStatus
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param PurchaseOrderStatus $NotEqualValue
     * @return RestrictionOfNullableOfPurchaseOrderStatus
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
