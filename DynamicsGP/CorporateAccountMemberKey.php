<?php

class CorporateAccountMemberKey extends ReferenceKey
{

    /**
     * @var CustomerKey $CorporateAccountKey
     */
    protected $CorporateAccountKey = null;

    /**
     * @var CustomerKey $CustomerKey
     */
    protected $CustomerKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CustomerKey
     */
    public function getCorporateAccountKey()
    {
      return $this->CorporateAccountKey;
    }

    /**
     * @param CustomerKey $CorporateAccountKey
     * @return CorporateAccountMemberKey
     */
    public function setCorporateAccountKey($CorporateAccountKey)
    {
      $this->CorporateAccountKey = $CorporateAccountKey;
      return $this;
    }

    /**
     * @return CustomerKey
     */
    public function getCustomerKey()
    {
      return $this->CustomerKey;
    }

    /**
     * @param CustomerKey $CustomerKey
     * @return CorporateAccountMemberKey
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
      return $this;
    }

}
