<?php

class Currency extends BusinessObject
{

    /**
     * @var DecimalPlaces $DecimalPlaces
     */
    protected $DecimalPlaces = null;

    /**
     * @var DecimalSymbol $DecimalSymbol
     */
    protected $DecimalSymbol = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var boolean $IncludeSpace
     */
    protected $IncludeSpace = null;

    /**
     * @var int $Index
     */
    protected $Index = null;

    /**
     * @var CurrencyKey $Key
     */
    protected $Key = null;

    /**
     * @var string $LastModifiedBy
     */
    protected $LastModifiedBy = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var NegativeSymbol $NegativeSymbol
     */
    protected $NegativeSymbol = null;

    /**
     * @var NegativeSymbolCurrencySymbolLocation $NegativeSymbolCurrencySymbolLocation
     */
    protected $NegativeSymbolCurrencySymbolLocation = null;

    /**
     * @var RelativeLocation $NegativeSymbolLocation
     */
    protected $NegativeSymbolLocation = null;

    /**
     * @var string $SubunitText
     */
    protected $SubunitText = null;

    /**
     * @var string $Symbol
     */
    protected $Symbol = null;

    /**
     * @var RelativeLocation $SymbolLocation
     */
    protected $SymbolLocation = null;

    /**
     * @var ThousandsSymbol $ThousandsSymbol
     */
    protected $ThousandsSymbol = null;

    /**
     * @var string $UnitSubunitConnectorText
     */
    protected $UnitSubunitConnectorText = null;

    /**
     * @var string $UnitText
     */
    protected $UnitText = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return DecimalPlaces
     */
    public function getDecimalPlaces()
    {
      return $this->DecimalPlaces;
    }

    /**
     * @param DecimalPlaces $DecimalPlaces
     * @return Currency
     */
    public function setDecimalPlaces($DecimalPlaces)
    {
      $this->DecimalPlaces = $DecimalPlaces;
      return $this;
    }

    /**
     * @return DecimalSymbol
     */
    public function getDecimalSymbol()
    {
      return $this->DecimalSymbol;
    }

    /**
     * @param DecimalSymbol $DecimalSymbol
     * @return Currency
     */
    public function setDecimalSymbol($DecimalSymbol)
    {
      $this->DecimalSymbol = $DecimalSymbol;
      return $this;
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
     * @return Currency
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return Currency
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeSpace()
    {
      return $this->IncludeSpace;
    }

    /**
     * @param boolean $IncludeSpace
     * @return Currency
     */
    public function setIncludeSpace($IncludeSpace)
    {
      $this->IncludeSpace = $IncludeSpace;
      return $this;
    }

    /**
     * @return int
     */
    public function getIndex()
    {
      return $this->Index;
    }

    /**
     * @param int $Index
     * @return Currency
     */
    public function setIndex($Index)
    {
      $this->Index = $Index;
      return $this;
    }

    /**
     * @return CurrencyKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param CurrencyKey $Key
     * @return Currency
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedBy()
    {
      return $this->LastModifiedBy;
    }

    /**
     * @param string $LastModifiedBy
     * @return Currency
     */
    public function setLastModifiedBy($LastModifiedBy)
    {
      $this->LastModifiedBy = $LastModifiedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->LastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedDate
     * @return Currency
     */
    public function setLastModifiedDate(\DateTime $LastModifiedDate = null)
    {
      if ($LastModifiedDate == null) {
       $this->LastModifiedDate = null;
      } else {
        $this->LastModifiedDate = $LastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return NegativeSymbol
     */
    public function getNegativeSymbol()
    {
      return $this->NegativeSymbol;
    }

    /**
     * @param NegativeSymbol $NegativeSymbol
     * @return Currency
     */
    public function setNegativeSymbol($NegativeSymbol)
    {
      $this->NegativeSymbol = $NegativeSymbol;
      return $this;
    }

    /**
     * @return NegativeSymbolCurrencySymbolLocation
     */
    public function getNegativeSymbolCurrencySymbolLocation()
    {
      return $this->NegativeSymbolCurrencySymbolLocation;
    }

    /**
     * @param NegativeSymbolCurrencySymbolLocation $NegativeSymbolCurrencySymbolLocation
     * @return Currency
     */
    public function setNegativeSymbolCurrencySymbolLocation($NegativeSymbolCurrencySymbolLocation)
    {
      $this->NegativeSymbolCurrencySymbolLocation = $NegativeSymbolCurrencySymbolLocation;
      return $this;
    }

    /**
     * @return RelativeLocation
     */
    public function getNegativeSymbolLocation()
    {
      return $this->NegativeSymbolLocation;
    }

    /**
     * @param RelativeLocation $NegativeSymbolLocation
     * @return Currency
     */
    public function setNegativeSymbolLocation($NegativeSymbolLocation)
    {
      $this->NegativeSymbolLocation = $NegativeSymbolLocation;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubunitText()
    {
      return $this->SubunitText;
    }

    /**
     * @param string $SubunitText
     * @return Currency
     */
    public function setSubunitText($SubunitText)
    {
      $this->SubunitText = $SubunitText;
      return $this;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
      return $this->Symbol;
    }

    /**
     * @param string $Symbol
     * @return Currency
     */
    public function setSymbol($Symbol)
    {
      $this->Symbol = $Symbol;
      return $this;
    }

    /**
     * @return RelativeLocation
     */
    public function getSymbolLocation()
    {
      return $this->SymbolLocation;
    }

    /**
     * @param RelativeLocation $SymbolLocation
     * @return Currency
     */
    public function setSymbolLocation($SymbolLocation)
    {
      $this->SymbolLocation = $SymbolLocation;
      return $this;
    }

    /**
     * @return ThousandsSymbol
     */
    public function getThousandsSymbol()
    {
      return $this->ThousandsSymbol;
    }

    /**
     * @param ThousandsSymbol $ThousandsSymbol
     * @return Currency
     */
    public function setThousandsSymbol($ThousandsSymbol)
    {
      $this->ThousandsSymbol = $ThousandsSymbol;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitSubunitConnectorText()
    {
      return $this->UnitSubunitConnectorText;
    }

    /**
     * @param string $UnitSubunitConnectorText
     * @return Currency
     */
    public function setUnitSubunitConnectorText($UnitSubunitConnectorText)
    {
      $this->UnitSubunitConnectorText = $UnitSubunitConnectorText;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitText()
    {
      return $this->UnitText;
    }

    /**
     * @param string $UnitText
     * @return Currency
     */
    public function setUnitText($UnitText)
    {
      $this->UnitText = $UnitText;
      return $this;
    }

}
