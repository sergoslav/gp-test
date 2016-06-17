<?php

class BetweenRestrictionOfNullableOfGLLedgerType extends ListRestrictionOfNullableOfGLLedgerType
{

    /**
     * @var GLLedgerType $From
     */
    protected $From = null;

    /**
     * @var GLLedgerType $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var GLLedgerType $LessThan
     */
    protected $LessThan = null;

    /**
     * @var GLLedgerType $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GLLedgerType
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param GLLedgerType $From
     * @return BetweenRestrictionOfNullableOfGLLedgerType
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return GLLedgerType
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param GLLedgerType $GreaterThan
     * @return BetweenRestrictionOfNullableOfGLLedgerType
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return GLLedgerType
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param GLLedgerType $LessThan
     * @return BetweenRestrictionOfNullableOfGLLedgerType
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return GLLedgerType
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param GLLedgerType $To
     * @return BetweenRestrictionOfNullableOfGLLedgerType
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
