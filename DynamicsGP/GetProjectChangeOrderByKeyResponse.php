<?php

class GetProjectChangeOrderByKeyResponse
{

    /**
     * @var ProjectChangeOrder $GetProjectChangeOrderByKeyResult
     */
    protected $GetProjectChangeOrderByKeyResult = null;

    /**
     * @param ProjectChangeOrder $GetProjectChangeOrderByKeyResult
     */
    public function __construct($GetProjectChangeOrderByKeyResult)
    {
      $this->GetProjectChangeOrderByKeyResult = $GetProjectChangeOrderByKeyResult;
    }

    /**
     * @return ProjectChangeOrder
     */
    public function getGetProjectChangeOrderByKeyResult()
    {
      return $this->GetProjectChangeOrderByKeyResult;
    }

    /**
     * @param ProjectChangeOrder $GetProjectChangeOrderByKeyResult
     * @return GetProjectChangeOrderByKeyResponse
     */
    public function setGetProjectChangeOrderByKeyResult($GetProjectChangeOrderByKeyResult)
    {
      $this->GetProjectChangeOrderByKeyResult = $GetProjectChangeOrderByKeyResult;
      return $this;
    }

}
