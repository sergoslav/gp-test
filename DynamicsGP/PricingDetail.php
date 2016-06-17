<?php

class PricingDetail extends BusinessObject
{

    /**
     * @var PricingDetailKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var string $LastModifiedyBy
     */
    protected $LastModifiedyBy = null;

    /**
     * @var PricingDetailPrice $UofMPrice
     */
    protected $UofMPrice = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PricingDetailKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PricingDetailKey $Key
     * @return PricingDetail
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return PricingDetail
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
     * @return string
     */
    public function getLastModifiedyBy()
    {
      return $this->LastModifiedyBy;
    }

    /**
     * @param string $LastModifiedyBy
     * @return PricingDetail
     */
    public function setLastModifiedyBy($LastModifiedyBy)
    {
      $this->LastModifiedyBy = $LastModifiedyBy;
      return $this;
    }

    /**
     * @return PricingDetailPrice
     */
    public function getUofMPrice()
    {
      return $this->UofMPrice;
    }

    /**
     * @param PricingDetailPrice $UofMPrice
     * @return PricingDetail
     */
    public function setUofMPrice($UofMPrice)
    {
      $this->UofMPrice = $UofMPrice;
      return $this;
    }

}
