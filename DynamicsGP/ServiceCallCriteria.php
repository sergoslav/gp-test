<?php

class ServiceCallCriteria extends ServiceCallDocumentCriteria
{

    /**
     * @var LikeRestrictionOfNullableOfServiceCallType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfNullableOfServiceCallType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param LikeRestrictionOfNullableOfServiceCallType $Type
     * @return ServiceCallCriteria
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
