<?php

class ServiceEquipment extends BusinessObject
{

    /**
     * @var ServiceEquipmentAddress $Address
     */
    protected $Address = null;

    /**
     * @var AddressKey $AddressKey
     */
    protected $AddressKey = null;

    /**
     * @var string $AssetTag
     */
    protected $AssetTag = null;

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
     * @var \DateTime $LastCalculatedDate
     */
    protected $LastCalculatedDate = null;

    /**
     * @var \DateTime $LastPreventiveMaintenanceDate
     */
    protected $LastPreventiveMaintenanceDate = null;

    /**
     * @var \DateTime $LastServiceDate
     */
    protected $LastServiceDate = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var OfficeKey $OfficeKey
     */
    protected $OfficeKey = null;

    /**
     * @var int $PreventiveMaintenanceDay
     */
    protected $PreventiveMaintenanceDay = null;

    /**
     * @var ISO8061Month $PreventiveMaintenanceMonth
     */
    protected $PreventiveMaintenanceMonth = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var ArrayOfServiceEquipmentReading $Readings
     */
    protected $Readings = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var \DateTime $RegisterDate
     */
    protected $RegisterDate = null;

    /**
     * @var ServiceWarrantyCode $SellerWarrantyCode
     */
    protected $SellerWarrantyCode = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var ServiceAreaKey $ServiceAreaKey
     */
    protected $ServiceAreaKey = null;

    /**
     * @var \DateTime $ShippedDate
     */
    protected $ShippedDate = null;

    /**
     * @var ServiceStatusKey $StatusKey
     */
    protected $StatusKey = null;

    /**
     * @var ServiceTechnicianKey $TechnicianKey
     */
    protected $TechnicianKey = null;

    /**
     * @var ServiceTimeZoneKey $TimeZoneKey
     */
    protected $TimeZoneKey = null;

    /**
     * @var string $UserDefined01
     */
    protected $UserDefined01 = null;

    /**
     * @var string $UserDefined02
     */
    protected $UserDefined02 = null;

    /**
     * @var string $UserDefined03
     */
    protected $UserDefined03 = null;

    /**
     * @var string $UserDefined04
     */
    protected $UserDefined04 = null;

    /**
     * @var string $UserDefined05
     */
    protected $UserDefined05 = null;

    /**
     * @var VendorKey $VendorKey
     */
    protected $VendorKey = null;

    /**
     * @var ServiceWarrantyCode $VendorWarrantyCode
     */
    protected $VendorWarrantyCode = null;

    /**
     * @var string $Version
     */
    protected $Version = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ServiceEquipmentAddress
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param ServiceEquipmentAddress $Address
     * @return ServiceEquipment
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
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
     * @return ServiceEquipment
     */
    public function setAddressKey($AddressKey)
    {
      $this->AddressKey = $AddressKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssetTag()
    {
      return $this->AssetTag;
    }

    /**
     * @param string $AssetTag
     * @return ServiceEquipment
     */
    public function setAssetTag($AssetTag)
    {
      $this->AssetTag = $AssetTag;
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
     * @return ServiceEquipment
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
     * @return ServiceEquipment
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
     * @return ServiceEquipment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastCalculatedDate()
    {
      if ($this->LastCalculatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastCalculatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastCalculatedDate
     * @return ServiceEquipment
     */
    public function setLastCalculatedDate(\DateTime $LastCalculatedDate = null)
    {
      if ($LastCalculatedDate == null) {
       $this->LastCalculatedDate = null;
      } else {
        $this->LastCalculatedDate = $LastCalculatedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastPreventiveMaintenanceDate()
    {
      if ($this->LastPreventiveMaintenanceDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastPreventiveMaintenanceDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastPreventiveMaintenanceDate
     * @return ServiceEquipment
     */
    public function setLastPreventiveMaintenanceDate(\DateTime $LastPreventiveMaintenanceDate = null)
    {
      if ($LastPreventiveMaintenanceDate == null) {
       $this->LastPreventiveMaintenanceDate = null;
      } else {
        $this->LastPreventiveMaintenanceDate = $LastPreventiveMaintenanceDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastServiceDate()
    {
      if ($this->LastServiceDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastServiceDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastServiceDate
     * @return ServiceEquipment
     */
    public function setLastServiceDate(\DateTime $LastServiceDate = null)
    {
      if ($LastServiceDate == null) {
       $this->LastServiceDate = null;
      } else {
        $this->LastServiceDate = $LastServiceDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
      return $this->Note;
    }

    /**
     * @param string $Note
     * @return ServiceEquipment
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
      return $this;
    }

    /**
     * @return OfficeKey
     */
    public function getOfficeKey()
    {
      return $this->OfficeKey;
    }

    /**
     * @param OfficeKey $OfficeKey
     * @return ServiceEquipment
     */
    public function setOfficeKey($OfficeKey)
    {
      $this->OfficeKey = $OfficeKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getPreventiveMaintenanceDay()
    {
      return $this->PreventiveMaintenanceDay;
    }

    /**
     * @param int $PreventiveMaintenanceDay
     * @return ServiceEquipment
     */
    public function setPreventiveMaintenanceDay($PreventiveMaintenanceDay)
    {
      $this->PreventiveMaintenanceDay = $PreventiveMaintenanceDay;
      return $this;
    }

    /**
     * @return ISO8061Month
     */
    public function getPreventiveMaintenanceMonth()
    {
      return $this->PreventiveMaintenanceMonth;
    }

    /**
     * @param ISO8061Month $PreventiveMaintenanceMonth
     * @return ServiceEquipment
     */
    public function setPreventiveMaintenanceMonth($PreventiveMaintenanceMonth)
    {
      $this->PreventiveMaintenanceMonth = $PreventiveMaintenanceMonth;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param Quantity $Quantity
     * @return ServiceEquipment
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return ArrayOfServiceEquipmentReading
     */
    public function getReadings()
    {
      return $this->Readings;
    }

    /**
     * @param ArrayOfServiceEquipmentReading $Readings
     * @return ServiceEquipment
     */
    public function setReadings($Readings)
    {
      $this->Readings = $Readings;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return ServiceEquipment
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRegisterDate()
    {
      if ($this->RegisterDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RegisterDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RegisterDate
     * @return ServiceEquipment
     */
    public function setRegisterDate(\DateTime $RegisterDate = null)
    {
      if ($RegisterDate == null) {
       $this->RegisterDate = null;
      } else {
        $this->RegisterDate = $RegisterDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ServiceWarrantyCode
     */
    public function getSellerWarrantyCode()
    {
      return $this->SellerWarrantyCode;
    }

    /**
     * @param ServiceWarrantyCode $SellerWarrantyCode
     * @return ServiceEquipment
     */
    public function setSellerWarrantyCode($SellerWarrantyCode)
    {
      $this->SellerWarrantyCode = $SellerWarrantyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
      return $this->SerialNumber;
    }

    /**
     * @param string $SerialNumber
     * @return ServiceEquipment
     */
    public function setSerialNumber($SerialNumber)
    {
      $this->SerialNumber = $SerialNumber;
      return $this;
    }

    /**
     * @return ServiceAreaKey
     */
    public function getServiceAreaKey()
    {
      return $this->ServiceAreaKey;
    }

    /**
     * @param ServiceAreaKey $ServiceAreaKey
     * @return ServiceEquipment
     */
    public function setServiceAreaKey($ServiceAreaKey)
    {
      $this->ServiceAreaKey = $ServiceAreaKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShippedDate()
    {
      if ($this->ShippedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShippedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShippedDate
     * @return ServiceEquipment
     */
    public function setShippedDate(\DateTime $ShippedDate = null)
    {
      if ($ShippedDate == null) {
       $this->ShippedDate = null;
      } else {
        $this->ShippedDate = $ShippedDate->format(\DateTime::ATOM);
      }
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
     * @return ServiceEquipment
     */
    public function setStatusKey($StatusKey)
    {
      $this->StatusKey = $StatusKey;
      return $this;
    }

    /**
     * @return ServiceTechnicianKey
     */
    public function getTechnicianKey()
    {
      return $this->TechnicianKey;
    }

    /**
     * @param ServiceTechnicianKey $TechnicianKey
     * @return ServiceEquipment
     */
    public function setTechnicianKey($TechnicianKey)
    {
      $this->TechnicianKey = $TechnicianKey;
      return $this;
    }

    /**
     * @return ServiceTimeZoneKey
     */
    public function getTimeZoneKey()
    {
      return $this->TimeZoneKey;
    }

    /**
     * @param ServiceTimeZoneKey $TimeZoneKey
     * @return ServiceEquipment
     */
    public function setTimeZoneKey($TimeZoneKey)
    {
      $this->TimeZoneKey = $TimeZoneKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefined01()
    {
      return $this->UserDefined01;
    }

    /**
     * @param string $UserDefined01
     * @return ServiceEquipment
     */
    public function setUserDefined01($UserDefined01)
    {
      $this->UserDefined01 = $UserDefined01;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefined02()
    {
      return $this->UserDefined02;
    }

    /**
     * @param string $UserDefined02
     * @return ServiceEquipment
     */
    public function setUserDefined02($UserDefined02)
    {
      $this->UserDefined02 = $UserDefined02;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefined03()
    {
      return $this->UserDefined03;
    }

    /**
     * @param string $UserDefined03
     * @return ServiceEquipment
     */
    public function setUserDefined03($UserDefined03)
    {
      $this->UserDefined03 = $UserDefined03;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefined04()
    {
      return $this->UserDefined04;
    }

    /**
     * @param string $UserDefined04
     * @return ServiceEquipment
     */
    public function setUserDefined04($UserDefined04)
    {
      $this->UserDefined04 = $UserDefined04;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefined05()
    {
      return $this->UserDefined05;
    }

    /**
     * @param string $UserDefined05
     * @return ServiceEquipment
     */
    public function setUserDefined05($UserDefined05)
    {
      $this->UserDefined05 = $UserDefined05;
      return $this;
    }

    /**
     * @return VendorKey
     */
    public function getVendorKey()
    {
      return $this->VendorKey;
    }

    /**
     * @param VendorKey $VendorKey
     * @return ServiceEquipment
     */
    public function setVendorKey($VendorKey)
    {
      $this->VendorKey = $VendorKey;
      return $this;
    }

    /**
     * @return ServiceWarrantyCode
     */
    public function getVendorWarrantyCode()
    {
      return $this->VendorWarrantyCode;
    }

    /**
     * @param ServiceWarrantyCode $VendorWarrantyCode
     * @return ServiceEquipment
     */
    public function setVendorWarrantyCode($VendorWarrantyCode)
    {
      $this->VendorWarrantyCode = $VendorWarrantyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param string $Version
     * @return ServiceEquipment
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
