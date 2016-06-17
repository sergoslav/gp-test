<?php

class InventoryBase extends BusinessObject
{

    /**
     * @var string $AuditTrailCode
     */
    protected $AuditTrailCode = null;

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
     * @var \DateTime $GLPostingDate
     */
    protected $GLPostingDate = null;

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
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAuditTrailCode()
    {
      return $this->AuditTrailCode;
    }

    /**
     * @param string $AuditTrailCode
     * @return InventoryBase
     */
    public function setAuditTrailCode($AuditTrailCode)
    {
      $this->AuditTrailCode = $AuditTrailCode;
      return $this;
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
     * @return InventoryBase
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
     * @return InventoryBase
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
     * @return InventoryBase
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
     * @return \DateTime
     */
    public function getGLPostingDate()
    {
      if ($this->GLPostingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->GLPostingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $GLPostingDate
     * @return InventoryBase
     */
    public function setGLPostingDate(\DateTime $GLPostingDate = null)
    {
      if ($GLPostingDate == null) {
       $this->GLPostingDate = null;
      } else {
        $this->GLPostingDate = $GLPostingDate->format(\DateTime::ATOM);
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
     * @return InventoryBase
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
     * @return InventoryBase
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
     * @return InventoryBase
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

}
