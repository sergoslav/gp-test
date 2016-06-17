<?php

class GetLoggedValidationResultByKey
{

    /**
     * @var guid $logId
     */
    protected $logId = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param guid $logId
     * @param Context $context
     */
    public function __construct($logId, $context)
    {
      $this->logId = $logId;
      $this->context = $context;
    }

    /**
     * @return guid
     */
    public function getLogId()
    {
      return $this->logId;
    }

    /**
     * @param guid $logId
     * @return GetLoggedValidationResultByKey
     */
    public function setLogId($logId)
    {
      $this->logId = $logId;
      return $this;
    }

    /**
     * @return Context
     */
    public function getContext()
    {
      return $this->context;
    }

    /**
     * @param Context $context
     * @return GetLoggedValidationResultByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
