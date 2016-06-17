<?php

class ProjectMiscellaneousLogLine extends ProjectLineBase
{

    /**
     * @var ProjectBillingFull $Billing
     */
    protected $Billing = null;

    /**
     * @var ProjectMiscellaneousLogLineKey $Key
     */
    protected $Key = null;

    /**
     * @var ProjectChangeOrderKey $ProjectChangeOrderKey
     */
    protected $ProjectChangeOrderKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ProjectBillingFull
     */
    public function getBilling()
    {
      return $this->Billing;
    }

    /**
     * @param ProjectBillingFull $Billing
     * @return ProjectMiscellaneousLogLine
     */
    public function setBilling($Billing)
    {
      $this->Billing = $Billing;
      return $this;
    }

    /**
     * @return ProjectMiscellaneousLogLineKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectMiscellaneousLogLineKey $Key
     * @return ProjectMiscellaneousLogLine
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ProjectChangeOrderKey
     */
    public function getProjectChangeOrderKey()
    {
      return $this->ProjectChangeOrderKey;
    }

    /**
     * @param ProjectChangeOrderKey $ProjectChangeOrderKey
     * @return ProjectMiscellaneousLogLine
     */
    public function setProjectChangeOrderKey($ProjectChangeOrderKey)
    {
      $this->ProjectChangeOrderKey = $ProjectChangeOrderKey;
      return $this;
    }

}
