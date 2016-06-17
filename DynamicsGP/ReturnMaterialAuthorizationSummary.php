<?php

class ReturnMaterialAuthorizationSummary extends ServiceDocumentSummary
{

    /**
     * @var ReturnMaterialAuthorizationStatusCodeKey $ReturnStatusCodeKey
     */
    protected $ReturnStatusCodeKey = null;

    /**
     * @var ReturnMaterialAuthorizationTypeKey $ReturnTypeKey
     */
    protected $ReturnTypeKey = null;

    /**
     * @var ReturnMaterialAuthorizationType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ReturnMaterialAuthorizationStatusCodeKey
     */
    public function getReturnStatusCodeKey()
    {
      return $this->ReturnStatusCodeKey;
    }

    /**
     * @param ReturnMaterialAuthorizationStatusCodeKey $ReturnStatusCodeKey
     * @return ReturnMaterialAuthorizationSummary
     */
    public function setReturnStatusCodeKey($ReturnStatusCodeKey)
    {
      $this->ReturnStatusCodeKey = $ReturnStatusCodeKey;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationTypeKey
     */
    public function getReturnTypeKey()
    {
      return $this->ReturnTypeKey;
    }

    /**
     * @param ReturnMaterialAuthorizationTypeKey $ReturnTypeKey
     * @return ReturnMaterialAuthorizationSummary
     */
    public function setReturnTypeKey($ReturnTypeKey)
    {
      $this->ReturnTypeKey = $ReturnTypeKey;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ReturnMaterialAuthorizationType $Type
     * @return ReturnMaterialAuthorizationSummary
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
