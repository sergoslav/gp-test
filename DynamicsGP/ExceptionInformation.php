<?php

class ExceptionInformation
{

    /**
     * @var string $ExceptionType
     */
    protected $ExceptionType = null;

    /**
     * @var string $HelpLink
     */
    protected $HelpLink = null;

    /**
     * @var ExceptionInformation $InnerException
     */
    protected $InnerException = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @var string $StackTrace
     */
    protected $StackTrace = null;

    /**
     * @var string $TargetSite
     */
    protected $TargetSite = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getExceptionType()
    {
      return $this->ExceptionType;
    }

    /**
     * @param string $ExceptionType
     * @return ExceptionInformation
     */
    public function setExceptionType($ExceptionType)
    {
      $this->ExceptionType = $ExceptionType;
      return $this;
    }

    /**
     * @return string
     */
    public function getHelpLink()
    {
      return $this->HelpLink;
    }

    /**
     * @param string $HelpLink
     * @return ExceptionInformation
     */
    public function setHelpLink($HelpLink)
    {
      $this->HelpLink = $HelpLink;
      return $this;
    }

    /**
     * @return ExceptionInformation
     */
    public function getInnerException()
    {
      return $this->InnerException;
    }

    /**
     * @param ExceptionInformation $InnerException
     * @return ExceptionInformation
     */
    public function setInnerException($InnerException)
    {
      $this->InnerException = $InnerException;
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
     * @return ExceptionInformation
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return ExceptionInformation
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return string
     */
    public function getStackTrace()
    {
      return $this->StackTrace;
    }

    /**
     * @param string $StackTrace
     * @return ExceptionInformation
     */
    public function setStackTrace($StackTrace)
    {
      $this->StackTrace = $StackTrace;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetSite()
    {
      return $this->TargetSite;
    }

    /**
     * @param string $TargetSite
     * @return ExceptionInformation
     */
    public function setTargetSite($TargetSite)
    {
      $this->TargetSite = $TargetSite;
      return $this;
    }

}
