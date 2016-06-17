<?php

class BetweenRestrictionOfNullableOfSalesCommissionTransactionState extends ListRestrictionOfNullableOfSalesCommissionTransactionState
{

    /**
     * @var SalesCommissionTransactionState $From
     */
    protected $From = null;

    /**
     * @var SalesCommissionTransactionState $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var SalesCommissionTransactionState $LessThan
     */
    protected $LessThan = null;

    /**
     * @var SalesCommissionTransactionState $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalesCommissionTransactionState
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param SalesCommissionTransactionState $From
     * @return BetweenRestrictionOfNullableOfSalesCommissionTransactionState
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return SalesCommissionTransactionState
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param SalesCommissionTransactionState $GreaterThan
     * @return BetweenRestrictionOfNullableOfSalesCommissionTransactionState
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return SalesCommissionTransactionState
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param SalesCommissionTransactionState $LessThan
     * @return BetweenRestrictionOfNullableOfSalesCommissionTransactionState
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return SalesCommissionTransactionState
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param SalesCommissionTransactionState $To
     * @return BetweenRestrictionOfNullableOfSalesCommissionTransactionState
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
