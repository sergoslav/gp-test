<?php

class Salesperson extends BusinessObject
{

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @var CommissionBasedOn $CommissionBasedOn
     */
    protected $CommissionBasedOn = null;

    /**
     * @var Percent $CommissionPercent
     */
    protected $CommissionPercent = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var EmployeeKey $EmployeeKey
     */
    protected $EmployeeKey = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var SalesHistoryOptions $HistoryOptions
     */
    protected $HistoryOptions = null;

    /**
     * @var InternetAddresses $InternetAddresses
     */
    protected $InternetAddresses = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var SalespersonKey $Key
     */
    protected $Key = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $MiddleName
     */
    protected $MiddleName = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var ArrayOfSalespersonHistory $SalesHistory
     */
    protected $SalesHistory = null;

    /**
     * @var SalesSummary $SalesSummary
     */
    protected $SalesSummary = null;

    /**
     * @var SalesTerritoryKey $SalesTerritoryKey
     */
    protected $SalesTerritoryKey = null;

    /**
     * @var VendorKey $VendorKey
     */
    protected $VendorKey = null;

    
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
     * @return Salesperson
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return CommissionBasedOn
     */
    public function getCommissionBasedOn()
    {
      return $this->CommissionBasedOn;
    }

    /**
     * @param CommissionBasedOn $CommissionBasedOn
     * @return Salesperson
     */
    public function setCommissionBasedOn($CommissionBasedOn)
    {
      $this->CommissionBasedOn = $CommissionBasedOn;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getCommissionPercent()
    {
      return $this->CommissionPercent;
    }

    /**
     * @param Percent $CommissionPercent
     * @return Salesperson
     */
    public function setCommissionPercent($CommissionPercent)
    {
      $this->CommissionPercent = $CommissionPercent;
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
     * @return Salesperson
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
     * @return EmployeeKey
     */
    public function getEmployeeKey()
    {
      return $this->EmployeeKey;
    }

    /**
     * @param EmployeeKey $EmployeeKey
     * @return Salesperson
     */
    public function setEmployeeKey($EmployeeKey)
    {
      $this->EmployeeKey = $EmployeeKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return Salesperson
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
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
     * @return Salesperson
     */
    public function setHistoryOptions($HistoryOptions)
    {
      $this->HistoryOptions = $HistoryOptions;
      return $this;
    }

    /**
     * @return InternetAddresses
     */
    public function getInternetAddresses()
    {
      return $this->InternetAddresses;
    }

    /**
     * @param InternetAddresses $InternetAddresses
     * @return Salesperson
     */
    public function setInternetAddresses($InternetAddresses)
    {
      $this->InternetAddresses = $InternetAddresses;
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
     * @return Salesperson
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return SalespersonKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalespersonKey $Key
     * @return Salesperson
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return Salesperson
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
      return $this->MiddleName;
    }

    /**
     * @param string $MiddleName
     * @return Salesperson
     */
    public function setMiddleName($MiddleName)
    {
      $this->MiddleName = $MiddleName;
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
     * @return Salesperson
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
     * @return ArrayOfSalespersonHistory
     */
    public function getSalesHistory()
    {
      return $this->SalesHistory;
    }

    /**
     * @param ArrayOfSalespersonHistory $SalesHistory
     * @return Salesperson
     */
    public function setSalesHistory($SalesHistory)
    {
      $this->SalesHistory = $SalesHistory;
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
     * @return Salesperson
     */
    public function setSalesSummary($SalesSummary)
    {
      $this->SalesSummary = $SalesSummary;
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
     * @return Salesperson
     */
    public function setSalesTerritoryKey($SalesTerritoryKey)
    {
      $this->SalesTerritoryKey = $SalesTerritoryKey;
      return $this;
    }

    /**
     * @return VendorKey
     */
    public function getVendorKey()
    {
      return $this->VendorKey;
    }

    /**
     * @param VendorKey $VendorKey
     * @return Salesperson
     */
    public function setVendorKey($VendorKey)
    {
      $this->VendorKey = $VendorKey;
      return $this;
    }

}
