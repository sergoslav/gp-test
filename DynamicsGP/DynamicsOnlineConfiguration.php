<?php

class DynamicsOnlineConfiguration extends BusinessObject
{

    /**
     * @var CompanyKey $CompanyKey
     */
    protected $CompanyKey = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var CustomerKey $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var PaymentCardTypeKey $DynamicsOnlineCardType
     */
    protected $DynamicsOnlineCardType = null;

    /**
     * @var SalesDocumentKey $ECommInvoiceType
     */
    protected $ECommInvoiceType = null;

    /**
     * @var SalesDocumentKey $ECommOrderType
     */
    protected $ECommOrderType = null;

    /**
     * @var boolean $IsOnlineCommerceActive
     */
    protected $IsOnlineCommerceActive = null;

    /**
     * @var boolean $IsPaymentServicesActive
     */
    protected $IsPaymentServicesActive = null;

    /**
     * @var string $OnlineCertificate
     */
    protected $OnlineCertificate = null;

    /**
     * @var string $OnlineCommerceAccountNumber
     */
    protected $OnlineCommerceAccountNumber = null;

    /**
     * @var string $OnlineCommerceOrganizationID
     */
    protected $OnlineCommerceOrganizationID = null;

    /**
     * @var string $PaymentServicesId
     */
    protected $PaymentServicesId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CompanyKey
     */
    public function getCompanyKey()
    {
      return $this->CompanyKey;
    }

    /**
     * @param CompanyKey $CompanyKey
     * @return DynamicsOnlineConfiguration
     */
    public function setCompanyKey($CompanyKey)
    {
      $this->CompanyKey = $CompanyKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return DynamicsOnlineConfiguration
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return CustomerKey
     */
    public function getCustomerNumber()
    {
      return $this->CustomerNumber;
    }

    /**
     * @param CustomerKey $CustomerNumber
     * @return DynamicsOnlineConfiguration
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

    /**
     * @return PaymentCardTypeKey
     */
    public function getDynamicsOnlineCardType()
    {
      return $this->DynamicsOnlineCardType;
    }

    /**
     * @param PaymentCardTypeKey $DynamicsOnlineCardType
     * @return DynamicsOnlineConfiguration
     */
    public function setDynamicsOnlineCardType($DynamicsOnlineCardType)
    {
      $this->DynamicsOnlineCardType = $DynamicsOnlineCardType;
      return $this;
    }

    /**
     * @return SalesDocumentKey
     */
    public function getECommInvoiceType()
    {
      return $this->ECommInvoiceType;
    }

    /**
     * @param SalesDocumentKey $ECommInvoiceType
     * @return DynamicsOnlineConfiguration
     */
    public function setECommInvoiceType($ECommInvoiceType)
    {
      $this->ECommInvoiceType = $ECommInvoiceType;
      return $this;
    }

    /**
     * @return SalesDocumentKey
     */
    public function getECommOrderType()
    {
      return $this->ECommOrderType;
    }

    /**
     * @param SalesDocumentKey $ECommOrderType
     * @return DynamicsOnlineConfiguration
     */
    public function setECommOrderType($ECommOrderType)
    {
      $this->ECommOrderType = $ECommOrderType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOnlineCommerceActive()
    {
      return $this->IsOnlineCommerceActive;
    }

    /**
     * @param boolean $IsOnlineCommerceActive
     * @return DynamicsOnlineConfiguration
     */
    public function setIsOnlineCommerceActive($IsOnlineCommerceActive)
    {
      $this->IsOnlineCommerceActive = $IsOnlineCommerceActive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPaymentServicesActive()
    {
      return $this->IsPaymentServicesActive;
    }

    /**
     * @param boolean $IsPaymentServicesActive
     * @return DynamicsOnlineConfiguration
     */
    public function setIsPaymentServicesActive($IsPaymentServicesActive)
    {
      $this->IsPaymentServicesActive = $IsPaymentServicesActive;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnlineCertificate()
    {
      return $this->OnlineCertificate;
    }

    /**
     * @param string $OnlineCertificate
     * @return DynamicsOnlineConfiguration
     */
    public function setOnlineCertificate($OnlineCertificate)
    {
      $this->OnlineCertificate = $OnlineCertificate;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnlineCommerceAccountNumber()
    {
      return $this->OnlineCommerceAccountNumber;
    }

    /**
     * @param string $OnlineCommerceAccountNumber
     * @return DynamicsOnlineConfiguration
     */
    public function setOnlineCommerceAccountNumber($OnlineCommerceAccountNumber)
    {
      $this->OnlineCommerceAccountNumber = $OnlineCommerceAccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnlineCommerceOrganizationID()
    {
      return $this->OnlineCommerceOrganizationID;
    }

    /**
     * @param string $OnlineCommerceOrganizationID
     * @return DynamicsOnlineConfiguration
     */
    public function setOnlineCommerceOrganizationID($OnlineCommerceOrganizationID)
    {
      $this->OnlineCommerceOrganizationID = $OnlineCommerceOrganizationID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentServicesId()
    {
      return $this->PaymentServicesId;
    }

    /**
     * @param string $PaymentServicesId
     * @return DynamicsOnlineConfiguration
     */
    public function setPaymentServicesId($PaymentServicesId)
    {
      $this->PaymentServicesId = $PaymentServicesId;
      return $this;
    }

}
