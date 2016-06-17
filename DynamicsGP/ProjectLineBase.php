<?php

class ProjectLineBase extends BusinessObject
{

    /**
     * @var MoneyAmount $AccruedRevenue
     */
    protected $AccruedRevenue = null;

    /**
     * @var GLAccountNumberKey $ContraGLAccountKey
     */
    protected $ContraGLAccountKey = null;

    /**
     * @var CostCategoryKey $CostCategoryKey
     */
    protected $CostCategoryKey = null;

    /**
     * @var GLAccountNumberKey $CostOfGoodsSoldGLAccountKey
     */
    protected $CostOfGoodsSoldGLAccountKey = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var MoneyAmount $ExtendedCost
     */
    protected $ExtendedCost = null;

    /**
     * @var Percent $MarkupPercent
     */
    protected $MarkupPercent = null;

    /**
     * @var int $OriginalDocumentSequenceNumber
     */
    protected $OriginalDocumentSequenceNumber = null;

    /**
     * @var MoneyAmount $OverheadAmount
     */
    protected $OverheadAmount = null;

    /**
     * @var GLAccountNumberKey $OverheadGLAccountKey
     */
    protected $OverheadGLAccountKey = null;

    /**
     * @var Percent $OverheadPercent
     */
    protected $OverheadPercent = null;

    /**
     * @var MoneyAmount $ProfitAmount
     */
    protected $ProfitAmount = null;

    /**
     * @var ProfitType $ProfitType
     */
    protected $ProfitType = null;

    /**
     * @var ProjectContractKey $ProjectContractKey
     */
    protected $ProjectContractKey = null;

    /**
     * @var ProjectKey $ProjectKey
     */
    protected $ProjectKey = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var int $ReferenceDocumentSequenceNumber
     */
    protected $ReferenceDocumentSequenceNumber = null;

    /**
     * @var MoneyAmount $RoundAmount
     */
    protected $RoundAmount = null;

    /**
     * @var GLAccountNumberKey $RoundingGLAccountKey
     */
    protected $RoundingGLAccountKey = null;

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
     * @var GLAccountNumberKey $UnbilledAccountReceivableGLAccountKey
     */
    protected $UnbilledAccountReceivableGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $UnbilledProjectRevenueGLAccountKey
     */
    protected $UnbilledProjectRevenueGLAccountKey = null;

    /**
     * @var MoneyAmount $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var string $UofM
     */
    protected $UofM = null;

    /**
     * @var GLAccountNumberKey $WorkInProgressGLAccountKey
     */
    protected $WorkInProgressGLAccountKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getAccruedRevenue()
    {
      return $this->AccruedRevenue;
    }

    /**
     * @param MoneyAmount $AccruedRevenue
     * @return ProjectLineBase
     */
    public function setAccruedRevenue($AccruedRevenue)
    {
      $this->AccruedRevenue = $AccruedRevenue;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getContraGLAccountKey()
    {
      return $this->ContraGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $ContraGLAccountKey
     * @return ProjectLineBase
     */
    public function setContraGLAccountKey($ContraGLAccountKey)
    {
      $this->ContraGLAccountKey = $ContraGLAccountKey;
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
     * @return ProjectLineBase
     */
    public function setCostCategoryKey($CostCategoryKey)
    {
      $this->CostCategoryKey = $CostCategoryKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getCostOfGoodsSoldGLAccountKey()
    {
      return $this->CostOfGoodsSoldGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $CostOfGoodsSoldGLAccountKey
     * @return ProjectLineBase
     */
    public function setCostOfGoodsSoldGLAccountKey($CostOfGoodsSoldGLAccountKey)
    {
      $this->CostOfGoodsSoldGLAccountKey = $CostOfGoodsSoldGLAccountKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return ProjectLineBase
     */
    public function setDate(\DateTime $Date = null)
    {
      if ($Date == null) {
       $this->Date = null;
      } else {
        $this->Date = $Date->format(\DateTime::ATOM);
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
     * @return ProjectLineBase
     */
    public function setExtendedCost($ExtendedCost)
    {
      $this->ExtendedCost = $ExtendedCost;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getMarkupPercent()
    {
      return $this->MarkupPercent;
    }

    /**
     * @param Percent $MarkupPercent
     * @return ProjectLineBase
     */
    public function setMarkupPercent($MarkupPercent)
    {
      $this->MarkupPercent = $MarkupPercent;
      return $this;
    }

    /**
     * @return int
     */
    public function getOriginalDocumentSequenceNumber()
    {
      return $this->OriginalDocumentSequenceNumber;
    }

    /**
     * @param int $OriginalDocumentSequenceNumber
     * @return ProjectLineBase
     */
    public function setOriginalDocumentSequenceNumber($OriginalDocumentSequenceNumber)
    {
      $this->OriginalDocumentSequenceNumber = $OriginalDocumentSequenceNumber;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getOverheadAmount()
    {
      return $this->OverheadAmount;
    }

    /**
     * @param MoneyAmount $OverheadAmount
     * @return ProjectLineBase
     */
    public function setOverheadAmount($OverheadAmount)
    {
      $this->OverheadAmount = $OverheadAmount;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getOverheadGLAccountKey()
    {
      return $this->OverheadGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $OverheadGLAccountKey
     * @return ProjectLineBase
     */
    public function setOverheadGLAccountKey($OverheadGLAccountKey)
    {
      $this->OverheadGLAccountKey = $OverheadGLAccountKey;
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
     * @return ProjectLineBase
     */
    public function setOverheadPercent($OverheadPercent)
    {
      $this->OverheadPercent = $OverheadPercent;
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
     * @return ProjectLineBase
     */
    public function setProfitAmount($ProfitAmount)
    {
      $this->ProfitAmount = $ProfitAmount;
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
     * @return ProjectLineBase
     */
    public function setProfitType($ProfitType)
    {
      $this->ProfitType = $ProfitType;
      return $this;
    }

    /**
     * @return ProjectContractKey
     */
    public function getProjectContractKey()
    {
      return $this->ProjectContractKey;
    }

    /**
     * @param ProjectContractKey $ProjectContractKey
     * @return ProjectLineBase
     */
    public function setProjectContractKey($ProjectContractKey)
    {
      $this->ProjectContractKey = $ProjectContractKey;
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
     * @return ProjectLineBase
     */
    public function setProjectKey($ProjectKey)
    {
      $this->ProjectKey = $ProjectKey;
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
     * @return ProjectLineBase
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getReferenceDocumentSequenceNumber()
    {
      return $this->ReferenceDocumentSequenceNumber;
    }

    /**
     * @param int $ReferenceDocumentSequenceNumber
     * @return ProjectLineBase
     */
    public function setReferenceDocumentSequenceNumber($ReferenceDocumentSequenceNumber)
    {
      $this->ReferenceDocumentSequenceNumber = $ReferenceDocumentSequenceNumber;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getRoundAmount()
    {
      return $this->RoundAmount;
    }

    /**
     * @param MoneyAmount $RoundAmount
     * @return ProjectLineBase
     */
    public function setRoundAmount($RoundAmount)
    {
      $this->RoundAmount = $RoundAmount;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getRoundingGLAccountKey()
    {
      return $this->RoundingGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $RoundingGLAccountKey
     * @return ProjectLineBase
     */
    public function setRoundingGLAccountKey($RoundingGLAccountKey)
    {
      $this->RoundingGLAccountKey = $RoundingGLAccountKey;
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
     * @return ProjectLineBase
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
     * @return ProjectLineBase
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
     * @return ProjectLineBase
     */
    public function setTotalProfitAmount($TotalProfitAmount)
    {
      $this->TotalProfitAmount = $TotalProfitAmount;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getUnbilledAccountReceivableGLAccountKey()
    {
      return $this->UnbilledAccountReceivableGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $UnbilledAccountReceivableGLAccountKey
     * @return ProjectLineBase
     */
    public function setUnbilledAccountReceivableGLAccountKey($UnbilledAccountReceivableGLAccountKey)
    {
      $this->UnbilledAccountReceivableGLAccountKey = $UnbilledAccountReceivableGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getUnbilledProjectRevenueGLAccountKey()
    {
      return $this->UnbilledProjectRevenueGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $UnbilledProjectRevenueGLAccountKey
     * @return ProjectLineBase
     */
    public function setUnbilledProjectRevenueGLAccountKey($UnbilledProjectRevenueGLAccountKey)
    {
      $this->UnbilledProjectRevenueGLAccountKey = $UnbilledProjectRevenueGLAccountKey;
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
     * @return ProjectLineBase
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
     * @return ProjectLineBase
     */
    public function setUofM($UofM)
    {
      $this->UofM = $UofM;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getWorkInProgressGLAccountKey()
    {
      return $this->WorkInProgressGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $WorkInProgressGLAccountKey
     * @return ProjectLineBase
     */
    public function setWorkInProgressGLAccountKey($WorkInProgressGLAccountKey)
    {
      $this->WorkInProgressGLAccountKey = $WorkInProgressGLAccountKey;
      return $this;
    }

}
