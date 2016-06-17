<?php

class CorporateAccount extends BusinessObject
{

    /**
     * @var boolean $AllowReceiptsForMembers
     */
    protected $AllowReceiptsForMembers = null;

    /**
     * @var boolean $ApplyHoldActiveStatusOfParentAcrossCorporateAccount
     */
    protected $ApplyHoldActiveStatusOfParentAcrossCorporateAccount = null;

    /**
     * @var boolean $BaseCreditCheckOnConsolidatedCorporateAccount
     */
    protected $BaseCreditCheckOnConsolidatedCorporateAccount = null;

    /**
     * @var boolean $BaseFinanceChargeOnConsolidatedCorporateAccount
     */
    protected $BaseFinanceChargeOnConsolidatedCorporateAccount = null;

    /**
     * @var boolean $DefaultNationalAccountVendorForMemberRefunds
     */
    protected $DefaultNationalAccountVendorForMemberRefunds = null;

    /**
     * @var CustomerKey $Key
     */
    protected $Key = null;

    /**
     * @var ArrayOfCorporateAccountMember $Members
     */
    protected $Members = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getAllowReceiptsForMembers()
    {
      return $this->AllowReceiptsForMembers;
    }

    /**
     * @param boolean $AllowReceiptsForMembers
     * @return CorporateAccount
     */
    public function setAllowReceiptsForMembers($AllowReceiptsForMembers)
    {
      $this->AllowReceiptsForMembers = $AllowReceiptsForMembers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApplyHoldActiveStatusOfParentAcrossCorporateAccount()
    {
      return $this->ApplyHoldActiveStatusOfParentAcrossCorporateAccount;
    }

    /**
     * @param boolean $ApplyHoldActiveStatusOfParentAcrossCorporateAccount
     * @return CorporateAccount
     */
    public function setApplyHoldActiveStatusOfParentAcrossCorporateAccount($ApplyHoldActiveStatusOfParentAcrossCorporateAccount)
    {
      $this->ApplyHoldActiveStatusOfParentAcrossCorporateAccount = $ApplyHoldActiveStatusOfParentAcrossCorporateAccount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBaseCreditCheckOnConsolidatedCorporateAccount()
    {
      return $this->BaseCreditCheckOnConsolidatedCorporateAccount;
    }

    /**
     * @param boolean $BaseCreditCheckOnConsolidatedCorporateAccount
     * @return CorporateAccount
     */
    public function setBaseCreditCheckOnConsolidatedCorporateAccount($BaseCreditCheckOnConsolidatedCorporateAccount)
    {
      $this->BaseCreditCheckOnConsolidatedCorporateAccount = $BaseCreditCheckOnConsolidatedCorporateAccount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBaseFinanceChargeOnConsolidatedCorporateAccount()
    {
      return $this->BaseFinanceChargeOnConsolidatedCorporateAccount;
    }

    /**
     * @param boolean $BaseFinanceChargeOnConsolidatedCorporateAccount
     * @return CorporateAccount
     */
    public function setBaseFinanceChargeOnConsolidatedCorporateAccount($BaseFinanceChargeOnConsolidatedCorporateAccount)
    {
      $this->BaseFinanceChargeOnConsolidatedCorporateAccount = $BaseFinanceChargeOnConsolidatedCorporateAccount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultNationalAccountVendorForMemberRefunds()
    {
      return $this->DefaultNationalAccountVendorForMemberRefunds;
    }

    /**
     * @param boolean $DefaultNationalAccountVendorForMemberRefunds
     * @return CorporateAccount
     */
    public function setDefaultNationalAccountVendorForMemberRefunds($DefaultNationalAccountVendorForMemberRefunds)
    {
      $this->DefaultNationalAccountVendorForMemberRefunds = $DefaultNationalAccountVendorForMemberRefunds;
      return $this;
    }

    /**
     * @return CustomerKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param CustomerKey $Key
     * @return CorporateAccount
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ArrayOfCorporateAccountMember
     */
    public function getMembers()
    {
      return $this->Members;
    }

    /**
     * @param ArrayOfCorporateAccountMember $Members
     * @return CorporateAccount
     */
    public function setMembers($Members)
    {
      $this->Members = $Members;
      return $this;
    }

}
