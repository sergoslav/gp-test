<?php

class Bank extends BusinessObject
{

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @var string $Branch
     */
    protected $Branch = null;

    /**
     * @var string $DirectDepositTransitNumber
     */
    protected $DirectDepositTransitNumber = null;

    /**
     * @var BankKey $Key
     */
    protected $Key = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $TransitNumber
     */
    protected $TransitNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address $Address
     * @return Bank
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getBranch()
    {
      return $this->Branch;
    }

    /**
     * @param string $Branch
     * @return Bank
     */
    public function setBranch($Branch)
    {
      $this->Branch = $Branch;
      return $this;
    }

    /**
     * @return string
     */
    public function getDirectDepositTransitNumber()
    {
      return $this->DirectDepositTransitNumber;
    }

    /**
     * @param string $DirectDepositTransitNumber
     * @return Bank
     */
    public function setDirectDepositTransitNumber($DirectDepositTransitNumber)
    {
      $this->DirectDepositTransitNumber = $DirectDepositTransitNumber;
      return $this;
    }

    /**
     * @return BankKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param BankKey $Key
     * @return Bank
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return Bank
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransitNumber()
    {
      return $this->TransitNumber;
    }

    /**
     * @param string $TransitNumber
     * @return Bank
     */
    public function setTransitNumber($TransitNumber)
    {
      $this->TransitNumber = $TransitNumber;
      return $this;
    }

}
