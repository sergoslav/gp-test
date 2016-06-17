<?php

class PayablesDocumentKey extends TransactionKey
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return PayablesDocumentKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
