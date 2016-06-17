<?php

class BackOfficeRoleAssignmentKey extends Key
{

    /**
     * @var CompanyKey $CompanyKey
     */
    protected $CompanyKey = null;

    /**
     * @var BackOfficeRoleKey $RoleKey
     */
    protected $RoleKey = null;

    /**
     * @var UserKey $UserKey
     */
    protected $UserKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CompanyKey
     */
    public function getCompanyKey()
    {
      return $this->CompanyKey;
    }

    /**
     * @param CompanyKey $CompanyKey
     * @return BackOfficeRoleAssignmentKey
     */
    public function setCompanyKey($CompanyKey)
    {
      $this->CompanyKey = $CompanyKey;
      return $this;
    }

    /**
     * @return BackOfficeRoleKey
     */
    public function getRoleKey()
    {
      return $this->RoleKey;
    }

    /**
     * @param BackOfficeRoleKey $RoleKey
     * @return BackOfficeRoleAssignmentKey
     */
    public function setRoleKey($RoleKey)
    {
      $this->RoleKey = $RoleKey;
      return $this;
    }

    /**
     * @return UserKey
     */
    public function getUserKey()
    {
      return $this->UserKey;
    }

    /**
     * @param UserKey $UserKey
     * @return BackOfficeRoleAssignmentKey
     */
    public function setUserKey($UserKey)
    {
      $this->UserKey = $UserKey;
      return $this;
    }

}
