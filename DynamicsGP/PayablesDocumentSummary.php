<?php

class PayablesDocumentSummary extends PayablesDocumentSummaryBase
{

    /**
     * @var PayablesDocumentType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PayablesDocumentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param PayablesDocumentType $Type
     * @return PayablesDocumentSummary
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
