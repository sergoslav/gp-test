<?php

class ProjectChangeOrderFeeLineKey extends Key
{

    /**
     * @var ProjectChangeOrderKey $ProjectChangeOrderKey
     */
    protected $ProjectChangeOrderKey = null;

    /**
     * @var ProjectFeeKey $ProjectFeeKey
     */
    protected $ProjectFeeKey = null;

    /**
     * @var ProjectKey $ProjectKey
     */
    protected $ProjectKey = null;

    
    public function __construct()
    {
    
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
     * @return ProjectChangeOrderFeeLineKey
     */
    public function setProjectChangeOrderKey($ProjectChangeOrderKey)
    {
      $this->ProjectChangeOrderKey = $ProjectChangeOrderKey;
      return $this;
    }

    /**
     * @return ProjectFeeKey
     */
    public function getProjectFeeKey()
    {
      return $this->ProjectFeeKey;
    }

    /**
     * @param ProjectFeeKey $ProjectFeeKey
     * @return ProjectChangeOrderFeeLineKey
     */
    public function setProjectFeeKey($ProjectFeeKey)
    {
      $this->ProjectFeeKey = $ProjectFeeKey;
      return $this;
    }

    /**
     * @return ProjectKey
     */
    public function getProjectKey()
    {
      return $this->ProjectKey;
    }

    /**
     * @param ProjectKey $ProjectKey
     * @return ProjectChangeOrderFeeLineKey
     */
    public function setProjectKey($ProjectKey)
    {
      $this->ProjectKey = $ProjectKey;
      return $this;
    }

}
