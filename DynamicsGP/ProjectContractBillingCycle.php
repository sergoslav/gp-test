<?php

class ProjectContractBillingCycle extends BusinessObject
{

    /**
     * @var string $BillingFormat
     */
    protected $BillingFormat = null;

    /**
     * @var ProjectContractBillingCycleKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getBillingFormat()
    {
      return $this->BillingFormat;
    }

    /**
     * @param string $BillingFormat
     * @return ProjectContractBillingCycle
     */
    public function setBillingFormat($BillingFormat)
    {
      $this->BillingFormat = $BillingFormat;
      return $this;
    }

    /**
     * @return ProjectContractBillingCycleKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectContractBillingCycleKey $Key
     * @return ProjectContractBillingCycle
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
