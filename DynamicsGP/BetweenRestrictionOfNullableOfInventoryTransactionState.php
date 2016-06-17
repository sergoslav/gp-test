<?php

class BetweenRestrictionOfNullableOfInventoryTransactionState extends ListRestrictionOfNullableOfInventoryTransactionState
{

    /**
     * @var InventoryTransactionState $From
     */
    protected $From = null;

    /**
     * @var InventoryTransactionState $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var InventoryTransactionState $LessThan
     */
    protected $LessThan = null;

    /**
     * @var InventoryTransactionState $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return InventoryTransactionState
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param InventoryTransactionState $From
     * @return BetweenRestrictionOfNullableOfInventoryTransactionState
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return InventoryTransactionState
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param InventoryTransactionState $GreaterThan
     * @return BetweenRestrictionOfNullableOfInventoryTransactionState
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return InventoryTransactionState
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param InventoryTransactionState $LessThan
     * @return BetweenRestrictionOfNullableOfInventoryTransactionState
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return InventoryTransactionState
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param InventoryTransactionState $To
     * @return BetweenRestrictionOfNullableOfInventoryTransactionState
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
