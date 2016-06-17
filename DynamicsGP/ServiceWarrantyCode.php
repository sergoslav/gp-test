<?php

class ServiceWarrantyCode extends BusinessObject
{

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var ServiceWarrantyCodeKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return ServiceWarrantyCode
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ServiceWarrantyCodeKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ServiceWarrantyCodeKey $Key
     * @return ServiceWarrantyCode
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return ServiceWarrantyCode
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
