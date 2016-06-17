<?php

class SalesTrackingNumber extends BusinessObject
{

    /**
     * @var boolean $DeleteOnUpdate
     */
    protected $DeleteOnUpdate = null;

    /**
     * @var SalesTrackingNumberKey $Key
     */
    protected $Key = null;

    
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
     * @return SalesTrackingNumber
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
      return $this;
    }

    /**
     * @return SalesTrackingNumberKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesTrackingNumberKey $Key
     * @return SalesTrackingNumber
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
