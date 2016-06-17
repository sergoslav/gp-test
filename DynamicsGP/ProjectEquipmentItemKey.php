<?php

class ProjectEquipmentItemKey extends Key
{

    /**
     * @var ProjectEquipmentKey $ProjectEquipmentKey
     */
    protected $ProjectEquipmentKey = null;

    /**
     * @var ProjectKey $ProjectKey
     */
    protected $ProjectKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectEquipmentKey
     */
    public function getProjectEquipmentKey()
    {
      return $this->ProjectEquipmentKey;
    }

    /**
     * @param ProjectEquipmentKey $ProjectEquipmentKey
     * @return ProjectEquipmentItemKey
     */
    public function setProjectEquipmentKey($ProjectEquipmentKey)
    {
      $this->ProjectEquipmentKey = $ProjectEquipmentKey;
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
     * @return ProjectEquipmentItemKey
     */
    public function setProjectKey($ProjectKey)
    {
      $this->ProjectKey = $ProjectKey;
      return $this;
    }

}
