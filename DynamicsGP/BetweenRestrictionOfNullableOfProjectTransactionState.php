<?php

class BetweenRestrictionOfNullableOfProjectTransactionState extends ListRestrictionOfNullableOfProjectTransactionState
{

    /**
     * @var ProjectTransactionState $From
     */
    protected $From = null;

    /**
     * @var ProjectTransactionState $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var ProjectTransactionState $LessThan
     */
    protected $LessThan = null;

    /**
     * @var ProjectTransactionState $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ProjectTransactionState
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param ProjectTransactionState $From
     * @return BetweenRestrictionOfNullableOfProjectTransactionState
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return ProjectTransactionState
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param ProjectTransactionState $GreaterThan
     * @return BetweenRestrictionOfNullableOfProjectTransactionState
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return ProjectTransactionState
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param ProjectTransactionState $LessThan
     * @return BetweenRestrictionOfNullableOfProjectTransactionState
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return ProjectTransactionState
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param ProjectTransactionState $To
     * @return BetweenRestrictionOfNullableOfProjectTransactionState
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
