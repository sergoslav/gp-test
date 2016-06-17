<?php

class GetUserAssignableBusinessObjectListResponse
{

    /**
     * @var ArrayOfUserAssignableBusinessObject $GetUserAssignableBusinessObjectListResult
     */
    protected $GetUserAssignableBusinessObjectListResult = null;

    /**
     * @param ArrayOfUserAssignableBusinessObject $GetUserAssignableBusinessObjectListResult
     */
    public function __construct($GetUserAssignableBusinessObjectListResult)
    {
      $this->GetUserAssignableBusinessObjectListResult = $GetUserAssignableBusinessObjectListResult;
    }

    /**
     * @return ArrayOfUserAssignableBusinessObject
     */
    public function getGetUserAssignableBusinessObjectListResult()
    {
      return $this->GetUserAssignableBusinessObjectListResult;
    }

    /**
     * @param ArrayOfUserAssignableBusinessObject $GetUserAssignableBusinessObjectListResult
     * @return GetUserAssignableBusinessObjectListResponse
     */
    public function setGetUserAssignableBusinessObjectListResult($GetUserAssignableBusinessObjectListResult)
    {
      $this->GetUserAssignableBusinessObjectListResult = $GetUserAssignableBusinessObjectListResult;
      return $this;
    }

}
