<?php

class ServiceDocumentSummary
{

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
     * @var ServiceDocumentKey $Key
     */
    protected $Key = null;

    /**
     * @var OfficeKey $OfficeKey
     */
    protected $OfficeKey = null;

    /**
     * @var ServiceTransactionState $TransactionState
     */
    protected $TransactionState = null;

    
    public function __construct()
    {
    
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
     * @return ServiceDocumentSummary
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
     * @return ServiceDocumentSummary
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
     * @return ServiceDocumentSummary
     */
    public function setCustomerPONumber($CustomerPONumber)
    {
      $this->CustomerPONumber = $CustomerPONumber;
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
     * @return ServiceDocumentSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return ServiceDocumentSummary
     */
    public function setOfficeKey($OfficeKey)
    {
      $this->OfficeKey = $OfficeKey;
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
     * @return ServiceDocumentSummary
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

}
