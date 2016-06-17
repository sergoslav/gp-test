<?php

class AddressBase extends BusinessObject
{

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $Line1
     */
    protected $Line1 = null;

    /**
     * @var string $Line2
     */
    protected $Line2 = null;

    /**
     * @var string $Line3
     */
    protected $Line3 = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $State
     */
    protected $State = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return AddressBase
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine1()
    {
      return $this->Line1;
    }

    /**
     * @param string $Line1
     * @return AddressBase
     */
    public function setLine1($Line1)
    {
      $this->Line1 = $Line1;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine2()
    {
      return $this->Line2;
    }

    /**
     * @param string $Line2
     * @return AddressBase
     */
    public function setLine2($Line2)
    {
      $this->Line2 = $Line2;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine3()
    {
      return $this->Line3;
    }

    /**
     * @param string $Line3
     * @return AddressBase
     */
    public function setLine3($Line3)
    {
      $this->Line3 = $Line3;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return AddressBase
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return AddressBase
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

}
