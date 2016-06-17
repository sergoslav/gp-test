<?php

class ProjectBillingCycle extends BusinessObject
{

    /**
     * @var string $BillingFormat
     */
    protected $BillingFormat = null;

    /**
     * @var ProjectBillingCycleKey $Key
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
     * @return ProjectBillingCycle
     */
    public function setBillingFormat($BillingFormat)
    {
      $this->BillingFormat = $BillingFormat;
      return $this;
    }

    /**
     * @return ProjectBillingCycleKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectBillingCycleKey $Key
     * @return ProjectBillingCycle
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
