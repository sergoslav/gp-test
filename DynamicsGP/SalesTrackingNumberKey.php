<?php

class SalesTrackingNumberKey extends TransactionKey
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var SalesDocumentKey $SalesDocumentKey
     */
    protected $SalesDocumentKey = null;

    
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
     * @return SalesTrackingNumberKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return SalesDocumentKey
     */
    public function getSalesDocumentKey()
    {
      return $this->SalesDocumentKey;
    }

    /**
     * @param SalesDocumentKey $SalesDocumentKey
     * @return SalesTrackingNumberKey
     */
    public function setSalesDocumentKey($SalesDocumentKey)
    {
      $this->SalesDocumentKey = $SalesDocumentKey;
      return $this;
    }

}
