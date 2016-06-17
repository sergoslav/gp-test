<?php

class PaymentCardDetail
{

    /**
     * @var MoneyAmount $Amount
     */
    protected $Amount = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $ReceiptNumber
     */
    protected $ReceiptNumber = null;

    /**
     * @var PaymentCardTypeKey $TypeKey
     */
    protected $TypeKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MoneyAmount
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param MoneyAmount $Amount
     * @return PaymentCardDetail
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return PaymentCardDetail
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
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return PaymentCardDetail
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceiptNumber()
    {
      return $this->ReceiptNumber;
    }

    /**
     * @param string $ReceiptNumber
     * @return PaymentCardDetail
     */
    public function setReceiptNumber($ReceiptNumber)
    {
      $this->ReceiptNumber = $ReceiptNumber;
      return $this;
    }

    /**
     * @return PaymentCardTypeKey
     */
    public function getTypeKey()
    {
      return $this->TypeKey;
    }

    /**
     * @param PaymentCardTypeKey $TypeKey
     * @return PaymentCardDetail
     */
    public function setTypeKey($TypeKey)
    {
      $this->TypeKey = $TypeKey;
      return $this;
    }

}
