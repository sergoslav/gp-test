<?php

class ServiceQuoteSummary extends ServiceDocumentSummary
{

    /**
     * @var MoneyAmount $DocumentTotal
     */
    protected $DocumentTotal = null;

    /**
     * @var ServiceTypeKey $ServiceTypeKey
     */
    protected $ServiceTypeKey = null;

    /**
     * @var ServiceCallStatusCodeKey $StatusCodeKey
     */
    protected $StatusCodeKey = null;

    /**
     * @var ServiceTechnicianKey $TechnicianKey
     */
    protected $TechnicianKey = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return ServiceQuoteSummary
     */
    public function setDocumentTotal($DocumentTotal)
    {
      $this->DocumentTotal = $DocumentTotal;
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
     * @return ServiceQuoteSummary
     */
    public function setServiceTypeKey($ServiceTypeKey)
    {
      $this->ServiceTypeKey = $ServiceTypeKey;
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
     * @return ServiceQuoteSummary
     */
    public function setStatusCodeKey($StatusCodeKey)
    {
      $this->StatusCodeKey = $StatusCodeKey;
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
     * @return ServiceQuoteSummary
     */
    public function setTechnicianKey($TechnicianKey)
    {
      $this->TechnicianKey = $TechnicianKey;
      return $this;
    }

}
