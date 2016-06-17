<?php

class CustomerAddress extends ConstituentAddress
{

    /**
     * @var boolean $DeleteOnUpdate
     */
    protected $DeleteOnUpdate = null;

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
     * @return boolean
     */
    public function getDeleteOnUpdate()
    {
      return $this->DeleteOnUpdate;
    }

    /**
     * @param boolean $DeleteOnUpdate
     * @return CustomerAddress
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
      return $this;
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
     * @return CustomerAddress
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
     * @return CustomerAddress
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
     * @return CustomerAddress
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
     * @return CustomerAddress
     */
    public function setWarehouseKey($WarehouseKey)
    {
      $this->WarehouseKey = $WarehouseKey;
      return $this;
    }

}
