<?php

class ProjectChangeOrderFeeKey extends Key
{

    /**
     * @var ProjectChangeOrderKey $ProjectChangeOrderKey
     */
    protected $ProjectChangeOrderKey = null;

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
     * @return ProjectChangeOrderFeeKey
     */
    public function setProjectChangeOrderKey($ProjectChangeOrderKey)
    {
      $this->ProjectChangeOrderKey = $ProjectChangeOrderKey;
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
     * @return ProjectChangeOrderFeeKey
     */
    public function setProjectKey($ProjectKey)
    {
      $this->ProjectKey = $ProjectKey;
      return $this;
    }

}
