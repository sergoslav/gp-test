<?php

class UofMScheduleDetail extends BusinessObject
{

    /**
     * @var string $EquivalentUofM
     */
    protected $EquivalentUofM = null;

    /**
     * @var Quantity $EquivalentUofMQuantity
     */
    protected $EquivalentUofMQuantity = null;

    /**
     * @var UofMScheduleDetailKey $Key
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
     * @var string $LongDescription
     */
    protected $LongDescription = null;

    /**
     * @var Quantity $QuantityInBaseUofM
     */
    protected $QuantityInBaseUofM = null;

    /**
     * @var string $UofM
     */
    protected $UofM = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getEquivalentUofM()
    {
      return $this->EquivalentUofM;
    }

    /**
     * @param string $EquivalentUofM
     * @return UofMScheduleDetail
     */
    public function setEquivalentUofM($EquivalentUofM)
    {
      $this->EquivalentUofM = $EquivalentUofM;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getEquivalentUofMQuantity()
    {
      return $this->EquivalentUofMQuantity;
    }

    /**
     * @param Quantity $EquivalentUofMQuantity
     * @return UofMScheduleDetail
     */
    public function setEquivalentUofMQuantity($EquivalentUofMQuantity)
    {
      $this->EquivalentUofMQuantity = $EquivalentUofMQuantity;
      return $this;
    }

    /**
     * @return UofMScheduleDetailKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param UofMScheduleDetailKey $Key
     * @return UofMScheduleDetail
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
     * @return UofMScheduleDetail
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
     * @return UofMScheduleDetail
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
    public function getLongDescription()
    {
      return $this->LongDescription;
    }

    /**
     * @param string $LongDescription
     * @return UofMScheduleDetail
     */
    public function setLongDescription($LongDescription)
    {
      $this->LongDescription = $LongDescription;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantityInBaseUofM()
    {
      return $this->QuantityInBaseUofM;
    }

    /**
     * @param Quantity $QuantityInBaseUofM
     * @return UofMScheduleDetail
     */
    public function setQuantityInBaseUofM($QuantityInBaseUofM)
    {
      $this->QuantityInBaseUofM = $QuantityInBaseUofM;
      return $this;
    }

    /**
     * @return string
     */
    public function getUofM()
    {
      return $this->UofM;
    }

    /**
     * @param string $UofM
     * @return UofMScheduleDetail
     */
    public function setUofM($UofM)
    {
      $this->UofM = $UofM;
      return $this;
    }

}
