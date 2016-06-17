<?php

class EmployeeAddressKey extends ReferenceKey
{

    /**
     * @var EmployeeKey $EmployeeKey
     */
    protected $EmployeeKey = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    
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
     * @return EmployeeAddressKey
     */
    public function setEmployeeKey($EmployeeKey)
    {
      $this->EmployeeKey = $EmployeeKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return EmployeeAddressKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
