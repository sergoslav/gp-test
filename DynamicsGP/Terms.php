<?php

class Terms
{

    /**
     * @var MoneyPercentChoice $Discount
     */
    protected $Discount = null;

    /**
     * @var MoneyAmount $DiscountAvailableAmount
     */
    protected $DiscountAvailableAmount = null;

    /**
     * @var \DateTime $DiscountDate
     */
    protected $DiscountDate = null;

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MoneyPercentChoice
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param MoneyPercentChoice $Discount
     * @return Terms
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getDiscountAvailableAmount()
    {
      return $this->DiscountAvailableAmount;
    }

    /**
     * @param MoneyAmount $DiscountAvailableAmount
     * @return Terms
     */
    public function setDiscountAvailableAmount($DiscountAvailableAmount)
    {
      $this->DiscountAvailableAmount = $DiscountAvailableAmount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDiscountDate()
    {
      if ($this->DiscountDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DiscountDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DiscountDate
     * @return Terms
     */
    public function setDiscountDate(\DateTime $DiscountDate = null)
    {
      if ($DiscountDate == null) {
       $this->DiscountDate = null;
      } else {
        $this->DiscountDate = $DiscountDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
      if ($this->DueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DueDate
     * @return Terms
     */
    public function setDueDate(\DateTime $DueDate = null)
    {
      if ($DueDate == null) {
       $this->DueDate = null;
      } else {
        $this->DueDate = $DueDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
