<?php

class EmployeePayCodeCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $EmployeeKeyId
     */
    protected $EmployeeKeyId = null;

    /**
     * @var RestrictionOfNullableOfboolean $IsInactive
     */
    protected $IsInactive = null;

    /**
     * @var RestrictionOfNullableOfboolean $IsTaxable
     */
    protected $IsTaxable = null;

    /**
     * @var LikeRestrictionOfstring $PayCodeKeyId
     */
    protected $PayCodeKeyId = null;

    /**
     * @var ListRestrictionOfNullableOfCompensationPeriod $PayPeriod
     */
    protected $PayPeriod = null;

    /**
     * @var BetweenRestrictionOfNullableOfdecimal $PayRate
     */
    protected $PayRate = null;

    /**
     * @var ListRestrictionOfNullableOfEmployeePayTypes $PayType
     */
    protected $PayType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getEmployeeKeyId()
    {
      return $this->EmployeeKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $EmployeeKeyId
     * @return EmployeePayCodeCriteria
     */
    public function setEmployeeKeyId($EmployeeKeyId)
    {
      $this->EmployeeKeyId = $EmployeeKeyId;
      return $this;
    }

    /**
     * @return RestrictionOfNullableOfboolean
     */
    public function getIsInactive()
    {
      return $this->IsInactive;
    }

    /**
     * @param RestrictionOfNullableOfboolean $IsInactive
     * @return EmployeePayCodeCriteria
     */
    public function setIsInactive($IsInactive)
    {
      $this->IsInactive = $IsInactive;
      return $this;
    }

    /**
     * @return RestrictionOfNullableOfboolean
     */
    public function getIsTaxable()
    {
      return $this->IsTaxable;
    }

    /**
     * @param RestrictionOfNullableOfboolean $IsTaxable
     * @return EmployeePayCodeCriteria
     */
    public function setIsTaxable($IsTaxable)
    {
      $this->IsTaxable = $IsTaxable;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getPayCodeKeyId()
    {
      return $this->PayCodeKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $PayCodeKeyId
     * @return EmployeePayCodeCriteria
     */
    public function setPayCodeKeyId($PayCodeKeyId)
    {
      $this->PayCodeKeyId = $PayCodeKeyId;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfCompensationPeriod
     */
    public function getPayPeriod()
    {
      return $this->PayPeriod;
    }

    /**
     * @param ListRestrictionOfNullableOfCompensationPeriod $PayPeriod
     * @return EmployeePayCodeCriteria
     */
    public function setPayPeriod($PayPeriod)
    {
      $this->PayPeriod = $PayPeriod;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdecimal
     */
    public function getPayRate()
    {
      return $this->PayRate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdecimal $PayRate
     * @return EmployeePayCodeCriteria
     */
    public function setPayRate($PayRate)
    {
      $this->PayRate = $PayRate;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfEmployeePayTypes
     */
    public function getPayType()
    {
      return $this->PayType;
    }

    /**
     * @param ListRestrictionOfNullableOfEmployeePayTypes $PayType
     * @return EmployeePayCodeCriteria
     */
    public function setPayType($PayType)
    {
      $this->PayType = $PayType;
      return $this;
    }

}
