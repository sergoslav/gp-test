<?php

class ServiceEquipmentSummary
{

    /**
     * @var AddressKey $AddressKey
     */
    protected $AddressKey = null;

    /**
     * @var CustomerKey $CustomerKey
     */
    protected $CustomerKey = null;

    /**
     * @var \DateTime $InstallDate
     */
    protected $InstallDate = null;

    /**
     * @var ServiceEquipmentKey $Key
     */
    protected $Key = null;

    /**
     * @var ServiceStatusKey $StatusKey
     */
    protected $StatusKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AddressKey
     */
    public function getAddressKey()
    {
      return $this->AddressKey;
    }

    /**
     * @param AddressKey $AddressKey
     * @return ServiceEquipmentSummary
     */
    public function setAddressKey($AddressKey)
    {
      $this->AddressKey = $AddressKey;
      return $this;
    }

    /**
     * @return CustomerKey
     */
    public function getCustomerKey()
    {
      return $this->CustomerKey;
    }

    /**
     * @param CustomerKey $CustomerKey
     * @return ServiceEquipmentSummary
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInstallDate()
    {
      if ($this->InstallDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InstallDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InstallDate
     * @return ServiceEquipmentSummary
     */
    public function setInstallDate(\DateTime $InstallDate = null)
    {
      if ($InstallDate == null) {
       $this->InstallDate = null;
      } else {
        $this->InstallDate = $InstallDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ServiceEquipmentKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ServiceEquipmentKey $Key
     * @return ServiceEquipmentSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ServiceStatusKey
     */
    public function getStatusKey()
    {
      return $this->StatusKey;
    }

    /**
     * @param ServiceStatusKey $StatusKey
     * @return ServiceEquipmentSummary
     */
    public function setStatusKey($StatusKey)
    {
      $this->StatusKey = $StatusKey;
      return $this;
    }

}
