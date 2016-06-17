<?php

class ShippingMethod extends BusinessObject
{

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $CarrierAccount
     */
    protected $CarrierAccount = null;

    /**
     * @var string $Contact
     */
    protected $Contact = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ShippingMethodKey $Key
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
     * @var PhoneNumber $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var ShippingMethodType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return ShippingMethod
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrierAccount()
    {
      return $this->CarrierAccount;
    }

    /**
     * @param string $CarrierAccount
     * @return ShippingMethod
     */
    public function setCarrierAccount($CarrierAccount)
    {
      $this->CarrierAccount = $CarrierAccount;
      return $this;
    }

    /**
     * @return string
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param string $Contact
     * @return ShippingMethod
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
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
     * @return ShippingMethod
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
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return ShippingMethod
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ShippingMethodKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ShippingMethodKey $Key
     * @return ShippingMethod
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
     * @return ShippingMethod
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
     * @return ShippingMethod
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
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param PhoneNumber $PhoneNumber
     * @return ShippingMethod
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return ShippingMethodType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ShippingMethodType $Type
     * @return ShippingMethod
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
