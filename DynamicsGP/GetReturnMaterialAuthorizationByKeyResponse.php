<?php

class GetReturnMaterialAuthorizationByKeyResponse
{

    /**
     * @var ReturnMaterialAuthorization $GetReturnMaterialAuthorizationByKeyResult
     */
    protected $GetReturnMaterialAuthorizationByKeyResult = null;

    /**
     * @param ReturnMaterialAuthorization $GetReturnMaterialAuthorizationByKeyResult
     */
    public function __construct($GetReturnMaterialAuthorizationByKeyResult)
    {
      $this->GetReturnMaterialAuthorizationByKeyResult = $GetReturnMaterialAuthorizationByKeyResult;
    }

    /**
     * @return ReturnMaterialAuthorization
     */
    public function getGetReturnMaterialAuthorizationByKeyResult()
    {
      return $this->GetReturnMaterialAuthorizationByKeyResult;
    }

    /**
     * @param ReturnMaterialAuthorization $GetReturnMaterialAuthorizationByKeyResult
     * @return GetReturnMaterialAuthorizationByKeyResponse
     */
    public function setGetReturnMaterialAuthorizationByKeyResult($GetReturnMaterialAuthorizationByKeyResult)
    {
      $this->GetReturnMaterialAuthorizationByKeyResult = $GetReturnMaterialAuthorizationByKeyResult;
      return $this;
    }

}
