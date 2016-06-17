<?php

class PayablesDocumentCriteria extends PayablesDocumentCriteriaBase
{

    /**
     * @var ListRestrictionOfNullableOfPayablesDocumentType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ListRestrictionOfNullableOfPayablesDocumentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ListRestrictionOfNullableOfPayablesDocumentType $Type
     * @return PayablesDocumentCriteria
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
