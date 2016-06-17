<?php

class BetweenRestrictionOfNullableOfServiceTransactionState extends ListRestrictionOfNullableOfServiceTransactionState
{

    /**
     * @var ServiceTransactionState $From
     */
    protected $From = null;

    /**
     * @var ServiceTransactionState $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var ServiceTransactionState $LessThan
     */
    protected $LessThan = null;

    /**
     * @var ServiceTransactionState $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ServiceTransactionState
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param ServiceTransactionState $From
     * @return BetweenRestrictionOfNullableOfServiceTransactionState
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return ServiceTransactionState
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param ServiceTransactionState $GreaterThan
     * @return BetweenRestrictionOfNullableOfServiceTransactionState
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return ServiceTransactionState
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param ServiceTransactionState $LessThan
     * @return BetweenRestrictionOfNullableOfServiceTransactionState
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return ServiceTransactionState
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param ServiceTransactionState $To
     * @return BetweenRestrictionOfNullableOfServiceTransactionState
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
