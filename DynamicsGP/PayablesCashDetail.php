<?php

class PayablesCashDetail extends CashDetail
{

    /**
     * @var string $DocumentId
     */
    protected $DocumentId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getDocumentId()
    {
      return $this->DocumentId;
    }

    /**
     * @param string $DocumentId
     * @return PayablesCashDetail
     */
    public function setDocumentId($DocumentId)
    {
      $this->DocumentId = $DocumentId;
      return $this;
    }

}
