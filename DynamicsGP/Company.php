<?php

class Company extends BusinessObject
{

    /**
     * @var string $AccountSegmentSeparator
     */
    protected $AccountSegmentSeparator = null;

    /**
     * @var string $BusinessType
     */
    protected $BusinessType = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $DUNSNumber
     */
    protected $DUNSNumber = null;

    /**
     * @var ExtendedBusinessAddress $DefaultAddress
     */
    protected $DefaultAddress = null;

    /**
     * @var CompanyAddressKey $DefaultAddressKey
     */
    protected $DefaultAddressKey = null;

    /**
     * @var boolean $IsValueAddedTaxReturnEnabled
     */
    protected $IsValueAddedTaxReturnEnabled = null;

    /**
     * @var boolean $IsWorkflowEnabled
     */
    protected $IsWorkflowEnabled = null;

    /**
     * @var CompanyKey $Key
     */
    protected $Key = null;

    /**
     * @var string $ModifiedBy
     */
    protected $ModifiedBy = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var CompanyOptions $Options
     */
    protected $Options = null;

    /**
     * @var TaxDetailKey $PayablesProcessesTaxDetailKey
     */
    protected $PayablesProcessesTaxDetailKey = null;

    /**
     * @var TaxScheduleKey $PurchasesTaxScheduleKey
     */
    protected $PurchasesTaxScheduleKey = null;

    /**
     * @var TaxDetailKey $ReceivablesProcessesTaxDetailKey
     */
    protected $ReceivablesProcessesTaxDetailKey = null;

    /**
     * @var string $SICNumber
     */
    protected $SICNumber = null;

    /**
     * @var TaxScheduleKey $SalesTaxScheduleKey
     */
    protected $SalesTaxScheduleKey = null;

    /**
     * @var string $TaxExempt1
     */
    protected $TaxExempt1 = null;

    /**
     * @var string $TaxExempt2
     */
    protected $TaxExempt2 = null;

    /**
     * @var string $TaxRegistration
     */
    protected $TaxRegistration = null;

    /**
     * @var string $UserDefined1
     */
    protected $UserDefined1 = null;

    /**
     * @var string $UserDefined2
     */
    protected $UserDefined2 = null;

    /**
     * @var string $Vets100Number
     */
    protected $Vets100Number = null;

    /**
     * @var VendorKey $WithholdingVendorKey
     */
    protected $WithholdingVendorKey = null;

    /**
     * @var string $WitholdingFileOrReconciliationNumber
     */
    protected $WitholdingFileOrReconciliationNumber = null;

    /**
     * @var int $WitholdingTaxRate
     */
    protected $WitholdingTaxRate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAccountSegmentSeparator()
    {
      return $this->AccountSegmentSeparator;
    }

    /**
     * @param string $AccountSegmentSeparator
     * @return Company
     */
    public function setAccountSegmentSeparator($AccountSegmentSeparator)
    {
      $this->AccountSegmentSeparator = $AccountSegmentSeparator;
      return $this;
    }

    /**
     * @return string
     */
    public function getBusinessType()
    {
      return $this->BusinessType;
    }

    /**
     * @param string $BusinessType
     * @return Company
     */
    public function setBusinessType($BusinessType)
    {
      $this->BusinessType = $BusinessType;
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
     * @return Company
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
    public function getDUNSNumber()
    {
      return $this->DUNSNumber;
    }

    /**
     * @param string $DUNSNumber
     * @return Company
     */
    public function setDUNSNumber($DUNSNumber)
    {
      $this->DUNSNumber = $DUNSNumber;
      return $this;
    }

    /**
     * @return ExtendedBusinessAddress
     */
    public function getDefaultAddress()
    {
      return $this->DefaultAddress;
    }

    /**
     * @param ExtendedBusinessAddress $DefaultAddress
     * @return Company
     */
    public function setDefaultAddress($DefaultAddress)
    {
      $this->DefaultAddress = $DefaultAddress;
      return $this;
    }

    /**
     * @return CompanyAddressKey
     */
    public function getDefaultAddressKey()
    {
      return $this->DefaultAddressKey;
    }

    /**
     * @param CompanyAddressKey $DefaultAddressKey
     * @return Company
     */
    public function setDefaultAddressKey($DefaultAddressKey)
    {
      $this->DefaultAddressKey = $DefaultAddressKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsValueAddedTaxReturnEnabled()
    {
      return $this->IsValueAddedTaxReturnEnabled;
    }

    /**
     * @param boolean $IsValueAddedTaxReturnEnabled
     * @return Company
     */
    public function setIsValueAddedTaxReturnEnabled($IsValueAddedTaxReturnEnabled)
    {
      $this->IsValueAddedTaxReturnEnabled = $IsValueAddedTaxReturnEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsWorkflowEnabled()
    {
      return $this->IsWorkflowEnabled;
    }

    /**
     * @param boolean $IsWorkflowEnabled
     * @return Company
     */
    public function setIsWorkflowEnabled($IsWorkflowEnabled)
    {
      $this->IsWorkflowEnabled = $IsWorkflowEnabled;
      return $this;
    }

    /**
     * @return CompanyKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param CompanyKey $Key
     * @return Company
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
      return $this->ModifiedBy;
    }

    /**
     * @param string $ModifiedBy
     * @return Company
     */
    public function setModifiedBy($ModifiedBy)
    {
      $this->ModifiedBy = $ModifiedBy;
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
     * @return Company
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
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return Company
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return CompanyOptions
     */
    public function getOptions()
    {
      return $this->Options;
    }

    /**
     * @param CompanyOptions $Options
     * @return Company
     */
    public function setOptions($Options)
    {
      $this->Options = $Options;
      return $this;
    }

    /**
     * @return TaxDetailKey
     */
    public function getPayablesProcessesTaxDetailKey()
    {
      return $this->PayablesProcessesTaxDetailKey;
    }

    /**
     * @param TaxDetailKey $PayablesProcessesTaxDetailKey
     * @return Company
     */
    public function setPayablesProcessesTaxDetailKey($PayablesProcessesTaxDetailKey)
    {
      $this->PayablesProcessesTaxDetailKey = $PayablesProcessesTaxDetailKey;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getPurchasesTaxScheduleKey()
    {
      return $this->PurchasesTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $PurchasesTaxScheduleKey
     * @return Company
     */
    public function setPurchasesTaxScheduleKey($PurchasesTaxScheduleKey)
    {
      $this->PurchasesTaxScheduleKey = $PurchasesTaxScheduleKey;
      return $this;
    }

    /**
     * @return TaxDetailKey
     */
    public function getReceivablesProcessesTaxDetailKey()
    {
      return $this->ReceivablesProcessesTaxDetailKey;
    }

    /**
     * @param TaxDetailKey $ReceivablesProcessesTaxDetailKey
     * @return Company
     */
    public function setReceivablesProcessesTaxDetailKey($ReceivablesProcessesTaxDetailKey)
    {
      $this->ReceivablesProcessesTaxDetailKey = $ReceivablesProcessesTaxDetailKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getSICNumber()
    {
      return $this->SICNumber;
    }

    /**
     * @param string $SICNumber
     * @return Company
     */
    public function setSICNumber($SICNumber)
    {
      $this->SICNumber = $SICNumber;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getSalesTaxScheduleKey()
    {
      return $this->SalesTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $SalesTaxScheduleKey
     * @return Company
     */
    public function setSalesTaxScheduleKey($SalesTaxScheduleKey)
    {
      $this->SalesTaxScheduleKey = $SalesTaxScheduleKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxExempt1()
    {
      return $this->TaxExempt1;
    }

    /**
     * @param string $TaxExempt1
     * @return Company
     */
    public function setTaxExempt1($TaxExempt1)
    {
      $this->TaxExempt1 = $TaxExempt1;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxExempt2()
    {
      return $this->TaxExempt2;
    }

    /**
     * @param string $TaxExempt2
     * @return Company
     */
    public function setTaxExempt2($TaxExempt2)
    {
      $this->TaxExempt2 = $TaxExempt2;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxRegistration()
    {
      return $this->TaxRegistration;
    }

    /**
     * @param string $TaxRegistration
     * @return Company
     */
    public function setTaxRegistration($TaxRegistration)
    {
      $this->TaxRegistration = $TaxRegistration;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefined1()
    {
      return $this->UserDefined1;
    }

    /**
     * @param string $UserDefined1
     * @return Company
     */
    public function setUserDefined1($UserDefined1)
    {
      $this->UserDefined1 = $UserDefined1;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefined2()
    {
      return $this->UserDefined2;
    }

    /**
     * @param string $UserDefined2
     * @return Company
     */
    public function setUserDefined2($UserDefined2)
    {
      $this->UserDefined2 = $UserDefined2;
      return $this;
    }

    /**
     * @return string
     */
    public function getVets100Number()
    {
      return $this->Vets100Number;
    }

    /**
     * @param string $Vets100Number
     * @return Company
     */
    public function setVets100Number($Vets100Number)
    {
      $this->Vets100Number = $Vets100Number;
      return $this;
    }

    /**
     * @return VendorKey
     */
    public function getWithholdingVendorKey()
    {
      return $this->WithholdingVendorKey;
    }

    /**
     * @param VendorKey $WithholdingVendorKey
     * @return Company
     */
    public function setWithholdingVendorKey($WithholdingVendorKey)
    {
      $this->WithholdingVendorKey = $WithholdingVendorKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getWitholdingFileOrReconciliationNumber()
    {
      return $this->WitholdingFileOrReconciliationNumber;
    }

    /**
     * @param string $WitholdingFileOrReconciliationNumber
     * @return Company
     */
    public function setWitholdingFileOrReconciliationNumber($WitholdingFileOrReconciliationNumber)
    {
      $this->WitholdingFileOrReconciliationNumber = $WitholdingFileOrReconciliationNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getWitholdingTaxRate()
    {
      return $this->WitholdingTaxRate;
    }

    /**
     * @param int $WitholdingTaxRate
     * @return Company
     */
    public function setWitholdingTaxRate($WitholdingTaxRate)
    {
      $this->WitholdingTaxRate = $WitholdingTaxRate;
      return $this;
    }

}
