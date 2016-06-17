<?php

class GetTenantList
{

    /**
     * @var boolean $activeTenantsOnly
     */
    protected $activeTenantsOnly = null;

    /**
     * @param boolean $activeTenantsOnly
     */
    public function __construct($activeTenantsOnly)
    {
      $this->activeTenantsOnly = $activeTenantsOnly;
    }

    /**
     * @return boolean
     */
    public function getActiveTenantsOnly()
    {
      return $this->activeTenantsOnly;
    }

    /**
     * @param boolean $activeTenantsOnly
     * @return GetTenantList
     */
    public function setActiveTenantsOnly($activeTenantsOnly)
    {
      $this->activeTenantsOnly = $activeTenantsOnly;
      return $this;
    }

}
