<?php

class Context
{

    /**
     * @var string $CultureName
     */
    protected $CultureName = null;

    /**
     * @var CurrencyType $CurrencyType
     */
    protected $CurrencyType = null;

    /**
     * @var OrganizationKey $OrganizationKey
     */
    protected $OrganizationKey = null;

    /**
     * @var RoleKey $RoleKey
     */
    protected $RoleKey = null;

    /**
     * @var string $TenantName
     */
    protected $TenantName = null;

    /**
     * @var string $WorkOnBehalfOf
     */
    protected $WorkOnBehalfOf = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCultureName()
    {
      return $this->CultureName;
    }

    /**
     * @param string $CultureName
     * @return Context
     */
    public function setCultureName($CultureName)
    {
      $this->CultureName = $CultureName;
      return $this;
    }

    /**
     * @return CurrencyType
     */
    public function getCurrencyType()
    {
      return $this->CurrencyType;
    }

    /**
     * @param CurrencyType $CurrencyType
     * @return Context
     */
    public function setCurrencyType($CurrencyType)
    {
      $this->CurrencyType = $CurrencyType;
      return $this;
    }

    /**
     * @return OrganizationKey
     */
    public function getOrganizationKey()
    {
      return $this->OrganizationKey;
    }

    /**
     * @param OrganizationKey $OrganizationKey
     * @return Context
     */
    public function setOrganizationKey($OrganizationKey)
    {
      $this->OrganizationKey = $OrganizationKey;
      return $this;
    }

    /**
     * @return RoleKey
     */
    public function getRoleKey()
    {
      return $this->RoleKey;
    }

    /**
     * @param RoleKey $RoleKey
     * @return Context
     */
    public function setRoleKey($RoleKey)
    {
      $this->RoleKey = $RoleKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getTenantName()
    {
      return $this->TenantName;
    }

    /**
     * @param string $TenantName
     * @return Context
     */
    public function setTenantName($TenantName)
    {
      $this->TenantName = $TenantName;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkOnBehalfOf()
    {
      return $this->WorkOnBehalfOf;
    }

    /**
     * @param string $WorkOnBehalfOf
     * @return Context
     */
    public function setWorkOnBehalfOf($WorkOnBehalfOf)
    {
      $this->WorkOnBehalfOf = $WorkOnBehalfOf;
      return $this;
    }

}
