<?php

class CustomerAddressSummary extends BusinessAddress
{

    /**
     * @var CustomerAddressKey $Key
     */
    protected $Key = null;

    /**
     * @var SalesTerritoryKey $SalesTerritoryKey
     */
    protected $SalesTerritoryKey = null;

    /**
     * @var SalespersonKey $SalespersonKey
     */
    protected $SalespersonKey = null;

    /**
     * @var WarehouseKey $WarehouseKey
     */
    protected $WarehouseKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CustomerAddressKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param CustomerAddressKey $Key
     * @return CustomerAddressSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return SalesTerritoryKey
     */
    public function getSalesTerritoryKey()
    {
      return $this->SalesTerritoryKey;
    }

    /**
     * @param SalesTerritoryKey $SalesTerritoryKey
     * @return CustomerAddressSummary
     */
    public function setSalesTerritoryKey($SalesTerritoryKey)
    {
      $this->SalesTerritoryKey = $SalesTerritoryKey;
      return $this;
    }

    /**
     * @return SalespersonKey
     */
    public function getSalespersonKey()
    {
      return $this->SalespersonKey;
    }

    /**
     * @param SalespersonKey $SalespersonKey
     * @return CustomerAddressSummary
     */
    public function setSalespersonKey($SalespersonKey)
    {
      $this->SalespersonKey = $SalespersonKey;
      return $this;
    }

    /**
     * @return WarehouseKey
     */
    public function getWarehouseKey()
    {
      return $this->WarehouseKey;
    }

    /**
     * @param WarehouseKey $WarehouseKey
     * @return CustomerAddressSummary
     */
    public function setWarehouseKey($WarehouseKey)
    {
      $this->WarehouseKey = $WarehouseKey;
      return $this;
    }

}
