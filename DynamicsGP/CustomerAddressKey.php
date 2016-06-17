<?php

class CustomerAddressKey extends ReferenceKey
{

    /**
     * @var CustomerKey $CustomerKey
     */
    protected $CustomerKey = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return CustomerAddressKey
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
      return $this;
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
     * @return CustomerAddressKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
