<?php

class ProjectEmployeeExpenseLine extends ProjectLineBase
{

    /**
     * @var MoneyAmount $BackoutTaxAmount
     */
    protected $BackoutTaxAmount = null;

    /**
     * @var ProjectBilling $Billing
     */
    protected $Billing = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ExpenseType $ExpenseType
     */
    protected $ExpenseType = null;

    /**
     * @var ProjectEmployeeExpenseLineKey $Key
     */
    protected $Key = null;

    /**
     * @var PaymentMethod $PaymentMethodType
     */
    protected $PaymentMethodType = null;

    /**
     * @var MoneyAmount $ReimbursableAmount
     */
    protected $ReimbursableAmount = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var ProjectTaxBasis $TaxBasis
     */
    protected $TaxBasis = null;

    /**
     * @var TaxScheduleKey $TaxScheduleKey
     */
    protected $TaxScheduleKey = null;

    /**
     * @var ArrayOfProjectEmployeeExpenseLineTax $Taxes
     */
    protected $Taxes = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getBackoutTaxAmount()
    {
      return $this->BackoutTaxAmount;
    }

    /**
     * @param MoneyAmount $BackoutTaxAmount
     * @return ProjectEmployeeExpenseLine
     */
    public function setBackoutTaxAmount($BackoutTaxAmount)
    {
      $this->BackoutTaxAmount = $BackoutTaxAmount;
      return $this;
    }

    /**
     * @return ProjectBilling
     */
    public function getBilling()
    {
      return $this->Billing;
    }

    /**
     * @param ProjectBilling $Billing
     * @return ProjectEmployeeExpenseLine
     */
    public function setBilling($Billing)
    {
      $this->Billing = $Billing;
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
     * @return ProjectEmployeeExpenseLine
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ExpenseType
     */
    public function getExpenseType()
    {
      return $this->ExpenseType;
    }

    /**
     * @param ExpenseType $ExpenseType
     * @return ProjectEmployeeExpenseLine
     */
    public function setExpenseType($ExpenseType)
    {
      $this->ExpenseType = $ExpenseType;
      return $this;
    }

    /**
     * @return ProjectEmployeeExpenseLineKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectEmployeeExpenseLineKey $Key
     * @return ProjectEmployeeExpenseLine
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return PaymentMethod
     */
    public function getPaymentMethodType()
    {
      return $this->PaymentMethodType;
    }

    /**
     * @param PaymentMethod $PaymentMethodType
     * @return ProjectEmployeeExpenseLine
     */
    public function setPaymentMethodType($PaymentMethodType)
    {
      $this->PaymentMethodType = $PaymentMethodType;
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
     * @return ProjectEmployeeExpenseLine
     */
    public function setReimbursableAmount($ReimbursableAmount)
    {
      $this->ReimbursableAmount = $ReimbursableAmount;
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
     * @return ProjectEmployeeExpenseLine
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return ProjectTaxBasis
     */
    public function getTaxBasis()
    {
      return $this->TaxBasis;
    }

    /**
     * @param ProjectTaxBasis $TaxBasis
     * @return ProjectEmployeeExpenseLine
     */
    public function setTaxBasis($TaxBasis)
    {
      $this->TaxBasis = $TaxBasis;
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
     * @return ProjectEmployeeExpenseLine
     */
    public function setTaxScheduleKey($TaxScheduleKey)
    {
      $this->TaxScheduleKey = $TaxScheduleKey;
      return $this;
    }

    /**
     * @return ArrayOfProjectEmployeeExpenseLineTax
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfProjectEmployeeExpenseLineTax $Taxes
     * @return ProjectEmployeeExpenseLine
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

}
