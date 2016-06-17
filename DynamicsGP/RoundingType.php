<?php

class RoundingType
{

    /**
     * @var MoneyAmount $Amount
     */
    protected $Amount = null;

    /**
     * @var RoundHow $Option
     */
    protected $Option = null;

    /**
     * @var RoundTo $Policy
     */
    protected $Policy = null;

    
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
     * @return RoundingType
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return RoundHow
     */
    public function getOption()
    {
      return $this->Option;
    }

    /**
     * @param RoundHow $Option
     * @return RoundingType
     */
    public function setOption($Option)
    {
      $this->Option = $Option;
      return $this;
    }

    /**
     * @return RoundTo
     */
    public function getPolicy()
    {
      return $this->Policy;
    }

    /**
     * @param RoundTo $Policy
     * @return RoundingType
     */
    public function setPolicy($Policy)
    {
      $this->Policy = $Policy;
      return $this;
    }

}
