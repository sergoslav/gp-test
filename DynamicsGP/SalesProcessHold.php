<?php

class SalesProcessHold extends BusinessObject
{

    /**
     * @var boolean $DeleteOnUpdate
     */
    protected $DeleteOnUpdate = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var \DateTime $HoldDateTime
     */
    protected $HoldDateTime = null;

    /**
     * @var boolean $IsDeleted
     */
    protected $IsDeleted = null;

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
     * @var SalesProcessHoldKey $Key
     */
    protected $Key = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $User
     */
    protected $User = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getDeleteOnUpdate()
    {
      return $this->DeleteOnUpdate;
    }

    /**
     * @param boolean $DeleteOnUpdate
     * @return SalesProcessHold
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
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
     * @return SalesProcessHold
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getHoldDateTime()
    {
      if ($this->HoldDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->HoldDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $HoldDateTime
     * @return SalesProcessHold
     */
    public function setHoldDateTime(\DateTime $HoldDateTime = null)
    {
      if ($HoldDateTime == null) {
       $this->HoldDateTime = null;
      } else {
        $this->HoldDateTime = $HoldDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDeleted()
    {
      return $this->IsDeleted;
    }

    /**
     * @param boolean $IsDeleted
     * @return SalesProcessHold
     */
    public function setIsDeleted($IsDeleted)
    {
      $this->IsDeleted = $IsDeleted;
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
     * @return SalesProcessHold
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
     * @return SalesProcessHold
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
     * @return SalesProcessHold
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
     * @return SalesProcessHold
     */
    public function setIsTransferHold($IsTransferHold)
    {
      $this->IsTransferHold = $IsTransferHold;
      return $this;
    }

    /**
     * @return SalesProcessHoldKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesProcessHoldKey $Key
     * @return SalesProcessHold
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return SalesProcessHold
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
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
     * @return SalesProcessHold
     */
    public function setUser($User)
    {
      $this->User = $User;
      return $this;
    }

}
