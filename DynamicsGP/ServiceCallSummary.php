<?php

class ServiceCallSummary extends ServiceDocumentSummary
{

    /**
     * @var \DateTime $ArrivalDateTime
     */
    protected $ArrivalDateTime = null;

    /**
     * @var \DateTime $CompletionDateTime
     */
    protected $CompletionDateTime = null;

    /**
     * @var \DateTime $DispatchDateTime
     */
    protected $DispatchDateTime = null;

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

    /**
     * @var ServiceCallType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDateTime()
    {
      if ($this->ArrivalDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArrivalDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArrivalDateTime
     * @return ServiceCallSummary
     */
    public function setArrivalDateTime(\DateTime $ArrivalDateTime = null)
    {
      if ($ArrivalDateTime == null) {
       $this->ArrivalDateTime = null;
      } else {
        $this->ArrivalDateTime = $ArrivalDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCompletionDateTime()
    {
      if ($this->CompletionDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CompletionDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CompletionDateTime
     * @return ServiceCallSummary
     */
    public function setCompletionDateTime(\DateTime $CompletionDateTime = null)
    {
      if ($CompletionDateTime == null) {
       $this->CompletionDateTime = null;
      } else {
        $this->CompletionDateTime = $CompletionDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDispatchDateTime()
    {
      if ($this->DispatchDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DispatchDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DispatchDateTime
     * @return ServiceCallSummary
     */
    public function setDispatchDateTime(\DateTime $DispatchDateTime = null)
    {
      if ($DispatchDateTime == null) {
       $this->DispatchDateTime = null;
      } else {
        $this->DispatchDateTime = $DispatchDateTime->format(\DateTime::ATOM);
      }
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
     * @return ServiceCallSummary
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
     * @return ServiceCallSummary
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
     * @return ServiceCallSummary
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
     * @return ServiceCallSummary
     */
    public function setTechnicianKey($TechnicianKey)
    {
      $this->TechnicianKey = $TechnicianKey;
      return $this;
    }

    /**
     * @return ServiceCallType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ServiceCallType $Type
     * @return ServiceCallSummary
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
