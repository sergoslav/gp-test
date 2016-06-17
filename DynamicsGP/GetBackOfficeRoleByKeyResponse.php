<?php

class GetBackOfficeRoleByKeyResponse
{

    /**
     * @var BackOfficeRole $GetBackOfficeRoleByKeyResult
     */
    protected $GetBackOfficeRoleByKeyResult = null;

    /**
     * @param BackOfficeRole $GetBackOfficeRoleByKeyResult
     */
    public function __construct($GetBackOfficeRoleByKeyResult)
    {
      $this->GetBackOfficeRoleByKeyResult = $GetBackOfficeRoleByKeyResult;
    }

    /**
     * @return BackOfficeRole
     */
    public function getGetBackOfficeRoleByKeyResult()
    {
      return $this->GetBackOfficeRoleByKeyResult;
    }

    /**
     * @param BackOfficeRole $GetBackOfficeRoleByKeyResult
     * @return GetBackOfficeRoleByKeyResponse
     */
    public function setGetBackOfficeRoleByKeyResult($GetBackOfficeRoleByKeyResult)
    {
      $this->GetBackOfficeRoleByKeyResult = $GetBackOfficeRoleByKeyResult;
      return $this;
    }

}
