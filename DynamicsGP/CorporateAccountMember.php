<?php

class CorporateAccountMember extends BusinessObject
{

    /**
     * @var boolean $DeleteOnUpdate
     */
    protected $DeleteOnUpdate = null;

    /**
     * @var CorporateAccountMemberKey $Key
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
     * @return CorporateAccountMember
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
      return $this;
    }

    /**
     * @return CorporateAccountMemberKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param CorporateAccountMemberKey $Key
     * @return CorporateAccountMember
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
