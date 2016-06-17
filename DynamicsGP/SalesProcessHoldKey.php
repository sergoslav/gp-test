<?php

class SalesProcessHoldKey extends TransactionKey
{

    /**
     * @var SalesDocumentKey $SalesDocumentKey
     */
    protected $SalesDocumentKey = null;

    /**
     * @var SalesProcessHoldSetupKey $SalesProcessHoldSetupKey
     */
    protected $SalesProcessHoldSetupKey = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return SalesProcessHoldKey
     */
    public function setSalesDocumentKey($SalesDocumentKey)
    {
      $this->SalesDocumentKey = $SalesDocumentKey;
      return $this;
    }

    /**
     * @return SalesProcessHoldSetupKey
     */
    public function getSalesProcessHoldSetupKey()
    {
      return $this->SalesProcessHoldSetupKey;
    }

    /**
     * @param SalesProcessHoldSetupKey $SalesProcessHoldSetupKey
     * @return SalesProcessHoldKey
     */
    public function setSalesProcessHoldSetupKey($SalesProcessHoldSetupKey)
    {
      $this->SalesProcessHoldSetupKey = $SalesProcessHoldSetupKey;
      return $this;
    }

}
