<?php

class CustomerSummary
{

    /**
     * @var CustomerKey $CorporateAccountKey
     */
    protected $CorporateAccountKey = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var CustomerClassKey $CustomerClassKey
     */
    protected $CustomerClassKey = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var boolean $IsOnHold
     */
    protected $IsOnHold = null;

    /**
     * @var CustomerKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

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
     * @var SalespersonKey $SalespersonKey
     */
    protected $SalespersonKey = null;

    /**
     * @var string $State
     */
    protected $State = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomerKey
     */
    public function getCorporateAccountKey()
    {
      return $this->CorporateAccountKey;
    }

    /**
     * @param CustomerKey $CorporateAccountKey
     * @return CustomerSummary
     */
    public function setCorporateAccountKey($CorporateAccountKey)
    {
      $this->CorporateAccountKey = $CorporateAccountKey;
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
     * @return CustomerSummary
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
     * @return CustomerClassKey
     */
    public function getCustomerClassKey()
    {
      return $this->CustomerClassKey;
    }

    /**
     * @param CustomerClassKey $CustomerClassKey
     * @return CustomerSummary
     */
    public function setCustomerClassKey($CustomerClassKey)
    {
      $this->CustomerClassKey = $CustomerClassKey;
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
     * @return CustomerSummary
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
     * @return CustomerSummary
     */
    public function setIsOnHold($IsOnHold)
    {
      $this->IsOnHold = $IsOnHold;
      return $this;
    }

    /**
     * @return CustomerKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param CustomerKey $Key
     * @return CustomerSummary
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
     * @return CustomerSummary
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
     * @return CustomerSummary
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
     * @return CustomerSummary
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
     * @return CustomerSummary
     */
    public function setPhoneNumbers($PhoneNumbers)
    {
      $this->PhoneNumbers = $PhoneNumbers;
      return $this;
    }

    /**
     * @return SalespersonKey
     */
    public function getSalespersonKey()
    {
      return $this->SalespersonKey;
    }

    /**
     * @param SalespersonKey $SalespersonKey
     * @return CustomerSummary
     */
    public function setSalespersonKey($SalespersonKey)
    {
      $this->SalespersonKey = $SalespersonKey;
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
     * @return CustomerSummary
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

}
