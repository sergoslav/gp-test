<?php

class ProjectEquipmentRateTableKey extends TransactionKey
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return ProjectEquipmentRateTableKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
