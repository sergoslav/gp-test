<?php

class BetweenRestrictionOfNullableOfReturnMaterialAuthorizationType extends ListRestrictionOfNullableOfReturnMaterialAuthorizationType
{

    /**
     * @var ReturnMaterialAuthorizationType $From
     */
    protected $From = null;

    /**
     * @var ReturnMaterialAuthorizationType $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var ReturnMaterialAuthorizationType $LessThan
     */
    protected $LessThan = null;

    /**
     * @var ReturnMaterialAuthorizationType $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ReturnMaterialAuthorizationType
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param ReturnMaterialAuthorizationType $From
     * @return BetweenRestrictionOfNullableOfReturnMaterialAuthorizationType
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationType
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param ReturnMaterialAuthorizationType $GreaterThan
     * @return BetweenRestrictionOfNullableOfReturnMaterialAuthorizationType
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationType
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param ReturnMaterialAuthorizationType $LessThan
     * @return BetweenRestrictionOfNullableOfReturnMaterialAuthorizationType
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationType
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param ReturnMaterialAuthorizationType $To
     * @return BetweenRestrictionOfNullableOfReturnMaterialAuthorizationType
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
