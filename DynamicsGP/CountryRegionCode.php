<?php

class CountryRegionCode extends BusinessObject
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $IsEuropeanUnionMember
     */
    protected $IsEuropeanUnionMember = null;

    /**
     * @var CountryRegionCodeKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return CountryRegionCode
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEuropeanUnionMember()
    {
      return $this->IsEuropeanUnionMember;
    }

    /**
     * @param boolean $IsEuropeanUnionMember
     * @return CountryRegionCode
     */
    public function setIsEuropeanUnionMember($IsEuropeanUnionMember)
    {
      $this->IsEuropeanUnionMember = $IsEuropeanUnionMember;
      return $this;
    }

    /**
     * @return CountryRegionCodeKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param CountryRegionCodeKey $Key
     * @return CountryRegionCode
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
