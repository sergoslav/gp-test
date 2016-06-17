<?php

class LoggedExceptionData
{

    /**
     * @var string $BusinessObjectType
     */
    protected $BusinessObjectType = null;

    /**
     * @var Context $Context
     */
    protected $Context = null;

    /**
     * @var ExceptionInformation $ExceptionDetail
     */
    protected $ExceptionDetail = null;

    /**
     * @var BusinessExceptionType $ExceptionType
     */
    protected $ExceptionType = null;

    /**
     * @var guid $LogId
     */
    protected $LogId = null;

    /**
     * @var \DateTime $LoggedDate
     */
    protected $LoggedDate = null;

    /**
     * @var string $RequestXml
     */
    protected $RequestXml = null;

    /**
     * @var string $ServiceType
     */
    protected $ServiceType = null;

    /**
     * @var string $User
     */
    protected $User = null;

    /**
     * @var ValidationResult $ValidationResult
     */
    protected $ValidationResult = null;

    
    public function __construct()
    {
    
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
     * @return LoggedExceptionData
     */
    public function setBusinessObjectType($BusinessObjectType)
    {
      $this->BusinessObjectType = $BusinessObjectType;
      return $this;
    }

    /**
     * @return Context
     */
    public function getContext()
    {
      return $this->Context;
    }

    /**
     * @param Context $Context
     * @return LoggedExceptionData
     */
    public function setContext($Context)
    {
      $this->Context = $Context;
      return $this;
    }

    /**
     * @return ExceptionInformation
     */
    public function getExceptionDetail()
    {
      return $this->ExceptionDetail;
    }

    /**
     * @param ExceptionInformation $ExceptionDetail
     * @return LoggedExceptionData
     */
    public function setExceptionDetail($ExceptionDetail)
    {
      $this->ExceptionDetail = $ExceptionDetail;
      return $this;
    }

    /**
     * @return BusinessExceptionType
     */
    public function getExceptionType()
    {
      return $this->ExceptionType;
    }

    /**
     * @param BusinessExceptionType $ExceptionType
     * @return LoggedExceptionData
     */
    public function setExceptionType($ExceptionType)
    {
      $this->ExceptionType = $ExceptionType;
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
     * @return LoggedExceptionData
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
     * @return LoggedExceptionData
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
    public function getRequestXml()
    {
      return $this->RequestXml;
    }

    /**
     * @param string $RequestXml
     * @return LoggedExceptionData
     */
    public function setRequestXml($RequestXml)
    {
      $this->RequestXml = $RequestXml;
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
     * @return LoggedExceptionData
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
     * @return LoggedExceptionData
     */
    public function setUser($User)
    {
      $this->User = $User;
      return $this;
    }

    /**
     * @return ValidationResult
     */
    public function getValidationResult()
    {
      return $this->ValidationResult;
    }

    /**
     * @param ValidationResult $ValidationResult
     * @return LoggedExceptionData
     */
    public function setValidationResult($ValidationResult)
    {
      $this->ValidationResult = $ValidationResult;
      return $this;
    }

}
