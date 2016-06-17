<?php

class GetBackOfficeRoleAssignmentListResponse
{

    /**
     * @var ArrayOfBackOfficeRoleAssignment $GetBackOfficeRoleAssignmentListResult
     */
    protected $GetBackOfficeRoleAssignmentListResult = null;

    /**
     * @param ArrayOfBackOfficeRoleAssignment $GetBackOfficeRoleAssignmentListResult
     */
    public function __construct($GetBackOfficeRoleAssignmentListResult)
    {
      $this->GetBackOfficeRoleAssignmentListResult = $GetBackOfficeRoleAssignmentListResult;
    }

    /**
     * @return ArrayOfBackOfficeRoleAssignment
     */
    public function getGetBackOfficeRoleAssignmentListResult()
    {
      return $this->GetBackOfficeRoleAssignmentListResult;
    }

    /**
     * @param ArrayOfBackOfficeRoleAssignment $GetBackOfficeRoleAssignmentListResult
     * @return GetBackOfficeRoleAssignmentListResponse
     */
    public function setGetBackOfficeRoleAssignmentListResult($GetBackOfficeRoleAssignmentListResult)
    {
      $this->GetBackOfficeRoleAssignmentListResult = $GetBackOfficeRoleAssignmentListResult;
      return $this;
    }

}
