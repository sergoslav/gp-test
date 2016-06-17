<?php

class PurchaseOrderSummary
{

    /**
     * @var BuyerKey $BuyerKey
     */
    protected $BuyerKey = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var PurchaseTransactionKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var MoneyAmount $RemainingSubtotal
     */
    protected $RemainingSubtotal = null;

    /**
     * @var \DateTime $RequestedDate
     */
    protected $RequestedDate = null;

    /**
     * @var PurchaseOrderStatus $Status
     */
    protected $Status = null;

    /**
     * @var PurchaseTransactionState $TransactionState
     */
    protected $TransactionState = null;

    /**
     * @var PurchaseOrderType $Type
     */
    protected $Type = null;

    /**
     * @var VendorKey $VendorKey
     */
    protected $VendorKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BuyerKey
     */
    public function getBuyerKey()
    {
      return $this->BuyerKey;
    }

    /**
     * @param BuyerKey $BuyerKey
     * @return PurchaseOrderSummary
     */
    public function setBuyerKey($BuyerKey)
    {
      $this->BuyerKey = $BuyerKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->CreatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate
     * @return PurchaseOrderSummary
     */
    public function setCreatedDate(\DateTime $CreatedDate = null)
    {
      if ($CreatedDate == null) {
       $this->CreatedDate = null;
      } else {
        $this->CreatedDate = $CreatedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return PurchaseOrderSummary
     */
    public function setDate(\DateTime $Date = null)
    {
      if ($Date == null) {
       $this->Date = null;
      } else {
        $this->Date = $Date->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return PurchaseTransactionKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PurchaseTransactionKey $Key
     * @return PurchaseOrderSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate()
    {
      if ($this->ModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDate
     * @return PurchaseOrderSummary
     */
    public function setModifiedDate(\DateTime $ModifiedDate = null)
    {
      if ($ModifiedDate == null) {
       $this->ModifiedDate = null;
      } else {
        $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getRemainingSubtotal()
    {
      return $this->RemainingSubtotal;
    }

    /**
     * @param MoneyAmount $RemainingSubtotal
     * @return PurchaseOrderSummary
     */
    public function setRemainingSubtotal($RemainingSubtotal)
    {
      $this->RemainingSubtotal = $RemainingSubtotal;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDate()
    {
      if ($this->RequestedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RequestedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RequestedDate
     * @return PurchaseOrderSummary
     */
    public function setRequestedDate(\DateTime $RequestedDate = null)
    {
      if ($RequestedDate == null) {
       $this->RequestedDate = null;
      } else {
        $this->RequestedDate = $RequestedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return PurchaseOrderStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param PurchaseOrderStatus $Status
     * @return PurchaseOrderSummary
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return PurchaseTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param PurchaseTransactionState $TransactionState
     * @return PurchaseOrderSummary
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

    /**
     * @return PurchaseOrderType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param PurchaseOrderType $Type
     * @return PurchaseOrderSummary
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return VendorKey
     */
    public function getVendorKey()
    {
      return $this->VendorKey;
    }

    /**
     * @param VendorKey $VendorKey
     * @return PurchaseOrderSummary
     */
    public function setVendorKey($VendorKey)
    {
      $this->VendorKey = $VendorKey;
      return $this;
    }

}
