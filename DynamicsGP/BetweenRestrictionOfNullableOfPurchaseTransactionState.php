<?php

class BetweenRestrictionOfNullableOfPurchaseTransactionState extends ListRestrictionOfNullableOfPurchaseTransactionState
{

    /**
     * @var PurchaseTransactionState $From
     */
    protected $From = null;

    /**
     * @var PurchaseTransactionState $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var PurchaseTransactionState $LessThan
     */
    protected $LessThan = null;

    /**
     * @var PurchaseTransactionState $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PurchaseTransactionState
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param PurchaseTransactionState $From
     * @return BetweenRestrictionOfNullableOfPurchaseTransactionState
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return PurchaseTransactionState
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param PurchaseTransactionState $GreaterThan
     * @return BetweenRestrictionOfNullableOfPurchaseTransactionState
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return PurchaseTransactionState
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param PurchaseTransactionState $LessThan
     * @return BetweenRestrictionOfNullableOfPurchaseTransactionState
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return PurchaseTransactionState
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param PurchaseTransactionState $To
     * @return BetweenRestrictionOfNullableOfPurchaseTransactionState
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
