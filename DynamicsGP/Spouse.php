<?php

class Spouse
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $TaxIdentifier
     */
    protected $TaxIdentifier = null;

    
    public function __construct()
    {
    
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
     * @return Spouse
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxIdentifier()
    {
      return $this->TaxIdentifier;
    }

    /**
     * @param string $TaxIdentifier
     * @return Spouse
     */
    public function setTaxIdentifier($TaxIdentifier)
    {
      $this->TaxIdentifier = $TaxIdentifier;
      return $this;
    }

}
