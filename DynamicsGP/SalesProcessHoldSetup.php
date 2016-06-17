<?php

class SalesProcessHoldSetup extends BusinessObject
{

    /**
     * @var string $CreatedBy
     */
    protected $CreatedBy = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $IsFulfillHold
     */
    protected $IsFulfillHold = null;

    /**
     * @var boolean $IsPostHold
     */
    protected $IsPostHold = null;

    /**
     * @var boolean $IsPrintHold
     */
    protected $IsPrintHold = null;

    /**
     * @var boolean $IsTransferHold
     */
    protected $IsTransferHold = null;

    /**
     * @var SalesProcessHoldSetupKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
      return $this->CreatedBy;
    }

    /**
     * @param string $CreatedBy
     * @return SalesProcessHoldSetup
     */
    public function setCreatedBy($CreatedBy)
    {
      $this->CreatedBy = $CreatedBy;
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
     * @return SalesProcessHoldSetup
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
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return SalesProcessHoldSetup
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFulfillHold()
    {
      return $this->IsFulfillHold;
    }

    /**
     * @param boolean $IsFulfillHold
     * @return SalesProcessHoldSetup
     */
    public function setIsFulfillHold($IsFulfillHold)
    {
      $this->IsFulfillHold = $IsFulfillHold;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPostHold()
    {
      return $this->IsPostHold;
    }

    /**
     * @param boolean $IsPostHold
     * @return SalesProcessHoldSetup
     */
    public function setIsPostHold($IsPostHold)
    {
      $this->IsPostHold = $IsPostHold;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPrintHold()
    {
      return $this->IsPrintHold;
    }

    /**
     * @param boolean $IsPrintHold
     * @return SalesProcessHoldSetup
     */
    public function setIsPrintHold($IsPrintHold)
    {
      $this->IsPrintHold = $IsPrintHold;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTransferHold()
    {
      return $this->IsTransferHold;
    }

    /**
     * @param boolean $IsTransferHold
     * @return SalesProcessHoldSetup
     */
    public function setIsTransferHold($IsTransferHold)
    {
      $this->IsTransferHold = $IsTransferHold;
      return $this;
    }

    /**
     * @return SalesProcessHoldSetupKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesProcessHoldSetupKey $Key
     * @return SalesProcessHoldSetup
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
     * @return SalesProcessHoldSetup
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
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return SalesProcessHoldSetup
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
