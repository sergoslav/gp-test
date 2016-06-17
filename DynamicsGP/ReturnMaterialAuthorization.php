<?php

class ReturnMaterialAuthorization extends ServiceDocument
{

    /**
     * @var ArrayOfReturnMaterialAuthorizationAudit $Audits
     */
    protected $Audits = null;

    /**
     * @var string $BillOfLading
     */
    protected $BillOfLading = null;

    /**
     * @var \DateTime $ClosedDateTime
     */
    protected $ClosedDateTime = null;

    /**
     * @var \DateTime $CommitDateTime
     */
    protected $CommitDateTime = null;

    /**
     * @var string $CreatedBy
     */
    protected $CreatedBy = null;

    /**
     * @var boolean $IsFromServiceCall
     */
    protected $IsFromServiceCall = null;

    /**
     * @var boolean $IsReceived
     */
    protected $IsReceived = null;

    /**
     * @var ArrayOfReturnMaterialAuthorizationLine $Lines
     */
    protected $Lines = null;

    /**
     * @var string $OriginatingDocumentId
     */
    protected $OriginatingDocumentId = null;

    /**
     * @var ReturnMaterialAuthorizationOriginatingDocumentType $OriginatingDocumentType
     */
    protected $OriginatingDocumentType = null;

    /**
     * @var string $ReasonCodeDescription
     */
    protected $ReasonCodeDescription = null;

    /**
     * @var ReturnMaterialAuthorizationReasonCodeKey $ReasonCodeKey
     */
    protected $ReasonCodeKey = null;

    /**
     * @var \DateTime $ReturnDateTime
     */
    protected $ReturnDateTime = null;

    /**
     * @var ReturnMaterialAuthorizationReturnStatus $ReturnStatus
     */
    protected $ReturnStatus = null;

    /**
     * @var ReturnMaterialAuthorizationStatusCodeKey $ReturnStatusCodeKey
     */
    protected $ReturnStatusCodeKey = null;

    /**
     * @var ReturnMaterialAuthorizationReturnToAddress $ReturnToAddress
     */
    protected $ReturnToAddress = null;

    /**
     * @var ReturnMaterialAuthorizationTypeKey $ReturnTypeKey
     */
    protected $ReturnTypeKey = null;

    /**
     * @var WarehouseKey $ReturnWarehouseKey
     */
    protected $ReturnWarehouseKey = null;

    /**
     * @var ReturnMaterialAuthorizationShipToAddress $ShipToAddress
     */
    protected $ShipToAddress = null;

    /**
     * @var ShippingMethodKey $ShippingMethodKey
     */
    protected $ShippingMethodKey = null;

    /**
     * @var ReturnMaterialAuthorizationType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfReturnMaterialAuthorizationAudit
     */
    public function getAudits()
    {
      return $this->Audits;
    }

    /**
     * @param ArrayOfReturnMaterialAuthorizationAudit $Audits
     * @return ReturnMaterialAuthorization
     */
    public function setAudits($Audits)
    {
      $this->Audits = $Audits;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillOfLading()
    {
      return $this->BillOfLading;
    }

    /**
     * @param string $BillOfLading
     * @return ReturnMaterialAuthorization
     */
    public function setBillOfLading($BillOfLading)
    {
      $this->BillOfLading = $BillOfLading;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getClosedDateTime()
    {
      if ($this->ClosedDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ClosedDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ClosedDateTime
     * @return ReturnMaterialAuthorization
     */
    public function setClosedDateTime(\DateTime $ClosedDateTime = null)
    {
      if ($ClosedDateTime == null) {
       $this->ClosedDateTime = null;
      } else {
        $this->ClosedDateTime = $ClosedDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCommitDateTime()
    {
      if ($this->CommitDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CommitDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CommitDateTime
     * @return ReturnMaterialAuthorization
     */
    public function setCommitDateTime(\DateTime $CommitDateTime = null)
    {
      if ($CommitDateTime == null) {
       $this->CommitDateTime = null;
      } else {
        $this->CommitDateTime = $CommitDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
      return $this->CreatedBy;
    }

    /**
     * @param string $CreatedBy
     * @return ReturnMaterialAuthorization
     */
    public function setCreatedBy($CreatedBy)
    {
      $this->CreatedBy = $CreatedBy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFromServiceCall()
    {
      return $this->IsFromServiceCall;
    }

    /**
     * @param boolean $IsFromServiceCall
     * @return ReturnMaterialAuthorization
     */
    public function setIsFromServiceCall($IsFromServiceCall)
    {
      $this->IsFromServiceCall = $IsFromServiceCall;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReceived()
    {
      return $this->IsReceived;
    }

    /**
     * @param boolean $IsReceived
     * @return ReturnMaterialAuthorization
     */
    public function setIsReceived($IsReceived)
    {
      $this->IsReceived = $IsReceived;
      return $this;
    }

    /**
     * @return ArrayOfReturnMaterialAuthorizationLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfReturnMaterialAuthorizationLine $Lines
     * @return ReturnMaterialAuthorization
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginatingDocumentId()
    {
      return $this->OriginatingDocumentId;
    }

    /**
     * @param string $OriginatingDocumentId
     * @return ReturnMaterialAuthorization
     */
    public function setOriginatingDocumentId($OriginatingDocumentId)
    {
      $this->OriginatingDocumentId = $OriginatingDocumentId;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationOriginatingDocumentType
     */
    public function getOriginatingDocumentType()
    {
      return $this->OriginatingDocumentType;
    }

    /**
     * @param ReturnMaterialAuthorizationOriginatingDocumentType $OriginatingDocumentType
     * @return ReturnMaterialAuthorization
     */
    public function setOriginatingDocumentType($OriginatingDocumentType)
    {
      $this->OriginatingDocumentType = $OriginatingDocumentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getReasonCodeDescription()
    {
      return $this->ReasonCodeDescription;
    }

    /**
     * @param string $ReasonCodeDescription
     * @return ReturnMaterialAuthorization
     */
    public function setReasonCodeDescription($ReasonCodeDescription)
    {
      $this->ReasonCodeDescription = $ReasonCodeDescription;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationReasonCodeKey
     */
    public function getReasonCodeKey()
    {
      return $this->ReasonCodeKey;
    }

    /**
     * @param ReturnMaterialAuthorizationReasonCodeKey $ReasonCodeKey
     * @return ReturnMaterialAuthorization
     */
    public function setReasonCodeKey($ReasonCodeKey)
    {
      $this->ReasonCodeKey = $ReasonCodeKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReturnDateTime()
    {
      if ($this->ReturnDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReturnDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReturnDateTime
     * @return ReturnMaterialAuthorization
     */
    public function setReturnDateTime(\DateTime $ReturnDateTime = null)
    {
      if ($ReturnDateTime == null) {
       $this->ReturnDateTime = null;
      } else {
        $this->ReturnDateTime = $ReturnDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationReturnStatus
     */
    public function getReturnStatus()
    {
      return $this->ReturnStatus;
    }

    /**
     * @param ReturnMaterialAuthorizationReturnStatus $ReturnStatus
     * @return ReturnMaterialAuthorization
     */
    public function setReturnStatus($ReturnStatus)
    {
      $this->ReturnStatus = $ReturnStatus;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationStatusCodeKey
     */
    public function getReturnStatusCodeKey()
    {
      return $this->ReturnStatusCodeKey;
    }

    /**
     * @param ReturnMaterialAuthorizationStatusCodeKey $ReturnStatusCodeKey
     * @return ReturnMaterialAuthorization
     */
    public function setReturnStatusCodeKey($ReturnStatusCodeKey)
    {
      $this->ReturnStatusCodeKey = $ReturnStatusCodeKey;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationReturnToAddress
     */
    public function getReturnToAddress()
    {
      return $this->ReturnToAddress;
    }

    /**
     * @param ReturnMaterialAuthorizationReturnToAddress $ReturnToAddress
     * @return ReturnMaterialAuthorization
     */
    public function setReturnToAddress($ReturnToAddress)
    {
      $this->ReturnToAddress = $ReturnToAddress;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationTypeKey
     */
    public function getReturnTypeKey()
    {
      return $this->ReturnTypeKey;
    }

    /**
     * @param ReturnMaterialAuthorizationTypeKey $ReturnTypeKey
     * @return ReturnMaterialAuthorization
     */
    public function setReturnTypeKey($ReturnTypeKey)
    {
      $this->ReturnTypeKey = $ReturnTypeKey;
      return $this;
    }

    /**
     * @return WarehouseKey
     */
    public function getReturnWarehouseKey()
    {
      return $this->ReturnWarehouseKey;
    }

    /**
     * @param WarehouseKey $ReturnWarehouseKey
     * @return ReturnMaterialAuthorization
     */
    public function setReturnWarehouseKey($ReturnWarehouseKey)
    {
      $this->ReturnWarehouseKey = $ReturnWarehouseKey;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationShipToAddress
     */
    public function getShipToAddress()
    {
      return $this->ShipToAddress;
    }

    /**
     * @param ReturnMaterialAuthorizationShipToAddress $ShipToAddress
     * @return ReturnMaterialAuthorization
     */
    public function setShipToAddress($ShipToAddress)
    {
      $this->ShipToAddress = $ShipToAddress;
      return $this;
    }

    /**
     * @return ShippingMethodKey
     */
    public function getShippingMethodKey()
    {
      return $this->ShippingMethodKey;
    }

    /**
     * @param ShippingMethodKey $ShippingMethodKey
     * @return ReturnMaterialAuthorization
     */
    public function setShippingMethodKey($ShippingMethodKey)
    {
      $this->ShippingMethodKey = $ShippingMethodKey;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ReturnMaterialAuthorizationType $Type
     * @return ReturnMaterialAuthorization
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
