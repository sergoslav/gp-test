<?php

class SalesDocumentSummary extends SalesDocumentSummaryBase
{

    /**
     * @var SalesDocumentType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalesDocumentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param SalesDocumentType $Type
     * @return SalesDocumentSummary
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
