<?php

class SalesDocumentCriteria extends SalesDocumentCriteriaBase
{

    /**
     * @var ListRestrictionOfNullableOfSalesDocumentType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ListRestrictionOfNullableOfSalesDocumentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ListRestrictionOfNullableOfSalesDocumentType $Type
     * @return SalesDocumentCriteria
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
