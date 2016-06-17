<?php

class BetweenRestrictionOfNullableOfPayablesDocumentType extends ListRestrictionOfNullableOfPayablesDocumentType
{

    /**
     * @var PayablesDocumentType $From
     */
    protected $From = null;

    /**
     * @var PayablesDocumentType $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var PayablesDocumentType $LessThan
     */
    protected $LessThan = null;

    /**
     * @var PayablesDocumentType $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PayablesDocumentType
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param PayablesDocumentType $From
     * @return BetweenRestrictionOfNullableOfPayablesDocumentType
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return PayablesDocumentType
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param PayablesDocumentType $GreaterThan
     * @return BetweenRestrictionOfNullableOfPayablesDocumentType
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return PayablesDocumentType
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param PayablesDocumentType $LessThan
     * @return BetweenRestrictionOfNullableOfPayablesDocumentType
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return PayablesDocumentType
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param PayablesDocumentType $To
     * @return BetweenRestrictionOfNullableOfPayablesDocumentType
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
