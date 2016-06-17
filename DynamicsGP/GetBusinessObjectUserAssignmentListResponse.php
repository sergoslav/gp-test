<?php

class GetBusinessObjectUserAssignmentListResponse
{

    /**
     * @var ArrayOfBusinessObjectUserAssignment $GetBusinessObjectUserAssignmentListResult
     */
    protected $GetBusinessObjectUserAssignmentListResult = null;

    /**
     * @param ArrayOfBusinessObjectUserAssignment $GetBusinessObjectUserAssignmentListResult
     */
    public function __construct($GetBusinessObjectUserAssignmentListResult)
    {
      $this->GetBusinessObjectUserAssignmentListResult = $GetBusinessObjectUserAssignmentListResult;
    }

    /**
     * @return ArrayOfBusinessObjectUserAssignment
     */
    public function getGetBusinessObjectUserAssignmentListResult()
    {
      return $this->GetBusinessObjectUserAssignmentListResult;
    }

    /**
     * @param ArrayOfBusinessObjectUserAssignment $GetBusinessObjectUserAssignmentListResult
     * @return GetBusinessObjectUserAssignmentListResponse
     */
    public function setGetBusinessObjectUserAssignmentListResult($GetBusinessObjectUserAssignmentListResult)
    {
      $this->GetBusinessObjectUserAssignmentListResult = $GetBusinessObjectUserAssignmentListResult;
      return $this;
    }

}
