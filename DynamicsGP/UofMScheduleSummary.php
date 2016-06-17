<?php

class UofMScheduleSummary
{

    /**
     * @var string $BaseUofM
     */
    protected $BaseUofM = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var UofMScheduleKey $Key
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
     * @var QuantityDecimalPlaces $UofMDecimalPlacesQuantities
     */
    protected $UofMDecimalPlacesQuantities = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBaseUofM()
    {
      return $this->BaseUofM;
    }

    /**
     * @param string $BaseUofM
     * @return UofMScheduleSummary
     */
    public function setBaseUofM($BaseUofM)
    {
      $this->BaseUofM = $BaseUofM;
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
     * @return UofMScheduleSummary
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return UofMScheduleKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param UofMScheduleKey $Key
     * @return UofMScheduleSummary
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
     * @return UofMScheduleSummary
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
     * @return UofMScheduleSummary
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
     * @return QuantityDecimalPlaces
     */
    public function getUofMDecimalPlacesQuantities()
    {
      return $this->UofMDecimalPlacesQuantities;
    }

    /**
     * @param QuantityDecimalPlaces $UofMDecimalPlacesQuantities
     * @return UofMScheduleSummary
     */
    public function setUofMDecimalPlacesQuantities($UofMDecimalPlacesQuantities)
    {
      $this->UofMDecimalPlacesQuantities = $UofMDecimalPlacesQuantities;
      return $this;
    }

}
