<?php

class PaymentCardType extends BusinessObject
{

    /**
     * @var boolean $AcceptedFromCustomers
     */
    protected $AcceptedFromCustomers = null;

    /**
     * @var BankAccountKey $CompanyCardBankAccountKey
     */
    protected $CompanyCardBankAccountKey = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var BankAccountKey $CustomerCardBankAccountKey
     */
    protected $CustomerCardBankAccountKey = null;

    /**
     * @var GLAccountNumberKey $GLAccountKey
     */
    protected $GLAccountKey = null;

    /**
     * @var PaymentCardTypeKey $Key
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
     * @var PayableCardType $PayableCardType
     */
    protected $PayableCardType = null;

    /**
     * @var ReceivableCardType $ReceivableCardType
     */
    protected $ReceivableCardType = null;

    /**
     * @var boolean $UsedByCompany
     */
    protected $UsedByCompany = null;

    /**
     * @var VendorKey $VendorKey
     */
    protected $VendorKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getAcceptedFromCustomers()
    {
      return $this->AcceptedFromCustomers;
    }

    /**
     * @param boolean $AcceptedFromCustomers
     * @return PaymentCardType
     */
    public function setAcceptedFromCustomers($AcceptedFromCustomers)
    {
      $this->AcceptedFromCustomers = $AcceptedFromCustomers;
      return $this;
    }

    /**
     * @return BankAccountKey
     */
    public function getCompanyCardBankAccountKey()
    {
      return $this->CompanyCardBankAccountKey;
    }

    /**
     * @param BankAccountKey $CompanyCardBankAccountKey
     * @return PaymentCardType
     */
    public function setCompanyCardBankAccountKey($CompanyCardBankAccountKey)
    {
      $this->CompanyCardBankAccountKey = $CompanyCardBankAccountKey;
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
     * @return PaymentCardType
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
     * @return BankAccountKey
     */
    public function getCustomerCardBankAccountKey()
    {
      return $this->CustomerCardBankAccountKey;
    }

    /**
     * @param BankAccountKey $CustomerCardBankAccountKey
     * @return PaymentCardType
     */
    public function setCustomerCardBankAccountKey($CustomerCardBankAccountKey)
    {
      $this->CustomerCardBankAccountKey = $CustomerCardBankAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getGLAccountKey()
    {
      return $this->GLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $GLAccountKey
     * @return PaymentCardType
     */
    public function setGLAccountKey($GLAccountKey)
    {
      $this->GLAccountKey = $GLAccountKey;
      return $this;
    }

    /**
     * @return PaymentCardTypeKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PaymentCardTypeKey $Key
     * @return PaymentCardType
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
     * @return PaymentCardType
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
     * @return PaymentCardType
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
     * @return PayableCardType
     */
    public function getPayableCardType()
    {
      return $this->PayableCardType;
    }

    /**
     * @param PayableCardType $PayableCardType
     * @return PaymentCardType
     */
    public function setPayableCardType($PayableCardType)
    {
      $this->PayableCardType = $PayableCardType;
      return $this;
    }

    /**
     * @return ReceivableCardType
     */
    public function getReceivableCardType()
    {
      return $this->ReceivableCardType;
    }

    /**
     * @param ReceivableCardType $ReceivableCardType
     * @return PaymentCardType
     */
    public function setReceivableCardType($ReceivableCardType)
    {
      $this->ReceivableCardType = $ReceivableCardType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUsedByCompany()
    {
      return $this->UsedByCompany;
    }

    /**
     * @param boolean $UsedByCompany
     * @return PaymentCardType
     */
    public function setUsedByCompany($UsedByCompany)
    {
      $this->UsedByCompany = $UsedByCompany;
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
     * @return PaymentCardType
     */
    public function setVendorKey($VendorKey)
    {
      $this->VendorKey = $VendorKey;
      return $this;
    }

}
