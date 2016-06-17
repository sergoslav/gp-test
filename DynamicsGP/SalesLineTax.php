<?php

class SalesLineTax extends SalesTax
{

    /**
     * @var SalesLineTaxKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalesLineTaxKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesLineTaxKey $Key
     * @return SalesLineTax
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
