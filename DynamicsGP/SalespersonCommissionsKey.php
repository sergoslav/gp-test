<?php

class SalespersonCommissionsKey extends TransactionKey
{

    /**
     * @var string $DocumentNumber
     */
    protected $DocumentNumber = null;

    /**
     * @var SalespersonCommissionsDocumentType $DocumentType
     */
    protected $DocumentType = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getDocumentNumber()
    {
      return $this->DocumentNumber;
    }

    /**
     * @param string $DocumentNumber
     * @return SalespersonCommissionsKey
     */
    public function setDocumentNumber($DocumentNumber)
    {
      $this->DocumentNumber = $DocumentNumber;
      return $this;
    }

    /**
     * @return SalespersonCommissionsDocumentType
     */
    public function getDocumentType()
    {
      return $this->DocumentType;
    }

    /**
     * @param SalespersonCommissionsDocumentType $DocumentType
     * @return SalespersonCommissionsKey
     */
    public function setDocumentType($DocumentType)
    {
      $this->DocumentType = $DocumentType;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
      return $this->SequenceNumber;
    }

    /**
     * @param int $SequenceNumber
     * @return SalespersonCommissionsKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
