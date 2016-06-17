<?php

class ReceivablesDocumentSummary extends ReceivablesDocumentSummaryBase
{

    /**
     * @var ReceivablesDocumentType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ReceivablesDocumentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ReceivablesDocumentType $Type
     * @return ReceivablesDocumentSummary
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
