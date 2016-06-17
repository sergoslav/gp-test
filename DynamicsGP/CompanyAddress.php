<?php

class CompanyAddress extends ExtendedBusinessAddress
{

    /**
     * @var InternetAddresses $InternetAddresses
     */
    protected $InternetAddresses = null;

    /**
     * @var CompanyAddressKey $Key
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

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return InternetAddresses
     */
    public function getInternetAddresses()
    {
      return $this->InternetAddresses;
    }

    /**
     * @param InternetAddresses $InternetAddresses
     * @return CompanyAddress
     */
    public function setInternetAddresses($InternetAddresses)
    {
      $this->InternetAddresses = $InternetAddresses;
      return $this;
    }

    /**
     * @return CompanyAddressKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param CompanyAddressKey $Key
     * @return CompanyAddress
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
     * @return CompanyAddress
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
     * @return CompanyAddress
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

}
