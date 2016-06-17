<?php

class BackOfficeRoleAssignment extends BusinessObject
{

    /**
     * @var BackOfficeRoleAssignmentKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BackOfficeRoleAssignmentKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param BackOfficeRoleAssignmentKey $Key
     * @return BackOfficeRoleAssignment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
