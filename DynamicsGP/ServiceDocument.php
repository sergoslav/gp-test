<?php

class ServiceDocument extends BusinessObject
{

    /**
     * @var ServiceBillTo $BillTo
     */
    protected $BillTo = null;

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    /**
     * @var CustomerKey $CustomerKey
     */
    protected $CustomerKey = null;

    /**
     * @var string $CustomerName
     */
    protected $CustomerName = null;

    /**
     * @var string $CustomerPONumber
     */
    protected $CustomerPONumber = null;

    /**
     * @var \DateTime $EntryDateTime
     */
    protected $EntryDateTime = null;

    /**
     * @var \DateTime $EstimatedArrivalDateTime
     */
    protected $EstimatedArrivalDateTime = null;

    /**
     * @var \DateTime $ExchangeDate
     */
    protected $ExchangeDate = null;

    /**
     * @var float $ExchangeRate
     */
    protected $ExchangeRate = null;

    /**
     * @var string $FrontOfficeIntegrationId
     */
    protected $FrontOfficeIntegrationId = null;

    /**
     * @var ServiceDocumentKey $Key
     */
    protected $Key = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var OfficeKey $OfficeKey
     */
    protected $OfficeKey = null;

    /**
     * @var RateTypeKey $RateTypeKey
     */
    protected $RateTypeKey = null;

    /**
     * @var ShipToAddressKey $ShipToAddressKey
     */
    protected $ShipToAddressKey = null;

    /**
     * @var ServiceTransactionState $TransactionState
     */
    protected $TransactionState = null;

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
     * @return ServiceBillTo
     */
    public function getBillTo()
    {
      return $this->BillTo;
    }

    /**
     * @param ServiceBillTo $BillTo
     * @return ServiceDocument
     */
    public function setBillTo($BillTo)
    {
      $this->BillTo = $BillTo;
      return $this;
    }

    /**
     * @return CurrencyKey
     */
    public function getCurrencyKey()
    {
      return $this->CurrencyKey;
    }

    /**
     * @param CurrencyKey $CurrencyKey
     * @return ServiceDocument
     */
    public function setCurrencyKey($CurrencyKey)
    {
      $this->CurrencyKey = $CurrencyKey;
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
     * @return ServiceDocument
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
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
     * @return ServiceDocument
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
     * @return ServiceDocument
     */
    public function setCustomerPONumber($CustomerPONumber)
    {
      $this->CustomerPONumber = $CustomerPONumber;
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
     * @return ServiceDocument
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
     * @return ServiceDocument
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
     * @return \DateTime
     */
    public function getExchangeDate()
    {
      if ($this->ExchangeDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExchangeDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExchangeDate
     * @return ServiceDocument
     */
    public function setExchangeDate(\DateTime $ExchangeDate = null)
    {
      if ($ExchangeDate == null) {
       $this->ExchangeDate = null;
      } else {
        $this->ExchangeDate = $ExchangeDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate()
    {
      return $this->ExchangeRate;
    }

    /**
     * @param float $ExchangeRate
     * @return ServiceDocument
     */
    public function setExchangeRate($ExchangeRate)
    {
      $this->ExchangeRate = $ExchangeRate;
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
     * @return ServiceDocument
     */
    public function setFrontOfficeIntegrationId($FrontOfficeIntegrationId)
    {
      $this->FrontOfficeIntegrationId = $FrontOfficeIntegrationId;
      return $this;
    }

    /**
     * @return ServiceDocumentKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ServiceDocumentKey $Key
     * @return ServiceDocument
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return ServiceDocument
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
     * @return ServiceDocument
     */
    public function setOfficeKey($OfficeKey)
    {
      $this->OfficeKey = $OfficeKey;
      return $this;
    }

    /**
     * @return RateTypeKey
     */
    public function getRateTypeKey()
    {
      return $this->RateTypeKey;
    }

    /**
     * @param RateTypeKey $RateTypeKey
     * @return ServiceDocument
     */
    public function setRateTypeKey($RateTypeKey)
    {
      $this->RateTypeKey = $RateTypeKey;
      return $this;
    }

    /**
     * @return ShipToAddressKey
     */
    public function getShipToAddressKey()
    {
      return $this->ShipToAddressKey;
    }

    /**
     * @param ShipToAddressKey $ShipToAddressKey
     * @return ServiceDocument
     */
    public function setShipToAddressKey($ShipToAddressKey)
    {
      $this->ShipToAddressKey = $ShipToAddressKey;
      return $this;
    }

    /**
     * @return ServiceTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param ServiceTransactionState $TransactionState
     * @return ServiceDocument
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
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
     * @return ServiceDocument
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
     * @return ServiceDocument
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
     * @return ServiceDocument
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
     * @return ServiceDocument
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
     * @return ServiceDocument
     */
    public function setUserDefined05($UserDefined05)
    {
      $this->UserDefined05 = $UserDefined05;
      return $this;
    }

}
