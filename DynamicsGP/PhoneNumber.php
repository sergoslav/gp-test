<?php

class PhoneNumber
{

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $Extension
     */
    protected $Extension = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return PhoneNumber
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param string $Extension
     * @return PhoneNumber
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return PhoneNumber
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
