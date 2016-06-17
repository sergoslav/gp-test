<?php

class PurchaseInvoiceApplyReceiptKey extends TransactionKey
{

    /**
     * @var int $LineSequenceNumber
     */
    protected $LineSequenceNumber = null;

    /**
     * @var PurchaseTransactionKey $PurchaseTransactionKey
     */
    protected $PurchaseTransactionKey = null;

    /**
     * @var PurchaseTransactionKey $ReceiptKey
     */
    protected $ReceiptKey = null;

    /**
     * @var int $ReceiptLineSequenceNumber
     */
    protected $ReceiptLineSequenceNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getLineSequenceNumber()
    {
      return $this->LineSequenceNumber;
    }

    /**
     * @param int $LineSequenceNumber
     * @return PurchaseInvoiceApplyReceiptKey
     */
    public function setLineSequenceNumber($LineSequenceNumber)
    {
      $this->LineSequenceNumber = $LineSequenceNumber;
      return $this;
    }

    /**
     * @return PurchaseTransactionKey
     */
    public function getPurchaseTransactionKey()
    {
      return $this->PurchaseTransactionKey;
    }

    /**
     * @param PurchaseTransactionKey $PurchaseTransactionKey
     * @return PurchaseInvoiceApplyReceiptKey
     */
    public function setPurchaseTransactionKey($PurchaseTransactionKey)
    {
      $this->PurchaseTransactionKey = $PurchaseTransactionKey;
      return $this;
    }

    /**
     * @return PurchaseTransactionKey
     */
    public function getReceiptKey()
    {
      return $this->ReceiptKey;
    }

    /**
     * @param PurchaseTransactionKey $ReceiptKey
     * @return PurchaseInvoiceApplyReceiptKey
     */
    public function setReceiptKey($ReceiptKey)
    {
      $this->ReceiptKey = $ReceiptKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getReceiptLineSequenceNumber()
    {
      return $this->ReceiptLineSequenceNumber;
    }

    /**
     * @param int $ReceiptLineSequenceNumber
     * @return PurchaseInvoiceApplyReceiptKey
     */
    public function setReceiptLineSequenceNumber($ReceiptLineSequenceNumber)
    {
      $this->ReceiptLineSequenceNumber = $ReceiptLineSequenceNumber;
      return $this;
    }

}
