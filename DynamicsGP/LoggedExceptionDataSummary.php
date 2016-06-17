<?php

class LoggedExceptionDataSummary
{

    /**
     * @var BusinessExceptionType $BusinessExceptionType
     */
    protected $BusinessExceptionType = null;

    /**
     * @var string $BusinessObjectType
     */
    protected $BusinessObjectType = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var guid $LogId
     */
    protected $LogId = null;

    /**
     * @var \DateTime $LoggedDate
     */
    protected $LoggedDate = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $ServiceType
     */
    protected $ServiceType = null;

    /**
     * @var string $User
     */
    protected $User = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BusinessExceptionType
     */
    public function getBusinessExceptionType()
    {
      return $this->BusinessExceptionType;
    }

    /**
     * @param BusinessExceptionType $BusinessExceptionType
     * @return LoggedExceptionDataSummary
     */
    public function setBusinessExceptionType($BusinessExceptionType)
    {
      $this->BusinessExceptionType = $BusinessExceptionType;
      return $this;
    }

    /**
     * @return string
     */
    public function getBusinessObjectType()
    {
      return $this->BusinessObjectType;
    }

    /**
     * @param string $BusinessObjectType
     * @return LoggedExceptionDataSummary
     */
    public function setBusinessObjectType($BusinessObjectType)
    {
      $this->BusinessObjectType = $BusinessObjectType;
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
     * @return LoggedExceptionDataSummary
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return guid
     */
    public function getLogId()
    {
      return $this->LogId;
    }

    /**
     * @param guid $LogId
     * @return LoggedExceptionDataSummary
     */
    public function setLogId($LogId)
    {
      $this->LogId = $LogId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLoggedDate()
    {
      if ($this->LoggedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LoggedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LoggedDate
     * @return LoggedExceptionDataSummary
     */
    public function setLoggedDate(\DateTime $LoggedDate = null)
    {
      if ($LoggedDate == null) {
       $this->LoggedDate = null;
      } else {
        $this->LoggedDate = $LoggedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return LoggedExceptionDataSummary
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
      return $this->ServiceType;
    }

    /**
     * @param string $ServiceType
     * @return LoggedExceptionDataSummary
     */
    public function setServiceType($ServiceType)
    {
      $this->ServiceType = $ServiceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
      return $this->User;
    }

    /**
     * @param string $User
     * @return LoggedExceptionDataSummary
     */
    public function setUser($User)
    {
      $this->User = $User;
      return $this;
    }

}
