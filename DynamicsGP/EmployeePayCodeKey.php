<?php

class EmployeePayCodeKey extends ReferenceKey
{

    /**
     * @var EmployeeKey $EmployeeKey
     */
    protected $EmployeeKey = null;

    /**
     * @var PayCodeKey $PayCodeKey
     */
    protected $PayCodeKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return EmployeeKey
     */
    public function getEmployeeKey()
    {
      return $this->EmployeeKey;
    }

    /**
     * @param EmployeeKey $EmployeeKey
     * @return EmployeePayCodeKey
     */
    public function setEmployeeKey($EmployeeKey)
    {
      $this->EmployeeKey = $EmployeeKey;
      return $this;
    }

    /**
     * @return PayCodeKey
     */
    public function getPayCodeKey()
    {
      return $this->PayCodeKey;
    }

    /**
     * @param PayCodeKey $PayCodeKey
     * @return EmployeePayCodeKey
     */
    public function setPayCodeKey($PayCodeKey)
    {
      $this->PayCodeKey = $PayCodeKey;
      return $this;
    }

}
