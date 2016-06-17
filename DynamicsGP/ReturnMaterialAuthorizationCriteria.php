<?php

class ReturnMaterialAuthorizationCriteria extends ServiceDocumentCriteria
{

    /**
     * @var LikeRestrictionOfstring $ReturnStatusCodeId
     */
    protected $ReturnStatusCodeId = null;

    /**
     * @var LikeRestrictionOfstring $ReturnTypeId
     */
    protected $ReturnTypeId = null;

    /**
     * @var ReturnScope $Scope
     */
    protected $Scope = null;

    /**
     * @var ListRestrictionOfNullableOfReturnMaterialAuthorizationType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getReturnStatusCodeId()
    {
      return $this->ReturnStatusCodeId;
    }

    /**
     * @param LikeRestrictionOfstring $ReturnStatusCodeId
     * @return ReturnMaterialAuthorizationCriteria
     */
    public function setReturnStatusCodeId($ReturnStatusCodeId)
    {
      $this->ReturnStatusCodeId = $ReturnStatusCodeId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getReturnTypeId()
    {
      return $this->ReturnTypeId;
    }

    /**
     * @param LikeRestrictionOfstring $ReturnTypeId
     * @return ReturnMaterialAuthorizationCriteria
     */
    public function setReturnTypeId($ReturnTypeId)
    {
      $this->ReturnTypeId = $ReturnTypeId;
      return $this;
    }

    /**
     * @return ReturnScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param ReturnScope $Scope
     * @return ReturnMaterialAuthorizationCriteria
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfReturnMaterialAuthorizationType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ListRestrictionOfNullableOfReturnMaterialAuthorizationType $Type
     * @return ReturnMaterialAuthorizationCriteria
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
