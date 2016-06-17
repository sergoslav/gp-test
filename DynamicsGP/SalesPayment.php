<?php

class SalesPayment extends BusinessObject
{

    /**
     * @var string $AuditTrailCode
     */
    protected $AuditTrailCode = null;

    /**
     * @var string $AuthorizationCode
     */
    protected $AuthorizationCode = null;

    /**
     * @var BankAccountKey $BankAccountKey
     */
    protected $BankAccountKey = null;

    /**
     * @var string $CheckNumber
     */
    protected $CheckNumber = null;

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var boolean $DeleteOnUpdate
     */
    protected $DeleteOnUpdate = null;

    /**
     * @var \DateTime $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var boolean $IsProcessElectronically
     */
    protected $IsProcessElectronically = null;

    /**
     * @var SalesPaymentKey $Key
     */
    protected $Key = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var MoneyAmount $PaymentAmount
     */
    protected $PaymentAmount = null;

    /**
     * @var string $PaymentCardNumber
     */
    protected $PaymentCardNumber = null;

    /**
     * @var PaymentCardTypeKey $PaymentCardTypeKey
     */
    protected $PaymentCardTypeKey = null;

    /**
     * @var SalesPaymentType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAuditTrailCode()
    {
      return $this->AuditTrailCode;
    }

    /**
     * @param string $AuditTrailCode
     * @return SalesPayment
     */
    public function setAuditTrailCode($AuditTrailCode)
    {
      $this->AuditTrailCode = $AuditTrailCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizationCode()
    {
      return $this->AuthorizationCode;
    }

    /**
     * @param string $AuthorizationCode
     * @return SalesPayment
     */
    public function setAuthorizationCode($AuthorizationCode)
    {
      $this->AuthorizationCode = $AuthorizationCode;
      return $this;
    }

    /**
     * @return BankAccountKey
     */
    public function getBankAccountKey()
    {
      return $this->BankAccountKey;
    }

    /**
     * @param BankAccountKey $BankAccountKey
     * @return SalesPayment
     */
    public function setBankAccountKey($BankAccountKey)
    {
      $this->BankAccountKey = $BankAccountKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckNumber()
    {
      return $this->CheckNumber;
    }

    /**
     * @param string $CheckNumber
     * @return SalesPayment
     */
    public function setCheckNumber($CheckNumber)
    {
      $this->CheckNumber = $CheckNumber;
      return $this;
    }

    /**
     * @return CurrencyKey
     */
    public function getCurrencyKey()
    {
      return $this->CurrencyKey;
    }

    /**
     * @param CurrencyKey $CurrencyKey
     * @return SalesPayment
     */
    public function setCurrencyKey($CurrencyKey)
    {
      $this->CurrencyKey = $CurrencyKey;
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
     * @return SalesPayment
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
     * @return boolean
     */
    public function getDeleteOnUpdate()
    {
      return $this->DeleteOnUpdate;
    }

    /**
     * @param boolean $DeleteOnUpdate
     * @return SalesPayment
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
      if ($this->ExpirationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpirationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpirationDate
     * @return SalesPayment
     */
    public function setExpirationDate(\DateTime $ExpirationDate = null)
    {
      if ($ExpirationDate == null) {
       $this->ExpirationDate = null;
      } else {
        $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProcessElectronically()
    {
      return $this->IsProcessElectronically;
    }

    /**
     * @param boolean $IsProcessElectronically
     * @return SalesPayment
     */
    public function setIsProcessElectronically($IsProcessElectronically)
    {
      $this->IsProcessElectronically = $IsProcessElectronically;
      return $this;
    }

    /**
     * @return SalesPaymentKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesPaymentKey $Key
     * @return SalesPayment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return SalesPayment
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPaymentAmount()
    {
      return $this->PaymentAmount;
    }

    /**
     * @param MoneyAmount $PaymentAmount
     * @return SalesPayment
     */
    public function setPaymentAmount($PaymentAmount)
    {
      $this->PaymentAmount = $PaymentAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentCardNumber()
    {
      return $this->PaymentCardNumber;
    }

    /**
     * @param string $PaymentCardNumber
     * @return SalesPayment
     */
    public function setPaymentCardNumber($PaymentCardNumber)
    {
      $this->PaymentCardNumber = $PaymentCardNumber;
      return $this;
    }

    /**
     * @return PaymentCardTypeKey
     */
    public function getPaymentCardTypeKey()
    {
      return $this->PaymentCardTypeKey;
    }

    /**
     * @param PaymentCardTypeKey $PaymentCardTypeKey
     * @return SalesPayment
     */
    public function setPaymentCardTypeKey($PaymentCardTypeKey)
    {
      $this->PaymentCardTypeKey = $PaymentCardTypeKey;
      return $this;
    }

    /**
     * @return SalesPaymentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param SalesPaymentType $Type
     * @return SalesPayment
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
