<?php

class BetweenRestrictionOfNullableOfReceivablesTransactionState extends ListRestrictionOfNullableOfReceivablesTransactionState
{

    /**
     * @var ReceivablesTransactionState $From
     */
    protected $From = null;

    /**
     * @var ReceivablesTransactionState $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var ReceivablesTransactionState $LessThan
     */
    protected $LessThan = null;

    /**
     * @var ReceivablesTransactionState $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ReceivablesTransactionState
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param ReceivablesTransactionState $From
     * @return BetweenRestrictionOfNullableOfReceivablesTransactionState
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return ReceivablesTransactionState
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param ReceivablesTransactionState $GreaterThan
     * @return BetweenRestrictionOfNullableOfReceivablesTransactionState
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return ReceivablesTransactionState
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param ReceivablesTransactionState $LessThan
     * @return BetweenRestrictionOfNullableOfReceivablesTransactionState
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return ReceivablesTransactionState
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param ReceivablesTransactionState $To
     * @return BetweenRestrictionOfNullableOfReceivablesTransactionState
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
