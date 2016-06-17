<?php

class ServiceDocumentKey extends TransactionKey
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
     * @return ServiceDocumentKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
