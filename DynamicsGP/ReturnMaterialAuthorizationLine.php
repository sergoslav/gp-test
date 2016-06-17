<?php

class ReturnMaterialAuthorizationLine extends BusinessObject
{

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
     * @var string $CustomerName
     */
    protected $CustomerName = null;

    /**
     * @var string $CustomerPONumber
     */
    protected $CustomerPONumber = null;

    /**
     * @var ArrayOfReturnMaterialAuthorizationDistribution $Distributions
     */
    protected $Distributions = null;

    /**
     * @var \DateTime $EntryDateTime
     */
    protected $EntryDateTime = null;

    /**
     * @var int $EquipmentLineSequenceNumber
     */
    protected $EquipmentLineSequenceNumber = null;

    /**
     * @var \DateTime $EstimatedArrivalDateTime
     */
    protected $EstimatedArrivalDateTime = null;

    /**
     * @var string $FrontOfficeIntegrationId
     */
    protected $FrontOfficeIntegrationId = null;

    /**
     * @var boolean $IsClosed
     */
    protected $IsClosed = null;

    /**
     * @var boolean $IsCustomerOwned
     */
    protected $IsCustomerOwned = null;

    /**
     * @var boolean $IsFactorySealed
     */
    protected $IsFactorySealed = null;

    /**
     * @var boolean $IsFromServiceCall
     */
    protected $IsFromServiceCall = null;

    /**
     * @var boolean $IsReadyToClose
     */
    protected $IsReadyToClose = null;

    /**
     * @var boolean $IsReceived
     */
    protected $IsReceived = null;

    /**
     * @var boolean $IsTravelerPrinted
     */
    protected $IsTravelerPrinted = null;

    /**
     * @var string $ItemDescription
     */
    protected $ItemDescription = null;

    /**
     * @var ItemKey $ItemKey
     */
    protected $ItemKey = null;

    /**
     * @var ServiceLineKey $Key
     */
    protected $Key = null;

    /**
     * @var ArrayOfReturnMaterialAuthorizationLineLot $Lots
     */
    protected $Lots = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var OfficeKey $OfficeKey
     */
    protected $OfficeKey = null;

    /**
     * @var string $OriginatingDocumentId
     */
    protected $OriginatingDocumentId = null;

    /**
     * @var \DateTime $PromiseDateTime
     */
    protected $PromiseDateTime = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $ReasonCodeDescription
     */
    protected $ReasonCodeDescription = null;

    /**
     * @var ReturnMaterialAuthorizationReasonCodeKey $ReasonCodeKey
     */
    protected $ReasonCodeKey = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var ReturnMaterialAuthorizationLineRepair $Repair
     */
    protected $Repair = null;

    /**
     * @var ReturnMaterialAuthorizationLineReplacement $Replacement
     */
    protected $Replacement = null;

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
     * @var string $ReturnedItemDescription
     */
    protected $ReturnedItemDescription = null;

    /**
     * @var ItemKey $ReturnedItemKey
     */
    protected $ReturnedItemKey = null;

    /**
     * @var PriceLevelKey $ReturnedPriceLevelKey
     */
    protected $ReturnedPriceLevelKey = null;

    /**
     * @var Quantity $ReturnedQuantity
     */
    protected $ReturnedQuantity = null;

    /**
     * @var MoneyAmount $ReturnedTotalAmount
     */
    protected $ReturnedTotalAmount = null;

    /**
     * @var MoneyAmount $ReturnedTotalCost
     */
    protected $ReturnedTotalCost = null;

    /**
     * @var MoneyAmount $ReturnedUnitCost
     */
    protected $ReturnedUnitCost = null;

    /**
     * @var MoneyAmount $ReturnedUnitPrice
     */
    protected $ReturnedUnitPrice = null;

    /**
     * @var string $ReturnedUofM
     */
    protected $ReturnedUofM = null;

    /**
     * @var WarehouseKey $ReturnedWarehouseKey
     */
    protected $ReturnedWarehouseKey = null;

    /**
     * @var int $SalesInvoiceComponentSequenceNumber
     */
    protected $SalesInvoiceComponentSequenceNumber = null;

    /**
     * @var SalesLineKey $SalesInvoiceLineKey
     */
    protected $SalesInvoiceLineKey = null;

    /**
     * @var SalesLineKey $SalesOrderLineKey
     */
    protected $SalesOrderLineKey = null;

    /**
     * @var SalesLineKey $SalesReturnLineKey
     */
    protected $SalesReturnLineKey = null;

    /**
     * @var ArrayOfReturnMaterialAuthorizationLineSerial $Serials
     */
    protected $Serials = null;

    /**
     * @var ServiceLineKey $ServiceLineKey
     */
    protected $ServiceLineKey = null;

    /**
     * @var ReturnMaterialAuthorizationShipToAddress $ShipToAddress
     */
    protected $ShipToAddress = null;

    /**
     * @var AddressKey $ShipToAddressKey
     */
    protected $ShipToAddressKey = null;

    /**
     * @var ShippingMethodKey $ShippingMethodKey
     */
    protected $ShippingMethodKey = null;

    /**
     * @var MoneyAmount $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var MoneyAmount $TotalCost
     */
    protected $TotalCost = null;

    /**
     * @var ServiceLineKey $TransferDocumentLineKey
     */
    protected $TransferDocumentLineKey = null;

    /**
     * @var ReturnMaterialAuthorizationTransferDocumentStatus $TransferStatus
     */
    protected $TransferStatus = null;

    /**
     * @var MoneyAmount $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var MoneyAmount $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @var string $UofM
     */
    protected $UofM = null;

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

    
    public function __construct()
    {
      parent::__construct();
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
     * @return ReturnMaterialAuthorizationLine
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
     * @return ReturnMaterialAuthorizationLine
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
     * @return ReturnMaterialAuthorizationLine
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
     * @return ReturnMaterialAuthorizationLine
     */
    public function setCreatedBy($CreatedBy)
    {
      $this->CreatedBy = $CreatedBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
      return $this->CustomerName;
    }

    /**
     * @param string $CustomerName
     * @return ReturnMaterialAuthorizationLine
     */
    public function setCustomerName($CustomerName)
    {
      $this->CustomerName = $CustomerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerPONumber()
    {
      return $this->CustomerPONumber;
    }

    /**
     * @param string $CustomerPONumber
     * @return ReturnMaterialAuthorizationLine
     */
    public function setCustomerPONumber($CustomerPONumber)
    {
      $this->CustomerPONumber = $CustomerPONumber;
      return $this;
    }

    /**
     * @return ArrayOfReturnMaterialAuthorizationDistribution
     */
    public function getDistributions()
    {
      return $this->Distributions;
    }

    /**
     * @param ArrayOfReturnMaterialAuthorizationDistribution $Distributions
     * @return ReturnMaterialAuthorizationLine
     */
    public function setDistributions($Distributions)
    {
      $this->Distributions = $Distributions;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEntryDateTime()
    {
      if ($this->EntryDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EntryDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EntryDateTime
     * @return ReturnMaterialAuthorizationLine
     */
    public function setEntryDateTime(\DateTime $EntryDateTime = null)
    {
      if ($EntryDateTime == null) {
       $this->EntryDateTime = null;
      } else {
        $this->EntryDateTime = $EntryDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getEquipmentLineSequenceNumber()
    {
      return $this->EquipmentLineSequenceNumber;
    }

    /**
     * @param int $EquipmentLineSequenceNumber
     * @return ReturnMaterialAuthorizationLine
     */
    public function setEquipmentLineSequenceNumber($EquipmentLineSequenceNumber)
    {
      $this->EquipmentLineSequenceNumber = $EquipmentLineSequenceNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEstimatedArrivalDateTime()
    {
      if ($this->EstimatedArrivalDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EstimatedArrivalDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EstimatedArrivalDateTime
     * @return ReturnMaterialAuthorizationLine
     */
    public function setEstimatedArrivalDateTime(\DateTime $EstimatedArrivalDateTime = null)
    {
      if ($EstimatedArrivalDateTime == null) {
       $this->EstimatedArrivalDateTime = null;
      } else {
        $this->EstimatedArrivalDateTime = $EstimatedArrivalDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getFrontOfficeIntegrationId()
    {
      return $this->FrontOfficeIntegrationId;
    }

    /**
     * @param string $FrontOfficeIntegrationId
     * @return ReturnMaterialAuthorizationLine
     */
    public function setFrontOfficeIntegrationId($FrontOfficeIntegrationId)
    {
      $this->FrontOfficeIntegrationId = $FrontOfficeIntegrationId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsClosed()
    {
      return $this->IsClosed;
    }

    /**
     * @param boolean $IsClosed
     * @return ReturnMaterialAuthorizationLine
     */
    public function setIsClosed($IsClosed)
    {
      $this->IsClosed = $IsClosed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCustomerOwned()
    {
      return $this->IsCustomerOwned;
    }

    /**
     * @param boolean $IsCustomerOwned
     * @return ReturnMaterialAuthorizationLine
     */
    public function setIsCustomerOwned($IsCustomerOwned)
    {
      $this->IsCustomerOwned = $IsCustomerOwned;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFactorySealed()
    {
      return $this->IsFactorySealed;
    }

    /**
     * @param boolean $IsFactorySealed
     * @return ReturnMaterialAuthorizationLine
     */
    public function setIsFactorySealed($IsFactorySealed)
    {
      $this->IsFactorySealed = $IsFactorySealed;
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
     * @return ReturnMaterialAuthorizationLine
     */
    public function setIsFromServiceCall($IsFromServiceCall)
    {
      $this->IsFromServiceCall = $IsFromServiceCall;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReadyToClose()
    {
      return $this->IsReadyToClose;
    }

    /**
     * @param boolean $IsReadyToClose
     * @return ReturnMaterialAuthorizationLine
     */
    public function setIsReadyToClose($IsReadyToClose)
    {
      $this->IsReadyToClose = $IsReadyToClose;
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
     * @return ReturnMaterialAuthorizationLine
     */
    public function setIsReceived($IsReceived)
    {
      $this->IsReceived = $IsReceived;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTravelerPrinted()
    {
      return $this->IsTravelerPrinted;
    }

    /**
     * @param boolean $IsTravelerPrinted
     * @return ReturnMaterialAuthorizationLine
     */
    public function setIsTravelerPrinted($IsTravelerPrinted)
    {
      $this->IsTravelerPrinted = $IsTravelerPrinted;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemDescription()
    {
      return $this->ItemDescription;
    }

    /**
     * @param string $ItemDescription
     * @return ReturnMaterialAuthorizationLine
     */
    public function setItemDescription($ItemDescription)
    {
      $this->ItemDescription = $ItemDescription;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getItemKey()
    {
      return $this->ItemKey;
    }

    /**
     * @param ItemKey $ItemKey
     * @return ReturnMaterialAuthorizationLine
     */
    public function setItemKey($ItemKey)
    {
      $this->ItemKey = $ItemKey;
      return $this;
    }

    /**
     * @return ServiceLineKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ServiceLineKey $Key
     * @return ReturnMaterialAuthorizationLine
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ArrayOfReturnMaterialAuthorizationLineLot
     */
    public function getLots()
    {
      return $this->Lots;
    }

    /**
     * @param ArrayOfReturnMaterialAuthorizationLineLot $Lots
     * @return ReturnMaterialAuthorizationLine
     */
    public function setLots($Lots)
    {
      $this->Lots = $Lots;
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
     * @return ReturnMaterialAuthorizationLine
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
     * @return ReturnMaterialAuthorizationLine
     */
    public function setOfficeKey($OfficeKey)
    {
      $this->OfficeKey = $OfficeKey;
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
     * @return ReturnMaterialAuthorizationLine
     */
    public function setOriginatingDocumentId($OriginatingDocumentId)
    {
      $this->OriginatingDocumentId = $OriginatingDocumentId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPromiseDateTime()
    {
      if ($this->PromiseDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PromiseDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PromiseDateTime
     * @return ReturnMaterialAuthorizationLine
     */
    public function setPromiseDateTime(\DateTime $PromiseDateTime = null)
    {
      if ($PromiseDateTime == null) {
       $this->PromiseDateTime = null;
      } else {
        $this->PromiseDateTime = $PromiseDateTime->format(\DateTime::ATOM);
      }
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
     * @return ReturnMaterialAuthorizationLine
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return ReturnMaterialAuthorizationLine
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
     * @return ReturnMaterialAuthorizationLine
     */
    public function setReasonCodeKey($ReasonCodeKey)
    {
      $this->ReasonCodeKey = $ReasonCodeKey;
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
     * @return ReturnMaterialAuthorizationLine
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationLineRepair
     */
    public function getRepair()
    {
      return $this->Repair;
    }

    /**
     * @param ReturnMaterialAuthorizationLineRepair $Repair
     * @return ReturnMaterialAuthorizationLine
     */
    public function setRepair($Repair)
    {
      $this->Repair = $Repair;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationLineReplacement
     */
    public function getReplacement()
    {
      return $this->Replacement;
    }

    /**
     * @param ReturnMaterialAuthorizationLineReplacement $Replacement
     * @return ReturnMaterialAuthorizationLine
     */
    public function setReplacement($Replacement)
    {
      $this->Replacement = $Replacement;
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
     * @return ReturnMaterialAuthorizationLine
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
     * @return ReturnMaterialAuthorizationLine
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
     * @return ReturnMaterialAuthorizationLine
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
     * @return ReturnMaterialAuthorizationLine
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
     * @return ReturnMaterialAuthorizationLine
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
     * @return ReturnMaterialAuthorizationLine
     */
    public function setReturnWarehouseKey($ReturnWarehouseKey)
    {
      $this->ReturnWarehouseKey = $ReturnWarehouseKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnedItemDescription()
    {
      return $this->ReturnedItemDescription;
    }

    /**
     * @param string $ReturnedItemDescription
     * @return ReturnMaterialAuthorizationLine
     */
    public function setReturnedItemDescription($ReturnedItemDescription)
    {
      $this->ReturnedItemDescription = $ReturnedItemDescription;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getReturnedItemKey()
    {
      return $this->ReturnedItemKey;
    }

    /**
     * @param ItemKey $ReturnedItemKey
     * @return ReturnMaterialAuthorizationLine
     */
    public function setReturnedItemKey($ReturnedItemKey)
    {
      $this->ReturnedItemKey = $ReturnedItemKey;
      return $this;
    }

    /**
     * @return PriceLevelKey
     */
    public function getReturnedPriceLevelKey()
    {
      return $this->ReturnedPriceLevelKey;
    }

    /**
     * @param PriceLevelKey $ReturnedPriceLevelKey
     * @return ReturnMaterialAuthorizationLine
     */
    public function setReturnedPriceLevelKey($ReturnedPriceLevelKey)
    {
      $this->ReturnedPriceLevelKey = $ReturnedPriceLevelKey;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getReturnedQuantity()
    {
      return $this->ReturnedQuantity;
    }

    /**
     * @param Quantity $ReturnedQuantity
     * @return ReturnMaterialAuthorizationLine
     */
    public function setReturnedQuantity($ReturnedQuantity)
    {
      $this->ReturnedQuantity = $ReturnedQuantity;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getReturnedTotalAmount()
    {
      return $this->ReturnedTotalAmount;
    }

    /**
     * @param MoneyAmount $ReturnedTotalAmount
     * @return ReturnMaterialAuthorizationLine
     */
    public function setReturnedTotalAmount($ReturnedTotalAmount)
    {
      $this->ReturnedTotalAmount = $ReturnedTotalAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getReturnedTotalCost()
    {
      return $this->ReturnedTotalCost;
    }

    /**
     * @param MoneyAmount $ReturnedTotalCost
     * @return ReturnMaterialAuthorizationLine
     */
    public function setReturnedTotalCost($ReturnedTotalCost)
    {
      $this->ReturnedTotalCost = $ReturnedTotalCost;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getReturnedUnitCost()
    {
      return $this->ReturnedUnitCost;
    }

    /**
     * @param MoneyAmount $ReturnedUnitCost
     * @return ReturnMaterialAuthorizationLine
     */
    public function setReturnedUnitCost($ReturnedUnitCost)
    {
      $this->ReturnedUnitCost = $ReturnedUnitCost;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getReturnedUnitPrice()
    {
      return $this->ReturnedUnitPrice;
    }

    /**
     * @param MoneyAmount $ReturnedUnitPrice
     * @return ReturnMaterialAuthorizationLine
     */
    public function setReturnedUnitPrice($ReturnedUnitPrice)
    {
      $this->ReturnedUnitPrice = $ReturnedUnitPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnedUofM()
    {
      return $this->ReturnedUofM;
    }

    /**
     * @param string $ReturnedUofM
     * @return ReturnMaterialAuthorizationLine
     */
    public function setReturnedUofM($ReturnedUofM)
    {
      $this->ReturnedUofM = $ReturnedUofM;
      return $this;
    }

    /**
     * @return WarehouseKey
     */
    public function getReturnedWarehouseKey()
    {
      return $this->ReturnedWarehouseKey;
    }

    /**
     * @param WarehouseKey $ReturnedWarehouseKey
     * @return ReturnMaterialAuthorizationLine
     */
    public function setReturnedWarehouseKey($ReturnedWarehouseKey)
    {
      $this->ReturnedWarehouseKey = $ReturnedWarehouseKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getSalesInvoiceComponentSequenceNumber()
    {
      return $this->SalesInvoiceComponentSequenceNumber;
    }

    /**
     * @param int $SalesInvoiceComponentSequenceNumber
     * @return ReturnMaterialAuthorizationLine
     */
    public function setSalesInvoiceComponentSequenceNumber($SalesInvoiceComponentSequenceNumber)
    {
      $this->SalesInvoiceComponentSequenceNumber = $SalesInvoiceComponentSequenceNumber;
      return $this;
    }

    /**
     * @return SalesLineKey
     */
    public function getSalesInvoiceLineKey()
    {
      return $this->SalesInvoiceLineKey;
    }

    /**
     * @param SalesLineKey $SalesInvoiceLineKey
     * @return ReturnMaterialAuthorizationLine
     */
    public function setSalesInvoiceLineKey($SalesInvoiceLineKey)
    {
      $this->SalesInvoiceLineKey = $SalesInvoiceLineKey;
      return $this;
    }

    /**
     * @return SalesLineKey
     */
    public function getSalesOrderLineKey()
    {
      return $this->SalesOrderLineKey;
    }

    /**
     * @param SalesLineKey $SalesOrderLineKey
     * @return ReturnMaterialAuthorizationLine
     */
    public function setSalesOrderLineKey($SalesOrderLineKey)
    {
      $this->SalesOrderLineKey = $SalesOrderLineKey;
      return $this;
    }

    /**
     * @return SalesLineKey
     */
    public function getSalesReturnLineKey()
    {
      return $this->SalesReturnLineKey;
    }

    /**
     * @param SalesLineKey $SalesReturnLineKey
     * @return ReturnMaterialAuthorizationLine
     */
    public function setSalesReturnLineKey($SalesReturnLineKey)
    {
      $this->SalesReturnLineKey = $SalesReturnLineKey;
      return $this;
    }

    /**
     * @return ArrayOfReturnMaterialAuthorizationLineSerial
     */
    public function getSerials()
    {
      return $this->Serials;
    }

    /**
     * @param ArrayOfReturnMaterialAuthorizationLineSerial $Serials
     * @return ReturnMaterialAuthorizationLine
     */
    public function setSerials($Serials)
    {
      $this->Serials = $Serials;
      return $this;
    }

    /**
     * @return ServiceLineKey
     */
    public function getServiceLineKey()
    {
      return $this->ServiceLineKey;
    }

    /**
     * @param ServiceLineKey $ServiceLineKey
     * @return ReturnMaterialAuthorizationLine
     */
    public function setServiceLineKey($ServiceLineKey)
    {
      $this->ServiceLineKey = $ServiceLineKey;
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
     * @return ReturnMaterialAuthorizationLine
     */
    public function setShipToAddress($ShipToAddress)
    {
      $this->ShipToAddress = $ShipToAddress;
      return $this;
    }

    /**
     * @return AddressKey
     */
    public function getShipToAddressKey()
    {
      return $this->ShipToAddressKey;
    }

    /**
     * @param AddressKey $ShipToAddressKey
     * @return ReturnMaterialAuthorizationLine
     */
    public function setShipToAddressKey($ShipToAddressKey)
    {
      $this->ShipToAddressKey = $ShipToAddressKey;
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
     * @return ReturnMaterialAuthorizationLine
     */
    public function setShippingMethodKey($ShippingMethodKey)
    {
      $this->ShippingMethodKey = $ShippingMethodKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalAmount()
    {
      return $this->TotalAmount;
    }

    /**
     * @param MoneyAmount $TotalAmount
     * @return ReturnMaterialAuthorizationLine
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalCost()
    {
      return $this->TotalCost;
    }

    /**
     * @param MoneyAmount $TotalCost
     * @return ReturnMaterialAuthorizationLine
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
      return $this;
    }

    /**
     * @return ServiceLineKey
     */
    public function getTransferDocumentLineKey()
    {
      return $this->TransferDocumentLineKey;
    }

    /**
     * @param ServiceLineKey $TransferDocumentLineKey
     * @return ReturnMaterialAuthorizationLine
     */
    public function setTransferDocumentLineKey($TransferDocumentLineKey)
    {
      $this->TransferDocumentLineKey = $TransferDocumentLineKey;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationTransferDocumentStatus
     */
    public function getTransferStatus()
    {
      return $this->TransferStatus;
    }

    /**
     * @param ReturnMaterialAuthorizationTransferDocumentStatus $TransferStatus
     * @return ReturnMaterialAuthorizationLine
     */
    public function setTransferStatus($TransferStatus)
    {
      $this->TransferStatus = $TransferStatus;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getUnitCost()
    {
      return $this->UnitCost;
    }

    /**
     * @param MoneyAmount $UnitCost
     * @return ReturnMaterialAuthorizationLine
     */
    public function setUnitCost($UnitCost)
    {
      $this->UnitCost = $UnitCost;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getUnitPrice()
    {
      return $this->UnitPrice;
    }

    /**
     * @param MoneyAmount $UnitPrice
     * @return ReturnMaterialAuthorizationLine
     */
    public function setUnitPrice($UnitPrice)
    {
      $this->UnitPrice = $UnitPrice;
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
     * @return ReturnMaterialAuthorizationLine
     */
    public function setUofM($UofM)
    {
      $this->UofM = $UofM;
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
     * @return ReturnMaterialAuthorizationLine
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
     * @return ReturnMaterialAuthorizationLine
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
     * @return ReturnMaterialAuthorizationLine
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
     * @return ReturnMaterialAuthorizationLine
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
     * @return ReturnMaterialAuthorizationLine
     */
    public function setUserDefined05($UserDefined05)
    {
      $this->UserDefined05 = $UserDefined05;
      return $this;
    }

}
