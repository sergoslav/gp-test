<?php

class CurrencyAccess extends BusinessObject
{

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var CurrencyAccessKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
      return $this->IsActive;
    }

    /**
     * @param boolean $IsActive
     * @return CurrencyAccess
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return CurrencyAccessKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param CurrencyAccessKey $Key
     * @return CurrencyAccess
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
