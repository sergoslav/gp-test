<?php

class Pricing extends BusinessObject
{

    /**
     * @var ArrayOfPricingDetail $Details
     */
    protected $Details = null;

    /**
     * @var PricingKey $Key
     */
    protected $Key = null;

    /**
     * @var string $LastModifiedBy
     */
    protected $LastModifiedBy = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var RoundingType $Round
     */
    protected $Round = null;

    /**
     * @var UofMSalesAvailable $UofMSalesOption
     */
    protected $UofMSalesOption = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfPricingDetail
     */
    public function getDetails()
    {
      return $this->Details;
    }

    /**
     * @param ArrayOfPricingDetail $Details
     * @return Pricing
     */
    public function setDetails($Details)
    {
      $this->Details = $Details;
      return $this;
    }

    /**
     * @return PricingKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PricingKey $Key
     * @return Pricing
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedBy()
    {
      return $this->LastModifiedBy;
    }

    /**
     * @param string $LastModifiedBy
     * @return Pricing
     */
    public function setLastModifiedBy($LastModifiedBy)
    {
      $this->LastModifiedBy = $LastModifiedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->LastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedDate
     * @return Pricing
     */
    public function setLastModifiedDate(\DateTime $LastModifiedDate = null)
    {
      if ($LastModifiedDate == null) {
       $this->LastModifiedDate = null;
      } else {
        $this->LastModifiedDate = $LastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RoundingType
     */
    public function getRound()
    {
      return $this->Round;
    }

    /**
     * @param RoundingType $Round
     * @return Pricing
     */
    public function setRound($Round)
    {
      $this->Round = $Round;
      return $this;
    }

    /**
     * @return UofMSalesAvailable
     */
    public function getUofMSalesOption()
    {
      return $this->UofMSalesOption;
    }

    /**
     * @param UofMSalesAvailable $UofMSalesOption
     * @return Pricing
     */
    public function setUofMSalesOption($UofMSalesOption)
    {
      $this->UofMSalesOption = $UofMSalesOption;
      return $this;
    }

}
