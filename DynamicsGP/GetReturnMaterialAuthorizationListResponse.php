<?php

class GetReturnMaterialAuthorizationListResponse
{

    /**
     * @var ArrayOfReturnMaterialAuthorizationSummary $GetReturnMaterialAuthorizationListResult
     */
    protected $GetReturnMaterialAuthorizationListResult = null;

    /**
     * @param ArrayOfReturnMaterialAuthorizationSummary $GetReturnMaterialAuthorizationListResult
     */
    public function __construct($GetReturnMaterialAuthorizationListResult)
    {
      $this->GetReturnMaterialAuthorizationListResult = $GetReturnMaterialAuthorizationListResult;
    }

    /**
     * @return ArrayOfReturnMaterialAuthorizationSummary
     */
    public function getGetReturnMaterialAuthorizationListResult()
    {
      return $this->GetReturnMaterialAuthorizationListResult;
    }

    /**
     * @param ArrayOfReturnMaterialAuthorizationSummary $GetReturnMaterialAuthorizationListResult
     * @return GetReturnMaterialAuthorizationListResponse
     */
    public function setGetReturnMaterialAuthorizationListResult($GetReturnMaterialAuthorizationListResult)
    {
      $this->GetReturnMaterialAuthorizationListResult = $GetReturnMaterialAuthorizationListResult;
      return $this;
    }

}
