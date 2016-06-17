<?php

class InventorySummary
{

    /**
     * @var BatchKey $BatchKey
     */
    protected $BatchKey = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var InventoryKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var InventoryTransactionState $TransactionState
     */
    protected $TransactionState = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BatchKey
     */
    public function getBatchKey()
    {
      return $this->BatchKey;
    }

    /**
     * @param BatchKey $BatchKey
     * @return InventorySummary
     */
    public function setBatchKey($BatchKey)
    {
      $this->BatchKey = $BatchKey;
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
     * @return InventorySummary
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
     * @return InventorySummary
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
     * @return InventoryKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param InventoryKey $Key
     * @return InventorySummary
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
     * @return InventorySummary
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
     * @return InventoryTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param InventoryTransactionState $TransactionState
     * @return InventorySummary
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

}
