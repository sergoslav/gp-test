<?php

class AgingAmounts
{

    /**
     * @var MoneyAmount $BalanceAmount
     */
    protected $BalanceAmount = null;

    /**
     * @var \DateTime $LastAgedDate
     */
    protected $LastAgedDate = null;

    /**
     * @var MoneyAmount $Period1Amount
     */
    protected $Period1Amount = null;

    /**
     * @var MoneyAmount $Period2Amount
     */
    protected $Period2Amount = null;

    /**
     * @var MoneyAmount $Period3Amount
     */
    protected $Period3Amount = null;

    /**
     * @var MoneyAmount $Period4Amount
     */
    protected $Period4Amount = null;

    /**
     * @var MoneyAmount $Period5Amount
     */
    protected $Period5Amount = null;

    /**
     * @var MoneyAmount $Period6Amount
     */
    protected $Period6Amount = null;

    /**
     * @var MoneyAmount $Period7Amount
     */
    protected $Period7Amount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MoneyAmount
     */
    public function getBalanceAmount()
    {
      return $this->BalanceAmount;
    }

    /**
     * @param MoneyAmount $BalanceAmount
     * @return AgingAmounts
     */
    public function setBalanceAmount($BalanceAmount)
    {
      $this->BalanceAmount = $BalanceAmount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastAgedDate()
    {
      if ($this->LastAgedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastAgedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastAgedDate
     * @return AgingAmounts
     */
    public function setLastAgedDate(\DateTime $LastAgedDate = null)
    {
      if ($LastAgedDate == null) {
       $this->LastAgedDate = null;
      } else {
        $this->LastAgedDate = $LastAgedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPeriod1Amount()
    {
      return $this->Period1Amount;
    }

    /**
     * @param MoneyAmount $Period1Amount
     * @return AgingAmounts
     */
    public function setPeriod1Amount($Period1Amount)
    {
      $this->Period1Amount = $Period1Amount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPeriod2Amount()
    {
      return $this->Period2Amount;
    }

    /**
     * @param MoneyAmount $Period2Amount
     * @return AgingAmounts
     */
    public function setPeriod2Amount($Period2Amount)
    {
      $this->Period2Amount = $Period2Amount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPeriod3Amount()
    {
      return $this->Period3Amount;
    }

    /**
     * @param MoneyAmount $Period3Amount
     * @return AgingAmounts
     */
    public function setPeriod3Amount($Period3Amount)
    {
      $this->Period3Amount = $Period3Amount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPeriod4Amount()
    {
      return $this->Period4Amount;
    }

    /**
     * @param MoneyAmount $Period4Amount
     * @return AgingAmounts
     */
    public function setPeriod4Amount($Period4Amount)
    {
      $this->Period4Amount = $Period4Amount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPeriod5Amount()
    {
      return $this->Period5Amount;
    }

    /**
     * @param MoneyAmount $Period5Amount
     * @return AgingAmounts
     */
    public function setPeriod5Amount($Period5Amount)
    {
      $this->Period5Amount = $Period5Amount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPeriod6Amount()
    {
      return $this->Period6Amount;
    }

    /**
     * @param MoneyAmount $Period6Amount
     * @return AgingAmounts
     */
    public function setPeriod6Amount($Period6Amount)
    {
      $this->Period6Amount = $Period6Amount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPeriod7Amount()
    {
      return $this->Period7Amount;
    }

    /**
     * @param MoneyAmount $Period7Amount
     * @return AgingAmounts
     */
    public function setPeriod7Amount($Period7Amount)
    {
      $this->Period7Amount = $Period7Amount;
      return $this;
    }

}
