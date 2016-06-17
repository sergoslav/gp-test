<?php

class BetweenRestrictionOfNullableOfPayablesTransactionState extends ListRestrictionOfNullableOfPayablesTransactionState
{

    /**
     * @var PayablesTransactionState $From
     */
    protected $From = null;

    /**
     * @var PayablesTransactionState $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var PayablesTransactionState $LessThan
     */
    protected $LessThan = null;

    /**
     * @var PayablesTransactionState $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PayablesTransactionState
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param PayablesTransactionState $From
     * @return BetweenRestrictionOfNullableOfPayablesTransactionState
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return PayablesTransactionState
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param PayablesTransactionState $GreaterThan
     * @return BetweenRestrictionOfNullableOfPayablesTransactionState
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return PayablesTransactionState
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param PayablesTransactionState $LessThan
     * @return BetweenRestrictionOfNullableOfPayablesTransactionState
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return PayablesTransactionState
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param PayablesTransactionState $To
     * @return BetweenRestrictionOfNullableOfPayablesTransactionState
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
