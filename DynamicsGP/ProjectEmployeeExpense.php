<?php

class ProjectEmployeeExpense extends ProjectHeaderBase
{

    /**
     * @var AddressKey $AddressKey
     */
    protected $AddressKey = null;

    /**
     * @var MoneyAmount $Amount1099
     */
    protected $Amount1099 = null;

    /**
     * @var MoneyAmount $ChargeAmount
     */
    protected $ChargeAmount = null;

    /**
     * @var ArrayOfProjectEmployeeExpenseDistribution $Distributions
     */
    protected $Distributions = null;

    /**
     * @var MoneyAmount $DocumentAmount
     */
    protected $DocumentAmount = null;

    /**
     * @var boolean $DoesPostToPayablesManagement
     */
    protected $DoesPostToPayablesManagement = null;

    /**
     * @var EmployeeKey $EmployeeKey
     */
    protected $EmployeeKey = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var MoneyAmount $ExtendedCost
     */
    protected $ExtendedCost = null;

    /**
     * @var MoneyAmount $FreightAmount
     */
    protected $FreightAmount = null;

    /**
     * @var MoneyAmount $FreightTaxAmount
     */
    protected $FreightTaxAmount = null;

    /**
     * @var ProjectTaxBasis $FreightTaxBasis
     */
    protected $FreightTaxBasis = null;

    /**
     * @var TaxScheduleKey $FreightTaxScheduleKey
     */
    protected $FreightTaxScheduleKey = null;

    /**
     * @var boolean $IsTaxInvoiceReceived
     */
    protected $IsTaxInvoiceReceived = null;

    /**
     * @var boolean $IsTaxInvoiceRequired
     */
    protected $IsTaxInvoiceRequired = null;

    /**
     * @var ProjectEmployeeExpenseKey $Key
     */
    protected $Key = null;

    /**
     * @var ArrayOfProjectEmployeeExpenseLine $Lines
     */
    protected $Lines = null;

    /**
     * @var MoneyAmount $MiscellaneousAmount
     */
    protected $MiscellaneousAmount = null;

    /**
     * @var MoneyAmount $MiscellaneousTaxAmount
     */
    protected $MiscellaneousTaxAmount = null;

    /**
     * @var ProjectTaxBasis $MiscellaneousTaxBasis
     */
    protected $MiscellaneousTaxBasis = null;

    /**
     * @var TaxScheduleKey $MiscellaneousTaxScheduleKey
     */
    protected $MiscellaneousTaxScheduleKey = null;

    /**
     * @var ProjectPayment $Payment
     */
    protected $Payment = null;

    /**
     * @var PaymentTermsKey $PaymentTermsKey
     */
    protected $PaymentTermsKey = null;

    /**
     * @var EmployeeKey $PersonalDataKeeperEmployeeKey
     */
    protected $PersonalDataKeeperEmployeeKey = null;

    /**
     * @var MoneyAmount $ReimbursableAmount
     */
    protected $ReimbursableAmount = null;

    /**
     * @var MoneyAmount $ReimbursableTax
     */
    protected $ReimbursableTax = null;

    /**
     * @var ShippingMethodKey $ShippingMethodKey
     */
    protected $ShippingMethodKey = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var \DateTime $TaxDate
     */
    protected $TaxDate = null;

    /**
     * @var TaxScheduleKey $TaxScheduleKey
     */
    protected $TaxScheduleKey = null;

    /**
     * @var MoneyAmount $TradeDiscountAmount
     */
    protected $TradeDiscountAmount = null;

    /**
     * @var MoneyAmount $Unapplied1099Amount
     */
    protected $Unapplied1099Amount = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AddressKey
     */
    public function getAddressKey()
    {
      return $this->AddressKey;
    }

    /**
     * @param AddressKey $AddressKey
     * @return ProjectEmployeeExpense
     */
    public function setAddressKey($AddressKey)
    {
      $this->AddressKey = $AddressKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getAmount1099()
    {
      return $this->Amount1099;
    }

    /**
     * @param MoneyAmount $Amount1099
     * @return ProjectEmployeeExpense
     */
    public function setAmount1099($Amount1099)
    {
      $this->Amount1099 = $Amount1099;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getChargeAmount()
    {
      return $this->ChargeAmount;
    }

    /**
     * @param MoneyAmount $ChargeAmount
     * @return ProjectEmployeeExpense
     */
    public function setChargeAmount($ChargeAmount)
    {
      $this->ChargeAmount = $ChargeAmount;
      return $this;
    }

    /**
     * @return ArrayOfProjectEmployeeExpenseDistribution
     */
    public function getDistributions()
    {
      return $this->Distributions;
    }

    /**
     * @param ArrayOfProjectEmployeeExpenseDistribution $Distributions
     * @return ProjectEmployeeExpense
     */
    public function setDistributions($Distributions)
    {
      $this->Distributions = $Distributions;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getDocumentAmount()
    {
      return $this->DocumentAmount;
    }

    /**
     * @param MoneyAmount $DocumentAmount
     * @return ProjectEmployeeExpense
     */
    public function setDocumentAmount($DocumentAmount)
    {
      $this->DocumentAmount = $DocumentAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoesPostToPayablesManagement()
    {
      return $this->DoesPostToPayablesManagement;
    }

    /**
     * @param boolean $DoesPostToPayablesManagement
     * @return ProjectEmployeeExpense
     */
    public function setDoesPostToPayablesManagement($DoesPostToPayablesManagement)
    {
      $this->DoesPostToPayablesManagement = $DoesPostToPayablesManagement;
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
     * @return ProjectEmployeeExpense
     */
    public function setEmployeeKey($EmployeeKey)
    {
      $this->EmployeeKey = $EmployeeKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return ProjectEmployeeExpense
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getExtendedCost()
    {
      return $this->ExtendedCost;
    }

    /**
     * @param MoneyAmount $ExtendedCost
     * @return ProjectEmployeeExpense
     */
    public function setExtendedCost($ExtendedCost)
    {
      $this->ExtendedCost = $ExtendedCost;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getFreightAmount()
    {
      return $this->FreightAmount;
    }

    /**
     * @param MoneyAmount $FreightAmount
     * @return ProjectEmployeeExpense
     */
    public function setFreightAmount($FreightAmount)
    {
      $this->FreightAmount = $FreightAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getFreightTaxAmount()
    {
      return $this->FreightTaxAmount;
    }

    /**
     * @param MoneyAmount $FreightTaxAmount
     * @return ProjectEmployeeExpense
     */
    public function setFreightTaxAmount($FreightTaxAmount)
    {
      $this->FreightTaxAmount = $FreightTaxAmount;
      return $this;
    }

    /**
     * @return ProjectTaxBasis
     */
    public function getFreightTaxBasis()
    {
      return $this->FreightTaxBasis;
    }

    /**
     * @param ProjectTaxBasis $FreightTaxBasis
     * @return ProjectEmployeeExpense
     */
    public function setFreightTaxBasis($FreightTaxBasis)
    {
      $this->FreightTaxBasis = $FreightTaxBasis;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getFreightTaxScheduleKey()
    {
      return $this->FreightTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $FreightTaxScheduleKey
     * @return ProjectEmployeeExpense
     */
    public function setFreightTaxScheduleKey($FreightTaxScheduleKey)
    {
      $this->FreightTaxScheduleKey = $FreightTaxScheduleKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxInvoiceReceived()
    {
      return $this->IsTaxInvoiceReceived;
    }

    /**
     * @param boolean $IsTaxInvoiceReceived
     * @return ProjectEmployeeExpense
     */
    public function setIsTaxInvoiceReceived($IsTaxInvoiceReceived)
    {
      $this->IsTaxInvoiceReceived = $IsTaxInvoiceReceived;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxInvoiceRequired()
    {
      return $this->IsTaxInvoiceRequired;
    }

    /**
     * @param boolean $IsTaxInvoiceRequired
     * @return ProjectEmployeeExpense
     */
    public function setIsTaxInvoiceRequired($IsTaxInvoiceRequired)
    {
      $this->IsTaxInvoiceRequired = $IsTaxInvoiceRequired;
      return $this;
    }

    /**
     * @return ProjectEmployeeExpenseKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectEmployeeExpenseKey $Key
     * @return ProjectEmployeeExpense
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ArrayOfProjectEmployeeExpenseLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfProjectEmployeeExpenseLine $Lines
     * @return ProjectEmployeeExpense
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getMiscellaneousAmount()
    {
      return $this->MiscellaneousAmount;
    }

    /**
     * @param MoneyAmount $MiscellaneousAmount
     * @return ProjectEmployeeExpense
     */
    public function setMiscellaneousAmount($MiscellaneousAmount)
    {
      $this->MiscellaneousAmount = $MiscellaneousAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getMiscellaneousTaxAmount()
    {
      return $this->MiscellaneousTaxAmount;
    }

    /**
     * @param MoneyAmount $MiscellaneousTaxAmount
     * @return ProjectEmployeeExpense
     */
    public function setMiscellaneousTaxAmount($MiscellaneousTaxAmount)
    {
      $this->MiscellaneousTaxAmount = $MiscellaneousTaxAmount;
      return $this;
    }

    /**
     * @return ProjectTaxBasis
     */
    public function getMiscellaneousTaxBasis()
    {
      return $this->MiscellaneousTaxBasis;
    }

    /**
     * @param ProjectTaxBasis $MiscellaneousTaxBasis
     * @return ProjectEmployeeExpense
     */
    public function setMiscellaneousTaxBasis($MiscellaneousTaxBasis)
    {
      $this->MiscellaneousTaxBasis = $MiscellaneousTaxBasis;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getMiscellaneousTaxScheduleKey()
    {
      return $this->MiscellaneousTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $MiscellaneousTaxScheduleKey
     * @return ProjectEmployeeExpense
     */
    public function setMiscellaneousTaxScheduleKey($MiscellaneousTaxScheduleKey)
    {
      $this->MiscellaneousTaxScheduleKey = $MiscellaneousTaxScheduleKey;
      return $this;
    }

    /**
     * @return ProjectPayment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param ProjectPayment $Payment
     * @return ProjectEmployeeExpense
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return PaymentTermsKey
     */
    public function getPaymentTermsKey()
    {
      return $this->PaymentTermsKey;
    }

    /**
     * @param PaymentTermsKey $PaymentTermsKey
     * @return ProjectEmployeeExpense
     */
    public function setPaymentTermsKey($PaymentTermsKey)
    {
      $this->PaymentTermsKey = $PaymentTermsKey;
      return $this;
    }

    /**
     * @return EmployeeKey
     */
    public function getPersonalDataKeeperEmployeeKey()
    {
      return $this->PersonalDataKeeperEmployeeKey;
    }

    /**
     * @param EmployeeKey $PersonalDataKeeperEmployeeKey
     * @return ProjectEmployeeExpense
     */
    public function setPersonalDataKeeperEmployeeKey($PersonalDataKeeperEmployeeKey)
    {
      $this->PersonalDataKeeperEmployeeKey = $PersonalDataKeeperEmployeeKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getReimbursableAmount()
    {
      return $this->ReimbursableAmount;
    }

    /**
     * @param MoneyAmount $ReimbursableAmount
     * @return ProjectEmployeeExpense
     */
    public function setReimbursableAmount($ReimbursableAmount)
    {
      $this->ReimbursableAmount = $ReimbursableAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getReimbursableTax()
    {
      return $this->ReimbursableTax;
    }

    /**
     * @param MoneyAmount $ReimbursableTax
     * @return ProjectEmployeeExpense
     */
    public function setReimbursableTax($ReimbursableTax)
    {
      $this->ReimbursableTax = $ReimbursableTax;
      return $this;
    }

    /**
     * @return ShippingMethodKey
     */
    public function getShippingMethodKey()
    {
      return $this->ShippingMethodKey;
    }

    /**
     * @param ShippingMethodKey $ShippingMethodKey
     * @return ProjectEmployeeExpense
     */
    public function setShippingMethodKey($ShippingMethodKey)
    {
      $this->ShippingMethodKey = $ShippingMethodKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return ProjectEmployeeExpense
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTaxAmount()
    {
      return $this->TaxAmount;
    }

    /**
     * @param MoneyAmount $TaxAmount
     * @return ProjectEmployeeExpense
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTaxDate()
    {
      if ($this->TaxDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TaxDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TaxDate
     * @return ProjectEmployeeExpense
     */
    public function setTaxDate(\DateTime $TaxDate = null)
    {
      if ($TaxDate == null) {
       $this->TaxDate = null;
      } else {
        $this->TaxDate = $TaxDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getTaxScheduleKey()
    {
      return $this->TaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $TaxScheduleKey
     * @return ProjectEmployeeExpense
     */
    public function setTaxScheduleKey($TaxScheduleKey)
    {
      $this->TaxScheduleKey = $TaxScheduleKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTradeDiscountAmount()
    {
      return $this->TradeDiscountAmount;
    }

    /**
     * @param MoneyAmount $TradeDiscountAmount
     * @return ProjectEmployeeExpense
     */
    public function setTradeDiscountAmount($TradeDiscountAmount)
    {
      $this->TradeDiscountAmount = $TradeDiscountAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getUnapplied1099Amount()
    {
      return $this->Unapplied1099Amount;
    }

    /**
     * @param MoneyAmount $Unapplied1099Amount
     * @return ProjectEmployeeExpense
     */
    public function setUnapplied1099Amount($Unapplied1099Amount)
    {
      $this->Unapplied1099Amount = $Unapplied1099Amount;
      return $this;
    }

}
