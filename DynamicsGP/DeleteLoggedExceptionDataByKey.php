<?php

class DeleteLoggedExceptionDataByKey
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
     * @return DeleteLoggedExceptionDataByKey
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
     * @return DeleteLoggedExceptionDataByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
