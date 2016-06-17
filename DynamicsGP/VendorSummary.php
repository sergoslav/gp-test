<?php

class VendorSummary
{

    /**
     * @var VendorClassKey $ClassKey
     */
    protected $ClassKey = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var boolean $IsOnHold
     */
    protected $IsOnHold = null;

    /**
     * @var boolean $IsOneTime
     */
    protected $IsOneTime = null;

    /**
     * @var VendorKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ArrayOfPhoneNumber $PhoneNumbers
     */
    protected $PhoneNumbers = null;

    /**
     * @var string $State
     */
    protected $State = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VendorClassKey
     */
    public function getClassKey()
    {
      return $this->ClassKey;
    }

    /**
     * @param VendorClassKey $ClassKey
     * @return VendorSummary
     */
    public function setClassKey($ClassKey)
    {
      $this->ClassKey = $ClassKey;
      return $this;
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
     * @return VendorSummary
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
     * @return boolean
     */
    public function getIsActive()
    {
      return $this->IsActive;
    }

    /**
     * @param boolean $IsActive
     * @return VendorSummary
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOnHold()
    {
      return $this->IsOnHold;
    }

    /**
     * @param boolean $IsOnHold
     * @return VendorSummary
     */
    public function setIsOnHold($IsOnHold)
    {
      $this->IsOnHold = $IsOnHold;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOneTime()
    {
      return $this->IsOneTime;
    }

    /**
     * @param boolean $IsOneTime
     * @return VendorSummary
     */
    public function setIsOneTime($IsOneTime)
    {
      $this->IsOneTime = $IsOneTime;
      return $this;
    }

    /**
     * @return VendorKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param VendorKey $Key
     * @return VendorSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return VendorSummary
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
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return VendorSummary
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ArrayOfPhoneNumber
     */
    public function getPhoneNumbers()
    {
      return $this->PhoneNumbers;
    }

    /**
     * @param ArrayOfPhoneNumber $PhoneNumbers
     * @return VendorSummary
     */
    public function setPhoneNumbers($PhoneNumbers)
    {
      $this->PhoneNumbers = $PhoneNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return VendorSummary
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

}
