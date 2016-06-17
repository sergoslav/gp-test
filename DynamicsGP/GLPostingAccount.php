<?php

class GLPostingAccount extends GLFinancialAccount
{

    /**
     * @var boolean $AllowAccountEntry
     */
    protected $AllowAccountEntry = null;

    /**
     * @var ArrayOfGLAccountCurrency $Currencies
     */
    protected $Currencies = null;

    /**
     * @var GLAccountCategoryKey $GLAccountCategoryKey
     */
    protected $GLAccountCategoryKey = null;

    /**
     * @var boolean $IsRevalued
     */
    protected $IsRevalued = null;

    /**
     * @var PostRevaluationResultsTo $PostRevaluationResultsTo
     */
    protected $PostRevaluationResultsTo = null;

    /**
     * @var PostingType $PostingType
     */
    protected $PostingType = null;

    /**
     * @var RevaluationMethod $RevaluationMethod
     */
    protected $RevaluationMethod = null;

    /**
     * @var TypicalBalance $TypicalBalance
     */
    protected $TypicalBalance = null;

    /**
     * @var string $UserDefined1
     */
    protected $UserDefined1 = null;

    /**
     * @var string $UserDefined2
     */
    protected $UserDefined2 = null;

    /**
     * @var string $UserDefined3
     */
    protected $UserDefined3 = null;

    /**
     * @var string $UserDefined4
     */
    protected $UserDefined4 = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getAllowAccountEntry()
    {
      return $this->AllowAccountEntry;
    }

    /**
     * @param boolean $AllowAccountEntry
     * @return GLPostingAccount
     */
    public function setAllowAccountEntry($AllowAccountEntry)
    {
      $this->AllowAccountEntry = $AllowAccountEntry;
      return $this;
    }

    /**
     * @return ArrayOfGLAccountCurrency
     */
    public function getCurrencies()
    {
      return $this->Currencies;
    }

    /**
     * @param ArrayOfGLAccountCurrency $Currencies
     * @return GLPostingAccount
     */
    public function setCurrencies($Currencies)
    {
      $this->Currencies = $Currencies;
      return $this;
    }

    /**
     * @return GLAccountCategoryKey
     */
    public function getGLAccountCategoryKey()
    {
      return $this->GLAccountCategoryKey;
    }

    /**
     * @param GLAccountCategoryKey $GLAccountCategoryKey
     * @return GLPostingAccount
     */
    public function setGLAccountCategoryKey($GLAccountCategoryKey)
    {
      $this->GLAccountCategoryKey = $GLAccountCategoryKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRevalued()
    {
      return $this->IsRevalued;
    }

    /**
     * @param boolean $IsRevalued
     * @return GLPostingAccount
     */
    public function setIsRevalued($IsRevalued)
    {
      $this->IsRevalued = $IsRevalued;
      return $this;
    }

    /**
     * @return PostRevaluationResultsTo
     */
    public function getPostRevaluationResultsTo()
    {
      return $this->PostRevaluationResultsTo;
    }

    /**
     * @param PostRevaluationResultsTo $PostRevaluationResultsTo
     * @return GLPostingAccount
     */
    public function setPostRevaluationResultsTo($PostRevaluationResultsTo)
    {
      $this->PostRevaluationResultsTo = $PostRevaluationResultsTo;
      return $this;
    }

    /**
     * @return PostingType
     */
    public function getPostingType()
    {
      return $this->PostingType;
    }

    /**
     * @param PostingType $PostingType
     * @return GLPostingAccount
     */
    public function setPostingType($PostingType)
    {
      $this->PostingType = $PostingType;
      return $this;
    }

    /**
     * @return RevaluationMethod
     */
    public function getRevaluationMethod()
    {
      return $this->RevaluationMethod;
    }

    /**
     * @param RevaluationMethod $RevaluationMethod
     * @return GLPostingAccount
     */
    public function setRevaluationMethod($RevaluationMethod)
    {
      $this->RevaluationMethod = $RevaluationMethod;
      return $this;
    }

    /**
     * @return TypicalBalance
     */
    public function getTypicalBalance()
    {
      return $this->TypicalBalance;
    }

    /**
     * @param TypicalBalance $TypicalBalance
     * @return GLPostingAccount
     */
    public function setTypicalBalance($TypicalBalance)
    {
      $this->TypicalBalance = $TypicalBalance;
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
     * @return GLPostingAccount
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
     * @return GLPostingAccount
     */
    public function setUserDefined2($UserDefined2)
    {
      $this->UserDefined2 = $UserDefined2;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefined3()
    {
      return $this->UserDefined3;
    }

    /**
     * @param string $UserDefined3
     * @return GLPostingAccount
     */
    public function setUserDefined3($UserDefined3)
    {
      $this->UserDefined3 = $UserDefined3;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefined4()
    {
      return $this->UserDefined4;
    }

    /**
     * @param string $UserDefined4
     * @return GLPostingAccount
     */
    public function setUserDefined4($UserDefined4)
    {
      $this->UserDefined4 = $UserDefined4;
      return $this;
    }

}
