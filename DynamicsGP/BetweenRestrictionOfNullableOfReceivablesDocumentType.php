<?php

class BetweenRestrictionOfNullableOfReceivablesDocumentType extends ListRestrictionOfNullableOfReceivablesDocumentType
{

    /**
     * @var ReceivablesDocumentType $From
     */
    protected $From = null;

    /**
     * @var ReceivablesDocumentType $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var ReceivablesDocumentType $LessThan
     */
    protected $LessThan = null;

    /**
     * @var ReceivablesDocumentType $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ReceivablesDocumentType
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param ReceivablesDocumentType $From
     * @return BetweenRestrictionOfNullableOfReceivablesDocumentType
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return ReceivablesDocumentType
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param ReceivablesDocumentType $GreaterThan
     * @return BetweenRestrictionOfNullableOfReceivablesDocumentType
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return ReceivablesDocumentType
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param ReceivablesDocumentType $LessThan
     * @return BetweenRestrictionOfNullableOfReceivablesDocumentType
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return ReceivablesDocumentType
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param ReceivablesDocumentType $To
     * @return BetweenRestrictionOfNullableOfReceivablesDocumentType
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
