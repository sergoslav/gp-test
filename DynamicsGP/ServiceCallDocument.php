<?php

class ServiceCallDocument extends ServiceDocument
{

    /**
     * @var ArrayOfServiceCallDocumentAudit $Audits
     */
    protected $Audits = null;

    /**
     * @var string $CustomerReference
     */
    protected $CustomerReference = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ArrayOfServiceDistribution $Distributions
     */
    protected $Distributions = null;

    /**
     * @var MoneyAmount $DocumentTotal
     */
    protected $DocumentTotal = null;

    /**
     * @var float $EstimatedTimeToRepair
     */
    protected $EstimatedTimeToRepair = null;

    /**
     * @var boolean $IsOnHold
     */
    protected $IsOnHold = null;

    /**
     * @var ServiceCharge $LaborCharges
     */
    protected $LaborCharges = null;

    /**
     * @var ServiceCharge $MiscellaneousCharges
     */
    protected $MiscellaneousCharges = null;

    /**
     * @var ServiceCharge $PartsCharges
     */
    protected $PartsCharges = null;

    /**
     * @var PaymentTermsKey $PaymentTermsKey
     */
    protected $PaymentTermsKey = null;

    /**
     * @var MoneyAmount $PreTaxDocumentAmount
     */
    protected $PreTaxDocumentAmount = null;

    /**
     * @var PriceLevelKey $PriceLevelKey
     */
    protected $PriceLevelKey = null;

    /**
     * @var int $Priority
     */
    protected $Priority = null;

    /**
     * @var \DateTime $ResponseDateTime
     */
    protected $ResponseDateTime = null;

    /**
     * @var SalespersonKey $SalesPersonKey
     */
    protected $SalesPersonKey = null;

    /**
     * @var ServiceAreaKey $ServiceAreaKey
     */
    protected $ServiceAreaKey = null;

    /**
     * @var ServiceDocumentKey $ServiceContractKey
     */
    protected $ServiceContractKey = null;

    /**
     * @var float $ServiceContractLineSequenceNumber
     */
    protected $ServiceContractLineSequenceNumber = null;

    /**
     * @var ServiceTypeKey $ServiceTypeKey
     */
    protected $ServiceTypeKey = null;

    /**
     * @var ServiceCallShipToAddress $ShipToAddress
     */
    protected $ShipToAddress = null;

    /**
     * @var ServiceCallStatusCodeKey $StatusCodeKey
     */
    protected $StatusCodeKey = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var string $TaxExemptNumber1
     */
    protected $TaxExemptNumber1 = null;

    /**
     * @var string $TaxExemptNumber2
     */
    protected $TaxExemptNumber2 = null;

    /**
     * @var TaxScheduleKey $TaxScheduleKey
     */
    protected $TaxScheduleKey = null;

    /**
     * @var ServiceTechnicianKey $TechnicianKey
     */
    protected $TechnicianKey = null;

    /**
     * @var ServiceTimeZoneKey $TimeZoneKey
     */
    protected $TimeZoneKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfServiceCallDocumentAudit
     */
    public function getAudits()
    {
      return $this->Audits;
    }

    /**
     * @param ArrayOfServiceCallDocumentAudit $Audits
     * @return ServiceCallDocument
     */
    public function setAudits($Audits)
    {
      $this->Audits = $Audits;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
      return $this->CustomerReference;
    }

    /**
     * @param string $CustomerReference
     * @return ServiceCallDocument
     */
    public function setCustomerReference($CustomerReference)
    {
      $this->CustomerReference = $CustomerReference;
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
     * @return ServiceCallDocument
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ArrayOfServiceDistribution
     */
    public function getDistributions()
    {
      return $this->Distributions;
    }

    /**
     * @param ArrayOfServiceDistribution $Distributions
     * @return ServiceCallDocument
     */
    public function setDistributions($Distributions)
    {
      $this->Distributions = $Distributions;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getDocumentTotal()
    {
      return $this->DocumentTotal;
    }

    /**
     * @param MoneyAmount $DocumentTotal
     * @return ServiceCallDocument
     */
    public function setDocumentTotal($DocumentTotal)
    {
      $this->DocumentTotal = $DocumentTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedTimeToRepair()
    {
      return $this->EstimatedTimeToRepair;
    }

    /**
     * @param float $EstimatedTimeToRepair
     * @return ServiceCallDocument
     */
    public function setEstimatedTimeToRepair($EstimatedTimeToRepair)
    {
      $this->EstimatedTimeToRepair = $EstimatedTimeToRepair;
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
     * @return ServiceCallDocument
     */
    public function setIsOnHold($IsOnHold)
    {
      $this->IsOnHold = $IsOnHold;
      return $this;
    }

    /**
     * @return ServiceCharge
     */
    public function getLaborCharges()
    {
      return $this->LaborCharges;
    }

    /**
     * @param ServiceCharge $LaborCharges
     * @return ServiceCallDocument
     */
    public function setLaborCharges($LaborCharges)
    {
      $this->LaborCharges = $LaborCharges;
      return $this;
    }

    /**
     * @return ServiceCharge
     */
    public function getMiscellaneousCharges()
    {
      return $this->MiscellaneousCharges;
    }

    /**
     * @param ServiceCharge $MiscellaneousCharges
     * @return ServiceCallDocument
     */
    public function setMiscellaneousCharges($MiscellaneousCharges)
    {
      $this->MiscellaneousCharges = $MiscellaneousCharges;
      return $this;
    }

    /**
     * @return ServiceCharge
     */
    public function getPartsCharges()
    {
      return $this->PartsCharges;
    }

    /**
     * @param ServiceCharge $PartsCharges
     * @return ServiceCallDocument
     */
    public function setPartsCharges($PartsCharges)
    {
      $this->PartsCharges = $PartsCharges;
      return $this;
    }

    /**
     * @return PaymentTermsKey
     */
    public function getPaymentTermsKey()
    {
      return $this->PaymentTermsKey;
    }

    /**
     * @param PaymentTermsKey $PaymentTermsKey
     * @return ServiceCallDocument
     */
    public function setPaymentTermsKey($PaymentTermsKey)
    {
      $this->PaymentTermsKey = $PaymentTermsKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPreTaxDocumentAmount()
    {
      return $this->PreTaxDocumentAmount;
    }

    /**
     * @param MoneyAmount $PreTaxDocumentAmount
     * @return ServiceCallDocument
     */
    public function setPreTaxDocumentAmount($PreTaxDocumentAmount)
    {
      $this->PreTaxDocumentAmount = $PreTaxDocumentAmount;
      return $this;
    }

    /**
     * @return PriceLevelKey
     */
    public function getPriceLevelKey()
    {
      return $this->PriceLevelKey;
    }

    /**
     * @param PriceLevelKey $PriceLevelKey
     * @return ServiceCallDocument
     */
    public function setPriceLevelKey($PriceLevelKey)
    {
      $this->PriceLevelKey = $PriceLevelKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param int $Priority
     * @return ServiceCallDocument
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getResponseDateTime()
    {
      if ($this->ResponseDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ResponseDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ResponseDateTime
     * @return ServiceCallDocument
     */
    public function setResponseDateTime(\DateTime $ResponseDateTime = null)
    {
      if ($ResponseDateTime == null) {
       $this->ResponseDateTime = null;
      } else {
        $this->ResponseDateTime = $ResponseDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return SalespersonKey
     */
    public function getSalesPersonKey()
    {
      return $this->SalesPersonKey;
    }

    /**
     * @param SalespersonKey $SalesPersonKey
     * @return ServiceCallDocument
     */
    public function setSalesPersonKey($SalesPersonKey)
    {
      $this->SalesPersonKey = $SalesPersonKey;
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
     * @return ServiceCallDocument
     */
    public function setServiceAreaKey($ServiceAreaKey)
    {
      $this->ServiceAreaKey = $ServiceAreaKey;
      return $this;
    }

    /**
     * @return ServiceDocumentKey
     */
    public function getServiceContractKey()
    {
      return $this->ServiceContractKey;
    }

    /**
     * @param ServiceDocumentKey $ServiceContractKey
     * @return ServiceCallDocument
     */
    public function setServiceContractKey($ServiceContractKey)
    {
      $this->ServiceContractKey = $ServiceContractKey;
      return $this;
    }

    /**
     * @return float
     */
    public function getServiceContractLineSequenceNumber()
    {
      return $this->ServiceContractLineSequenceNumber;
    }

    /**
     * @param float $ServiceContractLineSequenceNumber
     * @return ServiceCallDocument
     */
    public function setServiceContractLineSequenceNumber($ServiceContractLineSequenceNumber)
    {
      $this->ServiceContractLineSequenceNumber = $ServiceContractLineSequenceNumber;
      return $this;
    }

    /**
     * @return ServiceTypeKey
     */
    public function getServiceTypeKey()
    {
      return $this->ServiceTypeKey;
    }

    /**
     * @param ServiceTypeKey $ServiceTypeKey
     * @return ServiceCallDocument
     */
    public function setServiceTypeKey($ServiceTypeKey)
    {
      $this->ServiceTypeKey = $ServiceTypeKey;
      return $this;
    }

    /**
     * @return ServiceCallShipToAddress
     */
    public function getShipToAddress()
    {
      return $this->ShipToAddress;
    }

    /**
     * @param ServiceCallShipToAddress $ShipToAddress
     * @return ServiceCallDocument
     */
    public function setShipToAddress($ShipToAddress)
    {
      $this->ShipToAddress = $ShipToAddress;
      return $this;
    }

    /**
     * @return ServiceCallStatusCodeKey
     */
    public function getStatusCodeKey()
    {
      return $this->StatusCodeKey;
    }

    /**
     * @param ServiceCallStatusCodeKey $StatusCodeKey
     * @return ServiceCallDocument
     */
    public function setStatusCodeKey($StatusCodeKey)
    {
      $this->StatusCodeKey = $StatusCodeKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTaxAmount()
    {
      return $this->TaxAmount;
    }

    /**
     * @param MoneyAmount $TaxAmount
     * @return ServiceCallDocument
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxExemptNumber1()
    {
      return $this->TaxExemptNumber1;
    }

    /**
     * @param string $TaxExemptNumber1
     * @return ServiceCallDocument
     */
    public function setTaxExemptNumber1($TaxExemptNumber1)
    {
      $this->TaxExemptNumber1 = $TaxExemptNumber1;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxExemptNumber2()
    {
      return $this->TaxExemptNumber2;
    }

    /**
     * @param string $TaxExemptNumber2
     * @return ServiceCallDocument
     */
    public function setTaxExemptNumber2($TaxExemptNumber2)
    {
      $this->TaxExemptNumber2 = $TaxExemptNumber2;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getTaxScheduleKey()
    {
      return $this->TaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $TaxScheduleKey
     * @return ServiceCallDocument
     */
    public function setTaxScheduleKey($TaxScheduleKey)
    {
      $this->TaxScheduleKey = $TaxScheduleKey;
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
     * @return ServiceCallDocument
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
     * @return ServiceCallDocument
     */
    public function setTimeZoneKey($TimeZoneKey)
    {
      $this->TimeZoneKey = $TimeZoneKey;
      return $this;
    }

}
