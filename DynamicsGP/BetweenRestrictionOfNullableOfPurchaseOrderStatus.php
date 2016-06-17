<?php

class BetweenRestrictionOfNullableOfPurchaseOrderStatus extends ListRestrictionOfNullableOfPurchaseOrderStatus
{

    /**
     * @var PurchaseOrderStatus $From
     */
    protected $From = null;

    /**
     * @var PurchaseOrderStatus $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var PurchaseOrderStatus $LessThan
     */
    protected $LessThan = null;

    /**
     * @var PurchaseOrderStatus $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PurchaseOrderStatus
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param PurchaseOrderStatus $From
     * @return BetweenRestrictionOfNullableOfPurchaseOrderStatus
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return PurchaseOrderStatus
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param PurchaseOrderStatus $GreaterThan
     * @return BetweenRestrictionOfNullableOfPurchaseOrderStatus
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return PurchaseOrderStatus
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param PurchaseOrderStatus $LessThan
     * @return BetweenRestrictionOfNullableOfPurchaseOrderStatus
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return PurchaseOrderStatus
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param PurchaseOrderStatus $To
     * @return BetweenRestrictionOfNullableOfPurchaseOrderStatus
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
