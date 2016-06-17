<?php

class GetBackOfficeRoleListResponse
{

    /**
     * @var ArrayOfBackOfficeRole $GetBackOfficeRoleListResult
     */
    protected $GetBackOfficeRoleListResult = null;

    /**
     * @param ArrayOfBackOfficeRole $GetBackOfficeRoleListResult
     */
    public function __construct($GetBackOfficeRoleListResult)
    {
      $this->GetBackOfficeRoleListResult = $GetBackOfficeRoleListResult;
    }

    /**
     * @return ArrayOfBackOfficeRole
     */
    public function getGetBackOfficeRoleListResult()
    {
      return $this->GetBackOfficeRoleListResult;
    }

    /**
     * @param ArrayOfBackOfficeRole $GetBackOfficeRoleListResult
     * @return GetBackOfficeRoleListResponse
     */
    public function setGetBackOfficeRoleListResult($GetBackOfficeRoleListResult)
    {
      $this->GetBackOfficeRoleListResult = $GetBackOfficeRoleListResult;
      return $this;
    }

}
