<?php

class ProjectEquipmentItem extends BusinessObject
{

    /**
     * @var ProjectEquipmentItemKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ProjectEquipmentItemKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectEquipmentItemKey $Key
     * @return ProjectEquipmentItem
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
