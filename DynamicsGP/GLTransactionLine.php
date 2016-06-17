<?php

class GLTransactionLine extends BusinessObject
{

    /**
     * @var Amount $CreditAmount
     */
    protected $CreditAmount = null;

    /**
     * @var Amount $DebitAmount
     */
    protected $DebitAmount = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var \DateTime $ExchangeDate
     */
    protected $ExchangeDate = null;

    /**
     * @var float $ExchangeRate
     */
    protected $ExchangeRate = null;

    /**
     * @var GLAccountNumberKey $GLAccountKey
     */
    protected $GLAccountKey = null;

    /**
     * @var CompanyKey $IntercompanyKey
     */
    protected $IntercompanyKey = null;

    /**
     * @var GLTransactionLineKey $Key
     */
    protected $Key = null;

    /**
     * @var GLOriginatingDocumentLine $OriginatingDocument
     */
    protected $OriginatingDocument = null;

    /**
     * @var GLTax $Tax
     */
    protected $Tax = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Amount
     */
    public function getCreditAmount()
    {
      return $this->CreditAmount;
    }

    /**
     * @param Amount $CreditAmount
     * @return GLTransactionLine
     */
    public function setCreditAmount($CreditAmount)
    {
      $this->CreditAmount = $CreditAmount;
      return $this;
    }

    /**
     * @return Amount
     */
    public function getDebitAmount()
    {
      return $this->DebitAmount;
    }

    /**
     * @param Amount $DebitAmount
     * @return GLTransactionLine
     */
    public function setDebitAmount($DebitAmount)
    {
      $this->DebitAmount = $DebitAmount;
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
     * @return GLTransactionLine
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExchangeDate()
    {
      if ($this->ExchangeDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExchangeDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExchangeDate
     * @return GLTransactionLine
     */
    public function setExchangeDate(\DateTime $ExchangeDate = null)
    {
      if ($ExchangeDate == null) {
       $this->ExchangeDate = null;
      } else {
        $this->ExchangeDate = $ExchangeDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate()
    {
      return $this->ExchangeRate;
    }

    /**
     * @param float $ExchangeRate
     * @return GLTransactionLine
     */
    public function setExchangeRate($ExchangeRate)
    {
      $this->ExchangeRate = $ExchangeRate;
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
     * @return GLTransactionLine
     */
    public function setGLAccountKey($GLAccountKey)
    {
      $this->GLAccountKey = $GLAccountKey;
      return $this;
    }

    /**
     * @return CompanyKey
     */
    public function getIntercompanyKey()
    {
      return $this->IntercompanyKey;
    }

    /**
     * @param CompanyKey $IntercompanyKey
     * @return GLTransactionLine
     */
    public function setIntercompanyKey($IntercompanyKey)
    {
      $this->IntercompanyKey = $IntercompanyKey;
      return $this;
    }

    /**
     * @return GLTransactionLineKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param GLTransactionLineKey $Key
     * @return GLTransactionLine
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return GLOriginatingDocumentLine
     */
    public function getOriginatingDocument()
    {
      return $this->OriginatingDocument;
    }

    /**
     * @param GLOriginatingDocumentLine $OriginatingDocument
     * @return GLTransactionLine
     */
    public function setOriginatingDocument($OriginatingDocument)
    {
      $this->OriginatingDocument = $OriginatingDocument;
      return $this;
    }

    /**
     * @return GLTax
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param GLTax $Tax
     * @return GLTransactionLine
     */
    public function setTax($Tax)
    {
      $this->Tax = $Tax;
      return $this;
    }

}
