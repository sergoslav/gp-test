<?php

class CheckDetail
{

    /**
     * @var MoneyAmount $Amount
     */
    protected $Amount = null;

    /**
     * @var BankAccountKey $BankAccountKey
     */
    protected $BankAccountKey = null;

    /**
     * @var string $CheckNumber
     */
    protected $CheckNumber = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    
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
     * @return CheckDetail
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return CheckDetail
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
     * @return CheckDetail
     */
    public function setCheckNumber($CheckNumber)
    {
      $this->CheckNumber = $CheckNumber;
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
     * @return CheckDetail
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
     * @return CheckDetail
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
