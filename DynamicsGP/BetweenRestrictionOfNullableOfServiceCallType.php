<?php

class BetweenRestrictionOfNullableOfServiceCallType extends ListRestrictionOfNullableOfServiceCallType
{

    /**
     * @var ServiceCallType $From
     */
    protected $From = null;

    /**
     * @var ServiceCallType $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var ServiceCallType $LessThan
     */
    protected $LessThan = null;

    /**
     * @var ServiceCallType $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ServiceCallType
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param ServiceCallType $From
     * @return BetweenRestrictionOfNullableOfServiceCallType
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return ServiceCallType
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param ServiceCallType $GreaterThan
     * @return BetweenRestrictionOfNullableOfServiceCallType
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return ServiceCallType
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param ServiceCallType $LessThan
     * @return BetweenRestrictionOfNullableOfServiceCallType
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return ServiceCallType
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param ServiceCallType $To
     * @return BetweenRestrictionOfNullableOfServiceCallType
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
