<?php

class ProjectChangeOrderBudget extends BusinessObject
{

    /**
     * @var MoneyAmount $ActualReceiptAmount
     */
    protected $ActualReceiptAmount = null;

    /**
     * @var MoneyAmount $ActualWriteoffAmount
     */
    protected $ActualWriteoffAmount = null;

    /**
     * @var MoneyAmount $ActualWriteoffTaxAmount
     */
    protected $ActualWriteoffTaxAmount = null;

    /**
     * @var \DateTime $ApprovalDate
     */
    protected $ApprovalDate = null;

    /**
     * @var MoneyAmount $BaselineOverheadCost
     */
    protected $BaselineOverheadCost = null;

    /**
     * @var MoneyAmount $BaselineProfitAmount
     */
    protected $BaselineProfitAmount = null;

    /**
     * @var Quantity $BaselineQuantity
     */
    protected $BaselineQuantity = null;

    /**
     * @var MoneyAmount $BaselineUnitCost
     */
    protected $BaselineUnitCost = null;

    /**
     * @var BillingType $BillingType
     */
    protected $BillingType = null;

    /**
     * @var \DateTime $ContractBeginDate
     */
    protected $ContractBeginDate = null;

    /**
     * @var \DateTime $ContractEndDate
     */
    protected $ContractEndDate = null;

    /**
     * @var CostCategoryKey $CostCategoryKey
     */
    protected $CostCategoryKey = null;

    /**
     * @var MoneyAmount $FinalQuoteAmount
     */
    protected $FinalQuoteAmount = null;

    /**
     * @var MoneyAmount $InitialQuoteAmount
     */
    protected $InitialQuoteAmount = null;

    /**
     * @var boolean $IsClosed
     */
    protected $IsClosed = null;

    /**
     * @var ProjectChangeOrderBudgetKey $Key
     */
    protected $Key = null;

    /**
     * @var int $LineItemSequenceNumber
     */
    protected $LineItemSequenceNumber = null;

    /**
     * @var MoneyAmount $OriginalBudgetAmount
     */
    protected $OriginalBudgetAmount = null;

    /**
     * @var MoneyAmount $OriginalProjectAmount
     */
    protected $OriginalProjectAmount = null;

    /**
     * @var Percent $OverheadPercent
     */
    protected $OverheadPercent = null;

    /**
     * @var ProjectChangeOrderPayCodeHourlyKey $PayCodeHourlyKey
     */
    protected $PayCodeHourlyKey = null;

    /**
     * @var ProjectChangeOrderPayCodeSalaryKey $PayCodeSalaryKey
     */
    protected $PayCodeSalaryKey = null;

    /**
     * @var ProjectPostedAmount $Posted
     */
    protected $Posted = null;

    /**
     * @var MoneyAmount $PreviousBaselineOverheadCost
     */
    protected $PreviousBaselineOverheadCost = null;

    /**
     * @var MoneyAmount $PreviousBaselineProfitAmount
     */
    protected $PreviousBaselineProfitAmount = null;

    /**
     * @var Quantity $PreviousBaselineQuantity
     */
    protected $PreviousBaselineQuantity = null;

    /**
     * @var MoneyAmount $PreviousBaselineUnitCost
     */
    protected $PreviousBaselineUnitCost = null;

    /**
     * @var \DateTime $PreviousContractBeginDate
     */
    protected $PreviousContractBeginDate = null;

    /**
     * @var \DateTime $PreviousContractEndDate
     */
    protected $PreviousContractEndDate = null;

    /**
     * @var Percent $PreviousOverheadPercent
     */
    protected $PreviousOverheadPercent = null;

    /**
     * @var ProjectChangeOrderPayCodeHourlyKey $PreviousPayCodeHourlyKey
     */
    protected $PreviousPayCodeHourlyKey = null;

    /**
     * @var ProjectChangeOrderPayCodeSalaryKey $PreviousPayCodeSalaryKey
     */
    protected $PreviousPayCodeSalaryKey = null;

    /**
     * @var MoneyAmount $PreviousProfitAmount
     */
    protected $PreviousProfitAmount = null;

    /**
     * @var Percent $PreviousProfitPercent
     */
    protected $PreviousProfitPercent = null;

    /**
     * @var MoneyAmount $PreviousProjectAmount
     */
    protected $PreviousProjectAmount = null;

    /**
     * @var PurchasingTaxBasis $PreviousPurchaseTaxBasis
     */
    protected $PreviousPurchaseTaxBasis = null;

    /**
     * @var Quantity $PreviousQuantity
     */
    protected $PreviousQuantity = null;

    /**
     * @var SalesTaxBasis $PreviousSalesTaxBasis
     */
    protected $PreviousSalesTaxBasis = null;

    /**
     * @var TaxScheduleKey $PreviousSalesTaxScheduleKey
     */
    protected $PreviousSalesTaxScheduleKey = null;

    /**
     * @var TaxScheduleKey $PreviousTaxScheduleKey
     */
    protected $PreviousTaxScheduleKey = null;

    /**
     * @var MoneyAmount $PreviousTotalBillingAmount
     */
    protected $PreviousTotalBillingAmount = null;

    /**
     * @var MoneyAmount $PreviousTotalCost
     */
    protected $PreviousTotalCost = null;

    /**
     * @var MoneyAmount $PreviousTotalOverheadAmount
     */
    protected $PreviousTotalOverheadAmount = null;

    /**
     * @var MoneyAmount $PreviousTotalProfitAmount
     */
    protected $PreviousTotalProfitAmount = null;

    /**
     * @var MoneyAmount $PreviousUnitCost
     */
    protected $PreviousUnitCost = null;

    /**
     * @var MoneyAmount $ProfitAmount
     */
    protected $ProfitAmount = null;

    /**
     * @var Percent $ProfitPercent
     */
    protected $ProfitPercent = null;

    /**
     * @var ProfitType $ProfitType
     */
    protected $ProfitType = null;

    /**
     * @var MoneyAmount $ProjectAmount
     */
    protected $ProjectAmount = null;

    /**
     * @var ProjectKey $ProjectKey
     */
    protected $ProjectKey = null;

    /**
     * @var PurchasingTaxBasis $PurchaseTaxBasis
     */
    protected $PurchaseTaxBasis = null;

    /**
     * @var TaxScheduleKey $PurchaseTaxScheduleKey
     */
    protected $PurchaseTaxScheduleKey = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $QuoteApprovedBy
     */
    protected $QuoteApprovedBy = null;

    /**
     * @var string $QuotePreparedBy
     */
    protected $QuotePreparedBy = null;

    /**
     * @var MoneyAmount $RevisedBudgetTotalAmount
     */
    protected $RevisedBudgetTotalAmount = null;

    /**
     * @var MoneyAmount $RevisedProjectTotalAmount
     */
    protected $RevisedProjectTotalAmount = null;

    /**
     * @var SalesTaxBasis $SalesTaxBasis
     */
    protected $SalesTaxBasis = null;

    /**
     * @var TaxScheduleKey $SalesTaxScheduleKey
     */
    protected $SalesTaxScheduleKey = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var MoneyAmount $TotalBillingAmount
     */
    protected $TotalBillingAmount = null;

    /**
     * @var MoneyAmount $TotalCost
     */
    protected $TotalCost = null;

    /**
     * @var MoneyAmount $TotalOverheadAmount
     */
    protected $TotalOverheadAmount = null;

    /**
     * @var MoneyAmount $TotalProfitAmount
     */
    protected $TotalProfitAmount = null;

    /**
     * @var MoneyAmount $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var string $UofM
     */
    protected $UofM = null;

    /**
     * @var UofMScheduleKey $UofMScheduleKey
     */
    protected $UofMScheduleKey = null;

    /**
     * @var Percent $VarianceMarkupPercent
     */
    protected $VarianceMarkupPercent = null;

    /**
     * @var MoneyAmount $VarianceOverheadAmount
     */
    protected $VarianceOverheadAmount = null;

    /**
     * @var Percent $VarianceOverheadPercent
     */
    protected $VarianceOverheadPercent = null;

    /**
     * @var MoneyAmount $VarianceProfitAmount
     */
    protected $VarianceProfitAmount = null;

    /**
     * @var MoneyAmount $VarianceProjectAmount
     */
    protected $VarianceProjectAmount = null;

    /**
     * @var Quantity $VarianceQuantity
     */
    protected $VarianceQuantity = null;

    /**
     * @var MoneyAmount $VarianceTotalBillingAmount
     */
    protected $VarianceTotalBillingAmount = null;

    /**
     * @var MoneyAmount $VarianceTotalCost
     */
    protected $VarianceTotalCost = null;

    /**
     * @var MoneyAmount $VarianceTotalProfitAmount
     */
    protected $VarianceTotalProfitAmount = null;

    /**
     * @var MoneyAmount $VarianceUnitCost
     */
    protected $VarianceUnitCost = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getActualReceiptAmount()
    {
      return $this->ActualReceiptAmount;
    }

    /**
     * @param MoneyAmount $ActualReceiptAmount
     * @return ProjectChangeOrderBudget
     */
    public function setActualReceiptAmount($ActualReceiptAmount)
    {
      $this->ActualReceiptAmount = $ActualReceiptAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getActualWriteoffAmount()
    {
      return $this->ActualWriteoffAmount;
    }

    /**
     * @param MoneyAmount $ActualWriteoffAmount
     * @return ProjectChangeOrderBudget
     */
    public function setActualWriteoffAmount($ActualWriteoffAmount)
    {
      $this->ActualWriteoffAmount = $ActualWriteoffAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getActualWriteoffTaxAmount()
    {
      return $this->ActualWriteoffTaxAmount;
    }

    /**
     * @param MoneyAmount $ActualWriteoffTaxAmount
     * @return ProjectChangeOrderBudget
     */
    public function setActualWriteoffTaxAmount($ActualWriteoffTaxAmount)
    {
      $this->ActualWriteoffTaxAmount = $ActualWriteoffTaxAmount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getApprovalDate()
    {
      if ($this->ApprovalDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ApprovalDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ApprovalDate
     * @return ProjectChangeOrderBudget
     */
    public function setApprovalDate(\DateTime $ApprovalDate = null)
    {
      if ($ApprovalDate == null) {
       $this->ApprovalDate = null;
      } else {
        $this->ApprovalDate = $ApprovalDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getBaselineOverheadCost()
    {
      return $this->BaselineOverheadCost;
    }

    /**
     * @param MoneyAmount $BaselineOverheadCost
     * @return ProjectChangeOrderBudget
     */
    public function setBaselineOverheadCost($BaselineOverheadCost)
    {
      $this->BaselineOverheadCost = $BaselineOverheadCost;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getBaselineProfitAmount()
    {
      return $this->BaselineProfitAmount;
    }

    /**
     * @param MoneyAmount $BaselineProfitAmount
     * @return ProjectChangeOrderBudget
     */
    public function setBaselineProfitAmount($BaselineProfitAmount)
    {
      $this->BaselineProfitAmount = $BaselineProfitAmount;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getBaselineQuantity()
    {
      return $this->BaselineQuantity;
    }

    /**
     * @param Quantity $BaselineQuantity
     * @return ProjectChangeOrderBudget
     */
    public function setBaselineQuantity($BaselineQuantity)
    {
      $this->BaselineQuantity = $BaselineQuantity;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getBaselineUnitCost()
    {
      return $this->BaselineUnitCost;
    }

    /**
     * @param MoneyAmount $BaselineUnitCost
     * @return ProjectChangeOrderBudget
     */
    public function setBaselineUnitCost($BaselineUnitCost)
    {
      $this->BaselineUnitCost = $BaselineUnitCost;
      return $this;
    }

    /**
     * @return BillingType
     */
    public function getBillingType()
    {
      return $this->BillingType;
    }

    /**
     * @param BillingType $BillingType
     * @return ProjectChangeOrderBudget
     */
    public function setBillingType($BillingType)
    {
      $this->BillingType = $BillingType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getContractBeginDate()
    {
      if ($this->ContractBeginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ContractBeginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ContractBeginDate
     * @return ProjectChangeOrderBudget
     */
    public function setContractBeginDate(\DateTime $ContractBeginDate = null)
    {
      if ($ContractBeginDate == null) {
       $this->ContractBeginDate = null;
      } else {
        $this->ContractBeginDate = $ContractBeginDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getContractEndDate()
    {
      if ($this->ContractEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ContractEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ContractEndDate
     * @return ProjectChangeOrderBudget
     */
    public function setContractEndDate(\DateTime $ContractEndDate = null)
    {
      if ($ContractEndDate == null) {
       $this->ContractEndDate = null;
      } else {
        $this->ContractEndDate = $ContractEndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return CostCategoryKey
     */
    public function getCostCategoryKey()
    {
      return $this->CostCategoryKey;
    }

    /**
     * @param CostCategoryKey $CostCategoryKey
     * @return ProjectChangeOrderBudget
     */
    public function setCostCategoryKey($CostCategoryKey)
    {
      $this->CostCategoryKey = $CostCategoryKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getFinalQuoteAmount()
    {
      return $this->FinalQuoteAmount;
    }

    /**
     * @param MoneyAmount $FinalQuoteAmount
     * @return ProjectChangeOrderBudget
     */
    public function setFinalQuoteAmount($FinalQuoteAmount)
    {
      $this->FinalQuoteAmount = $FinalQuoteAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getInitialQuoteAmount()
    {
      return $this->InitialQuoteAmount;
    }

    /**
     * @param MoneyAmount $InitialQuoteAmount
     * @return ProjectChangeOrderBudget
     */
    public function setInitialQuoteAmount($InitialQuoteAmount)
    {
      $this->InitialQuoteAmount = $InitialQuoteAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsClosed()
    {
      return $this->IsClosed;
    }

    /**
     * @param boolean $IsClosed
     * @return ProjectChangeOrderBudget
     */
    public function setIsClosed($IsClosed)
    {
      $this->IsClosed = $IsClosed;
      return $this;
    }

    /**
     * @return ProjectChangeOrderBudgetKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectChangeOrderBudgetKey $Key
     * @return ProjectChangeOrderBudget
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return int
     */
    public function getLineItemSequenceNumber()
    {
      return $this->LineItemSequenceNumber;
    }

    /**
     * @param int $LineItemSequenceNumber
     * @return ProjectChangeOrderBudget
     */
    public function setLineItemSequenceNumber($LineItemSequenceNumber)
    {
      $this->LineItemSequenceNumber = $LineItemSequenceNumber;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getOriginalBudgetAmount()
    {
      return $this->OriginalBudgetAmount;
    }

    /**
     * @param MoneyAmount $OriginalBudgetAmount
     * @return ProjectChangeOrderBudget
     */
    public function setOriginalBudgetAmount($OriginalBudgetAmount)
    {
      $this->OriginalBudgetAmount = $OriginalBudgetAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getOriginalProjectAmount()
    {
      return $this->OriginalProjectAmount;
    }

    /**
     * @param MoneyAmount $OriginalProjectAmount
     * @return ProjectChangeOrderBudget
     */
    public function setOriginalProjectAmount($OriginalProjectAmount)
    {
      $this->OriginalProjectAmount = $OriginalProjectAmount;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getOverheadPercent()
    {
      return $this->OverheadPercent;
    }

    /**
     * @param Percent $OverheadPercent
     * @return ProjectChangeOrderBudget
     */
    public function setOverheadPercent($OverheadPercent)
    {
      $this->OverheadPercent = $OverheadPercent;
      return $this;
    }

    /**
     * @return ProjectChangeOrderPayCodeHourlyKey
     */
    public function getPayCodeHourlyKey()
    {
      return $this->PayCodeHourlyKey;
    }

    /**
     * @param ProjectChangeOrderPayCodeHourlyKey $PayCodeHourlyKey
     * @return ProjectChangeOrderBudget
     */
    public function setPayCodeHourlyKey($PayCodeHourlyKey)
    {
      $this->PayCodeHourlyKey = $PayCodeHourlyKey;
      return $this;
    }

    /**
     * @return ProjectChangeOrderPayCodeSalaryKey
     */
    public function getPayCodeSalaryKey()
    {
      return $this->PayCodeSalaryKey;
    }

    /**
     * @param ProjectChangeOrderPayCodeSalaryKey $PayCodeSalaryKey
     * @return ProjectChangeOrderBudget
     */
    public function setPayCodeSalaryKey($PayCodeSalaryKey)
    {
      $this->PayCodeSalaryKey = $PayCodeSalaryKey;
      return $this;
    }

    /**
     * @return ProjectPostedAmount
     */
    public function getPosted()
    {
      return $this->Posted;
    }

    /**
     * @param ProjectPostedAmount $Posted
     * @return ProjectChangeOrderBudget
     */
    public function setPosted($Posted)
    {
      $this->Posted = $Posted;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPreviousBaselineOverheadCost()
    {
      return $this->PreviousBaselineOverheadCost;
    }

    /**
     * @param MoneyAmount $PreviousBaselineOverheadCost
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousBaselineOverheadCost($PreviousBaselineOverheadCost)
    {
      $this->PreviousBaselineOverheadCost = $PreviousBaselineOverheadCost;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPreviousBaselineProfitAmount()
    {
      return $this->PreviousBaselineProfitAmount;
    }

    /**
     * @param MoneyAmount $PreviousBaselineProfitAmount
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousBaselineProfitAmount($PreviousBaselineProfitAmount)
    {
      $this->PreviousBaselineProfitAmount = $PreviousBaselineProfitAmount;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getPreviousBaselineQuantity()
    {
      return $this->PreviousBaselineQuantity;
    }

    /**
     * @param Quantity $PreviousBaselineQuantity
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousBaselineQuantity($PreviousBaselineQuantity)
    {
      $this->PreviousBaselineQuantity = $PreviousBaselineQuantity;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPreviousBaselineUnitCost()
    {
      return $this->PreviousBaselineUnitCost;
    }

    /**
     * @param MoneyAmount $PreviousBaselineUnitCost
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousBaselineUnitCost($PreviousBaselineUnitCost)
    {
      $this->PreviousBaselineUnitCost = $PreviousBaselineUnitCost;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPreviousContractBeginDate()
    {
      if ($this->PreviousContractBeginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PreviousContractBeginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PreviousContractBeginDate
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousContractBeginDate(\DateTime $PreviousContractBeginDate = null)
    {
      if ($PreviousContractBeginDate == null) {
       $this->PreviousContractBeginDate = null;
      } else {
        $this->PreviousContractBeginDate = $PreviousContractBeginDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPreviousContractEndDate()
    {
      if ($this->PreviousContractEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PreviousContractEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PreviousContractEndDate
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousContractEndDate(\DateTime $PreviousContractEndDate = null)
    {
      if ($PreviousContractEndDate == null) {
       $this->PreviousContractEndDate = null;
      } else {
        $this->PreviousContractEndDate = $PreviousContractEndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return Percent
     */
    public function getPreviousOverheadPercent()
    {
      return $this->PreviousOverheadPercent;
    }

    /**
     * @param Percent $PreviousOverheadPercent
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousOverheadPercent($PreviousOverheadPercent)
    {
      $this->PreviousOverheadPercent = $PreviousOverheadPercent;
      return $this;
    }

    /**
     * @return ProjectChangeOrderPayCodeHourlyKey
     */
    public function getPreviousPayCodeHourlyKey()
    {
      return $this->PreviousPayCodeHourlyKey;
    }

    /**
     * @param ProjectChangeOrderPayCodeHourlyKey $PreviousPayCodeHourlyKey
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousPayCodeHourlyKey($PreviousPayCodeHourlyKey)
    {
      $this->PreviousPayCodeHourlyKey = $PreviousPayCodeHourlyKey;
      return $this;
    }

    /**
     * @return ProjectChangeOrderPayCodeSalaryKey
     */
    public function getPreviousPayCodeSalaryKey()
    {
      return $this->PreviousPayCodeSalaryKey;
    }

    /**
     * @param ProjectChangeOrderPayCodeSalaryKey $PreviousPayCodeSalaryKey
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousPayCodeSalaryKey($PreviousPayCodeSalaryKey)
    {
      $this->PreviousPayCodeSalaryKey = $PreviousPayCodeSalaryKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPreviousProfitAmount()
    {
      return $this->PreviousProfitAmount;
    }

    /**
     * @param MoneyAmount $PreviousProfitAmount
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousProfitAmount($PreviousProfitAmount)
    {
      $this->PreviousProfitAmount = $PreviousProfitAmount;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getPreviousProfitPercent()
    {
      return $this->PreviousProfitPercent;
    }

    /**
     * @param Percent $PreviousProfitPercent
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousProfitPercent($PreviousProfitPercent)
    {
      $this->PreviousProfitPercent = $PreviousProfitPercent;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPreviousProjectAmount()
    {
      return $this->PreviousProjectAmount;
    }

    /**
     * @param MoneyAmount $PreviousProjectAmount
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousProjectAmount($PreviousProjectAmount)
    {
      $this->PreviousProjectAmount = $PreviousProjectAmount;
      return $this;
    }

    /**
     * @return PurchasingTaxBasis
     */
    public function getPreviousPurchaseTaxBasis()
    {
      return $this->PreviousPurchaseTaxBasis;
    }

    /**
     * @param PurchasingTaxBasis $PreviousPurchaseTaxBasis
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousPurchaseTaxBasis($PreviousPurchaseTaxBasis)
    {
      $this->PreviousPurchaseTaxBasis = $PreviousPurchaseTaxBasis;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getPreviousQuantity()
    {
      return $this->PreviousQuantity;
    }

    /**
     * @param Quantity $PreviousQuantity
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousQuantity($PreviousQuantity)
    {
      $this->PreviousQuantity = $PreviousQuantity;
      return $this;
    }

    /**
     * @return SalesTaxBasis
     */
    public function getPreviousSalesTaxBasis()
    {
      return $this->PreviousSalesTaxBasis;
    }

    /**
     * @param SalesTaxBasis $PreviousSalesTaxBasis
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousSalesTaxBasis($PreviousSalesTaxBasis)
    {
      $this->PreviousSalesTaxBasis = $PreviousSalesTaxBasis;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getPreviousSalesTaxScheduleKey()
    {
      return $this->PreviousSalesTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $PreviousSalesTaxScheduleKey
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousSalesTaxScheduleKey($PreviousSalesTaxScheduleKey)
    {
      $this->PreviousSalesTaxScheduleKey = $PreviousSalesTaxScheduleKey;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getPreviousTaxScheduleKey()
    {
      return $this->PreviousTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $PreviousTaxScheduleKey
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousTaxScheduleKey($PreviousTaxScheduleKey)
    {
      $this->PreviousTaxScheduleKey = $PreviousTaxScheduleKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPreviousTotalBillingAmount()
    {
      return $this->PreviousTotalBillingAmount;
    }

    /**
     * @param MoneyAmount $PreviousTotalBillingAmount
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousTotalBillingAmount($PreviousTotalBillingAmount)
    {
      $this->PreviousTotalBillingAmount = $PreviousTotalBillingAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPreviousTotalCost()
    {
      return $this->PreviousTotalCost;
    }

    /**
     * @param MoneyAmount $PreviousTotalCost
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousTotalCost($PreviousTotalCost)
    {
      $this->PreviousTotalCost = $PreviousTotalCost;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPreviousTotalOverheadAmount()
    {
      return $this->PreviousTotalOverheadAmount;
    }

    /**
     * @param MoneyAmount $PreviousTotalOverheadAmount
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousTotalOverheadAmount($PreviousTotalOverheadAmount)
    {
      $this->PreviousTotalOverheadAmount = $PreviousTotalOverheadAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPreviousTotalProfitAmount()
    {
      return $this->PreviousTotalProfitAmount;
    }

    /**
     * @param MoneyAmount $PreviousTotalProfitAmount
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousTotalProfitAmount($PreviousTotalProfitAmount)
    {
      $this->PreviousTotalProfitAmount = $PreviousTotalProfitAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPreviousUnitCost()
    {
      return $this->PreviousUnitCost;
    }

    /**
     * @param MoneyAmount $PreviousUnitCost
     * @return ProjectChangeOrderBudget
     */
    public function setPreviousUnitCost($PreviousUnitCost)
    {
      $this->PreviousUnitCost = $PreviousUnitCost;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getProfitAmount()
    {
      return $this->ProfitAmount;
    }

    /**
     * @param MoneyAmount $ProfitAmount
     * @return ProjectChangeOrderBudget
     */
    public function setProfitAmount($ProfitAmount)
    {
      $this->ProfitAmount = $ProfitAmount;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getProfitPercent()
    {
      return $this->ProfitPercent;
    }

    /**
     * @param Percent $ProfitPercent
     * @return ProjectChangeOrderBudget
     */
    public function setProfitPercent($ProfitPercent)
    {
      $this->ProfitPercent = $ProfitPercent;
      return $this;
    }

    /**
     * @return ProfitType
     */
    public function getProfitType()
    {
      return $this->ProfitType;
    }

    /**
     * @param ProfitType $ProfitType
     * @return ProjectChangeOrderBudget
     */
    public function setProfitType($ProfitType)
    {
      $this->ProfitType = $ProfitType;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getProjectAmount()
    {
      return $this->ProjectAmount;
    }

    /**
     * @param MoneyAmount $ProjectAmount
     * @return ProjectChangeOrderBudget
     */
    public function setProjectAmount($ProjectAmount)
    {
      $this->ProjectAmount = $ProjectAmount;
      return $this;
    }

    /**
     * @return ProjectKey
     */
    public function getProjectKey()
    {
      return $this->ProjectKey;
    }

    /**
     * @param ProjectKey $ProjectKey
     * @return ProjectChangeOrderBudget
     */
    public function setProjectKey($ProjectKey)
    {
      $this->ProjectKey = $ProjectKey;
      return $this;
    }

    /**
     * @return PurchasingTaxBasis
     */
    public function getPurchaseTaxBasis()
    {
      return $this->PurchaseTaxBasis;
    }

    /**
     * @param PurchasingTaxBasis $PurchaseTaxBasis
     * @return ProjectChangeOrderBudget
     */
    public function setPurchaseTaxBasis($PurchaseTaxBasis)
    {
      $this->PurchaseTaxBasis = $PurchaseTaxBasis;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getPurchaseTaxScheduleKey()
    {
      return $this->PurchaseTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $PurchaseTaxScheduleKey
     * @return ProjectChangeOrderBudget
     */
    public function setPurchaseTaxScheduleKey($PurchaseTaxScheduleKey)
    {
      $this->PurchaseTaxScheduleKey = $PurchaseTaxScheduleKey;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param Quantity $Quantity
     * @return ProjectChangeOrderBudget
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuoteApprovedBy()
    {
      return $this->QuoteApprovedBy;
    }

    /**
     * @param string $QuoteApprovedBy
     * @return ProjectChangeOrderBudget
     */
    public function setQuoteApprovedBy($QuoteApprovedBy)
    {
      $this->QuoteApprovedBy = $QuoteApprovedBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuotePreparedBy()
    {
      return $this->QuotePreparedBy;
    }

    /**
     * @param string $QuotePreparedBy
     * @return ProjectChangeOrderBudget
     */
    public function setQuotePreparedBy($QuotePreparedBy)
    {
      $this->QuotePreparedBy = $QuotePreparedBy;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getRevisedBudgetTotalAmount()
    {
      return $this->RevisedBudgetTotalAmount;
    }

    /**
     * @param MoneyAmount $RevisedBudgetTotalAmount
     * @return ProjectChangeOrderBudget
     */
    public function setRevisedBudgetTotalAmount($RevisedBudgetTotalAmount)
    {
      $this->RevisedBudgetTotalAmount = $RevisedBudgetTotalAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getRevisedProjectTotalAmount()
    {
      return $this->RevisedProjectTotalAmount;
    }

    /**
     * @param MoneyAmount $RevisedProjectTotalAmount
     * @return ProjectChangeOrderBudget
     */
    public function setRevisedProjectTotalAmount($RevisedProjectTotalAmount)
    {
      $this->RevisedProjectTotalAmount = $RevisedProjectTotalAmount;
      return $this;
    }

    /**
     * @return SalesTaxBasis
     */
    public function getSalesTaxBasis()
    {
      return $this->SalesTaxBasis;
    }

    /**
     * @param SalesTaxBasis $SalesTaxBasis
     * @return ProjectChangeOrderBudget
     */
    public function setSalesTaxBasis($SalesTaxBasis)
    {
      $this->SalesTaxBasis = $SalesTaxBasis;
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
     * @return ProjectChangeOrderBudget
     */
    public function setSalesTaxScheduleKey($SalesTaxScheduleKey)
    {
      $this->SalesTaxScheduleKey = $SalesTaxScheduleKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
      return $this->SequenceNumber;
    }

    /**
     * @param int $SequenceNumber
     * @return ProjectChangeOrderBudget
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalBillingAmount()
    {
      return $this->TotalBillingAmount;
    }

    /**
     * @param MoneyAmount $TotalBillingAmount
     * @return ProjectChangeOrderBudget
     */
    public function setTotalBillingAmount($TotalBillingAmount)
    {
      $this->TotalBillingAmount = $TotalBillingAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalCost()
    {
      return $this->TotalCost;
    }

    /**
     * @param MoneyAmount $TotalCost
     * @return ProjectChangeOrderBudget
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalOverheadAmount()
    {
      return $this->TotalOverheadAmount;
    }

    /**
     * @param MoneyAmount $TotalOverheadAmount
     * @return ProjectChangeOrderBudget
     */
    public function setTotalOverheadAmount($TotalOverheadAmount)
    {
      $this->TotalOverheadAmount = $TotalOverheadAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalProfitAmount()
    {
      return $this->TotalProfitAmount;
    }

    /**
     * @param MoneyAmount $TotalProfitAmount
     * @return ProjectChangeOrderBudget
     */
    public function setTotalProfitAmount($TotalProfitAmount)
    {
      $this->TotalProfitAmount = $TotalProfitAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getUnitCost()
    {
      return $this->UnitCost;
    }

    /**
     * @param MoneyAmount $UnitCost
     * @return ProjectChangeOrderBudget
     */
    public function setUnitCost($UnitCost)
    {
      $this->UnitCost = $UnitCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getUofM()
    {
      return $this->UofM;
    }

    /**
     * @param string $UofM
     * @return ProjectChangeOrderBudget
     */
    public function setUofM($UofM)
    {
      $this->UofM = $UofM;
      return $this;
    }

    /**
     * @return UofMScheduleKey
     */
    public function getUofMScheduleKey()
    {
      return $this->UofMScheduleKey;
    }

    /**
     * @param UofMScheduleKey $UofMScheduleKey
     * @return ProjectChangeOrderBudget
     */
    public function setUofMScheduleKey($UofMScheduleKey)
    {
      $this->UofMScheduleKey = $UofMScheduleKey;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getVarianceMarkupPercent()
    {
      return $this->VarianceMarkupPercent;
    }

    /**
     * @param Percent $VarianceMarkupPercent
     * @return ProjectChangeOrderBudget
     */
    public function setVarianceMarkupPercent($VarianceMarkupPercent)
    {
      $this->VarianceMarkupPercent = $VarianceMarkupPercent;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getVarianceOverheadAmount()
    {
      return $this->VarianceOverheadAmount;
    }

    /**
     * @param MoneyAmount $VarianceOverheadAmount
     * @return ProjectChangeOrderBudget
     */
    public function setVarianceOverheadAmount($VarianceOverheadAmount)
    {
      $this->VarianceOverheadAmount = $VarianceOverheadAmount;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getVarianceOverheadPercent()
    {
      return $this->VarianceOverheadPercent;
    }

    /**
     * @param Percent $VarianceOverheadPercent
     * @return ProjectChangeOrderBudget
     */
    public function setVarianceOverheadPercent($VarianceOverheadPercent)
    {
      $this->VarianceOverheadPercent = $VarianceOverheadPercent;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getVarianceProfitAmount()
    {
      return $this->VarianceProfitAmount;
    }

    /**
     * @param MoneyAmount $VarianceProfitAmount
     * @return ProjectChangeOrderBudget
     */
    public function setVarianceProfitAmount($VarianceProfitAmount)
    {
      $this->VarianceProfitAmount = $VarianceProfitAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getVarianceProjectAmount()
    {
      return $this->VarianceProjectAmount;
    }

    /**
     * @param MoneyAmount $VarianceProjectAmount
     * @return ProjectChangeOrderBudget
     */
    public function setVarianceProjectAmount($VarianceProjectAmount)
    {
      $this->VarianceProjectAmount = $VarianceProjectAmount;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getVarianceQuantity()
    {
      return $this->VarianceQuantity;
    }

    /**
     * @param Quantity $VarianceQuantity
     * @return ProjectChangeOrderBudget
     */
    public function setVarianceQuantity($VarianceQuantity)
    {
      $this->VarianceQuantity = $VarianceQuantity;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getVarianceTotalBillingAmount()
    {
      return $this->VarianceTotalBillingAmount;
    }

    /**
     * @param MoneyAmount $VarianceTotalBillingAmount
     * @return ProjectChangeOrderBudget
     */
    public function setVarianceTotalBillingAmount($VarianceTotalBillingAmount)
    {
      $this->VarianceTotalBillingAmount = $VarianceTotalBillingAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getVarianceTotalCost()
    {
      return $this->VarianceTotalCost;
    }

    /**
     * @param MoneyAmount $VarianceTotalCost
     * @return ProjectChangeOrderBudget
     */
    public function setVarianceTotalCost($VarianceTotalCost)
    {
      $this->VarianceTotalCost = $VarianceTotalCost;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getVarianceTotalProfitAmount()
    {
      return $this->VarianceTotalProfitAmount;
    }

    /**
     * @param MoneyAmount $VarianceTotalProfitAmount
     * @return ProjectChangeOrderBudget
     */
    public function setVarianceTotalProfitAmount($VarianceTotalProfitAmount)
    {
      $this->VarianceTotalProfitAmount = $VarianceTotalProfitAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getVarianceUnitCost()
    {
      return $this->VarianceUnitCost;
    }

    /**
     * @param MoneyAmount $VarianceUnitCost
     * @return ProjectChangeOrderBudget
     */
    public function setVarianceUnitCost($VarianceUnitCost)
    {
      $this->VarianceUnitCost = $VarianceUnitCost;
      return $this;
    }

}
