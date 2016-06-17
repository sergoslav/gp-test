<?php

class SalesTerritory extends BusinessObject
{

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var SalesHistoryOptions $HistoryOptions
     */
    protected $HistoryOptions = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var SalesTerritoryKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var ArrayOfSalesTerritoryHistory $SalesHistory
     */
    protected $SalesHistory = null;

    /**
     * @var string $SalesManagerFirstName
     */
    protected $SalesManagerFirstName = null;

    /**
     * @var SalespersonKey $SalesManagerKey
     */
    protected $SalesManagerKey = null;

    /**
     * @var string $SalesManagerLastName
     */
    protected $SalesManagerLastName = null;

    /**
     * @var string $SalesManagerMiddleName
     */
    protected $SalesManagerMiddleName = null;

    /**
     * @var SalesSummary $SalesSummary
     */
    protected $SalesSummary = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return SalesTerritory
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->CreatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate
     * @return SalesTerritory
     */
    public function setCreatedDate(\DateTime $CreatedDate = null)
    {
      if ($CreatedDate == null) {
       $this->CreatedDate = null;
      } else {
        $this->CreatedDate = $CreatedDate->format(\DateTime::ATOM);
      }
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
     * @return SalesTerritory
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return SalesHistoryOptions
     */
    public function getHistoryOptions()
    {
      return $this->HistoryOptions;
    }

    /**
     * @param SalesHistoryOptions $HistoryOptions
     * @return SalesTerritory
     */
    public function setHistoryOptions($HistoryOptions)
    {
      $this->HistoryOptions = $HistoryOptions;
      return $this;
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
     * @return SalesTerritory
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return SalesTerritoryKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesTerritoryKey $Key
     * @return SalesTerritory
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate()
    {
      if ($this->ModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDate
     * @return SalesTerritory
     */
    public function setModifiedDate(\DateTime $ModifiedDate = null)
    {
      if ($ModifiedDate == null) {
       $this->ModifiedDate = null;
      } else {
        $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfSalesTerritoryHistory
     */
    public function getSalesHistory()
    {
      return $this->SalesHistory;
    }

    /**
     * @param ArrayOfSalesTerritoryHistory $SalesHistory
     * @return SalesTerritory
     */
    public function setSalesHistory($SalesHistory)
    {
      $this->SalesHistory = $SalesHistory;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesManagerFirstName()
    {
      return $this->SalesManagerFirstName;
    }

    /**
     * @param string $SalesManagerFirstName
     * @return SalesTerritory
     */
    public function setSalesManagerFirstName($SalesManagerFirstName)
    {
      $this->SalesManagerFirstName = $SalesManagerFirstName;
      return $this;
    }

    /**
     * @return SalespersonKey
     */
    public function getSalesManagerKey()
    {
      return $this->SalesManagerKey;
    }

    /**
     * @param SalespersonKey $SalesManagerKey
     * @return SalesTerritory
     */
    public function setSalesManagerKey($SalesManagerKey)
    {
      $this->SalesManagerKey = $SalesManagerKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesManagerLastName()
    {
      return $this->SalesManagerLastName;
    }

    /**
     * @param string $SalesManagerLastName
     * @return SalesTerritory
     */
    public function setSalesManagerLastName($SalesManagerLastName)
    {
      $this->SalesManagerLastName = $SalesManagerLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesManagerMiddleName()
    {
      return $this->SalesManagerMiddleName;
    }

    /**
     * @param string $SalesManagerMiddleName
     * @return SalesTerritory
     */
    public function setSalesManagerMiddleName($SalesManagerMiddleName)
    {
      $this->SalesManagerMiddleName = $SalesManagerMiddleName;
      return $this;
    }

    /**
     * @return SalesSummary
     */
    public function getSalesSummary()
    {
      return $this->SalesSummary;
    }

    /**
     * @param SalesSummary $SalesSummary
     * @return SalesTerritory
     */
    public function setSalesSummary($SalesSummary)
    {
      $this->SalesSummary = $SalesSummary;
      return $this;
    }

}
