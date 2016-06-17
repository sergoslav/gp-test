<?php

class BetweenRestrictionOfNullableOfSalesTransactionState extends ListRestrictionOfNullableOfSalesTransactionState
{

    /**
     * @var SalesTransactionState $From
     */
    protected $From = null;

    /**
     * @var SalesTransactionState $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var SalesTransactionState $LessThan
     */
    protected $LessThan = null;

    /**
     * @var SalesTransactionState $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalesTransactionState
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param SalesTransactionState $From
     * @return BetweenRestrictionOfNullableOfSalesTransactionState
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return SalesTransactionState
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param SalesTransactionState $GreaterThan
     * @return BetweenRestrictionOfNullableOfSalesTransactionState
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return SalesTransactionState
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param SalesTransactionState $LessThan
     * @return BetweenRestrictionOfNullableOfSalesTransactionState
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return SalesTransactionState
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param SalesTransactionState $To
     * @return BetweenRestrictionOfNullableOfSalesTransactionState
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
