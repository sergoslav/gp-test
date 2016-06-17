<?php

class BetweenRestrictionOfNullableOfGLTransactionState extends ListRestrictionOfNullableOfGLTransactionState
{

    /**
     * @var GLTransactionState $From
     */
    protected $From = null;

    /**
     * @var GLTransactionState $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var GLTransactionState $LessThan
     */
    protected $LessThan = null;

    /**
     * @var GLTransactionState $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GLTransactionState
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param GLTransactionState $From
     * @return BetweenRestrictionOfNullableOfGLTransactionState
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return GLTransactionState
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param GLTransactionState $GreaterThan
     * @return BetweenRestrictionOfNullableOfGLTransactionState
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return GLTransactionState
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param GLTransactionState $LessThan
     * @return BetweenRestrictionOfNullableOfGLTransactionState
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return GLTransactionState
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param GLTransactionState $To
     * @return BetweenRestrictionOfNullableOfGLTransactionState
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
