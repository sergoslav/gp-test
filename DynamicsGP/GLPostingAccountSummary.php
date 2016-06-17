<?php

class GLPostingAccountSummary extends GLAccountSummaryBase
{

    /**
     * @var boolean $AllowAccountEntry
     */
    protected $AllowAccountEntry = null;

    /**
     * @var GLAccountCategoryKey $GLAccountCategoryKey
     */
    protected $GLAccountCategoryKey = null;

    /**
     * @var PostingType $PostingType
     */
    protected $PostingType = null;

    /**
     * @var TypicalBalance $TypicalBalance
     */
    protected $TypicalBalance = null;

    
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
     * @return GLPostingAccountSummary
     */
    public function setAllowAccountEntry($AllowAccountEntry)
    {
      $this->AllowAccountEntry = $AllowAccountEntry;
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
     * @return GLPostingAccountSummary
     */
    public function setGLAccountCategoryKey($GLAccountCategoryKey)
    {
      $this->GLAccountCategoryKey = $GLAccountCategoryKey;
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
     * @return GLPostingAccountSummary
     */
    public function setPostingType($PostingType)
    {
      $this->PostingType = $PostingType;
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
     * @return GLPostingAccountSummary
     */
    public function setTypicalBalance($TypicalBalance)
    {
      $this->TypicalBalance = $TypicalBalance;
      return $this;
    }

}
