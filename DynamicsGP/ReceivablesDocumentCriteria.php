<?php

class ReceivablesDocumentCriteria extends ReceivablesDocumentCriteriaBase
{

    /**
     * @var ListRestrictionOfNullableOfReceivablesDocumentType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ListRestrictionOfNullableOfReceivablesDocumentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ListRestrictionOfNullableOfReceivablesDocumentType $Type
     * @return ReceivablesDocumentCriteria
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
