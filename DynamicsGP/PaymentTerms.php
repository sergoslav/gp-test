<?php

class PaymentTerms extends BusinessObject
{

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var int $DaysDiscountAvailable
     */
    protected $DaysDiscountAvailable = null;

    /**
     * @var int $DaysUntilDue
     */
    protected $DaysUntilDue = null;

    /**
     * @var MoneyPercentChoice $DiscountCalculation
     */
    protected $DiscountCalculation = null;

    /**
     * @var DiscountDateBasedOn $DiscountDateBasedOn
     */
    protected $DiscountDateBasedOn = null;

    /**
     * @var DueDateBasedOn $DueDateBasedOn
     */
    protected $DueDateBasedOn = null;

    /**
     * @var boolean $IsDiscountCalculatedOnFreight
     */
    protected $IsDiscountCalculatedOnFreight = null;

    /**
     * @var boolean $IsDiscountCalculatedOnMiscellaneous
     */
    protected $IsDiscountCalculatedOnMiscellaneous = null;

    /**
     * @var boolean $IsDiscountCalculatedOnSalePurchase
     */
    protected $IsDiscountCalculatedOnSalePurchase = null;

    /**
     * @var boolean $IsDiscountCalculatedOnTax
     */
    protected $IsDiscountCalculatedOnTax = null;

    /**
     * @var boolean $IsDiscountCalculatedOnTradeDiscount
     */
    protected $IsDiscountCalculatedOnTradeDiscount = null;

    /**
     * @var PaymentTermsKey $Key
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
     * @var boolean $UseGracePeriods
     */
    protected $UseGracePeriods = null;

    /**
     * @var boolean $UseValueAddedTax
     */
    protected $UseValueAddedTax = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return PaymentTerms
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
     * @return int
     */
    public function getDaysDiscountAvailable()
    {
      return $this->DaysDiscountAvailable;
    }

    /**
     * @param int $DaysDiscountAvailable
     * @return PaymentTerms
     */
    public function setDaysDiscountAvailable($DaysDiscountAvailable)
    {
      $this->DaysDiscountAvailable = $DaysDiscountAvailable;
      return $this;
    }

    /**
     * @return int
     */
    public function getDaysUntilDue()
    {
      return $this->DaysUntilDue;
    }

    /**
     * @param int $DaysUntilDue
     * @return PaymentTerms
     */
    public function setDaysUntilDue($DaysUntilDue)
    {
      $this->DaysUntilDue = $DaysUntilDue;
      return $this;
    }

    /**
     * @return MoneyPercentChoice
     */
    public function getDiscountCalculation()
    {
      return $this->DiscountCalculation;
    }

    /**
     * @param MoneyPercentChoice $DiscountCalculation
     * @return PaymentTerms
     */
    public function setDiscountCalculation($DiscountCalculation)
    {
      $this->DiscountCalculation = $DiscountCalculation;
      return $this;
    }

    /**
     * @return DiscountDateBasedOn
     */
    public function getDiscountDateBasedOn()
    {
      return $this->DiscountDateBasedOn;
    }

    /**
     * @param DiscountDateBasedOn $DiscountDateBasedOn
     * @return PaymentTerms
     */
    public function setDiscountDateBasedOn($DiscountDateBasedOn)
    {
      $this->DiscountDateBasedOn = $DiscountDateBasedOn;
      return $this;
    }

    /**
     * @return DueDateBasedOn
     */
    public function getDueDateBasedOn()
    {
      return $this->DueDateBasedOn;
    }

    /**
     * @param DueDateBasedOn $DueDateBasedOn
     * @return PaymentTerms
     */
    public function setDueDateBasedOn($DueDateBasedOn)
    {
      $this->DueDateBasedOn = $DueDateBasedOn;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDiscountCalculatedOnFreight()
    {
      return $this->IsDiscountCalculatedOnFreight;
    }

    /**
     * @param boolean $IsDiscountCalculatedOnFreight
     * @return PaymentTerms
     */
    public function setIsDiscountCalculatedOnFreight($IsDiscountCalculatedOnFreight)
    {
      $this->IsDiscountCalculatedOnFreight = $IsDiscountCalculatedOnFreight;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDiscountCalculatedOnMiscellaneous()
    {
      return $this->IsDiscountCalculatedOnMiscellaneous;
    }

    /**
     * @param boolean $IsDiscountCalculatedOnMiscellaneous
     * @return PaymentTerms
     */
    public function setIsDiscountCalculatedOnMiscellaneous($IsDiscountCalculatedOnMiscellaneous)
    {
      $this->IsDiscountCalculatedOnMiscellaneous = $IsDiscountCalculatedOnMiscellaneous;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDiscountCalculatedOnSalePurchase()
    {
      return $this->IsDiscountCalculatedOnSalePurchase;
    }

    /**
     * @param boolean $IsDiscountCalculatedOnSalePurchase
     * @return PaymentTerms
     */
    public function setIsDiscountCalculatedOnSalePurchase($IsDiscountCalculatedOnSalePurchase)
    {
      $this->IsDiscountCalculatedOnSalePurchase = $IsDiscountCalculatedOnSalePurchase;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDiscountCalculatedOnTax()
    {
      return $this->IsDiscountCalculatedOnTax;
    }

    /**
     * @param boolean $IsDiscountCalculatedOnTax
     * @return PaymentTerms
     */
    public function setIsDiscountCalculatedOnTax($IsDiscountCalculatedOnTax)
    {
      $this->IsDiscountCalculatedOnTax = $IsDiscountCalculatedOnTax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDiscountCalculatedOnTradeDiscount()
    {
      return $this->IsDiscountCalculatedOnTradeDiscount;
    }

    /**
     * @param boolean $IsDiscountCalculatedOnTradeDiscount
     * @return PaymentTerms
     */
    public function setIsDiscountCalculatedOnTradeDiscount($IsDiscountCalculatedOnTradeDiscount)
    {
      $this->IsDiscountCalculatedOnTradeDiscount = $IsDiscountCalculatedOnTradeDiscount;
      return $this;
    }

    /**
     * @return PaymentTermsKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PaymentTermsKey $Key
     * @return PaymentTerms
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
     * @return PaymentTerms
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
     * @return PaymentTerms
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
     * @return boolean
     */
    public function getUseGracePeriods()
    {
      return $this->UseGracePeriods;
    }

    /**
     * @param boolean $UseGracePeriods
     * @return PaymentTerms
     */
    public function setUseGracePeriods($UseGracePeriods)
    {
      $this->UseGracePeriods = $UseGracePeriods;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseValueAddedTax()
    {
      return $this->UseValueAddedTax;
    }

    /**
     * @param boolean $UseValueAddedTax
     * @return PaymentTerms
     */
    public function setUseValueAddedTax($UseValueAddedTax)
    {
      $this->UseValueAddedTax = $UseValueAddedTax;
      return $this;
    }

}
