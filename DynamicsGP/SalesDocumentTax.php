<?php

class SalesDocumentTax extends SalesTax
{

    /**
     * @var SalesDocumentTaxKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalesDocumentTaxKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesDocumentTaxKey $Key
     * @return SalesDocumentTax
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
