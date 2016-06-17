<?php

class SalesSerialLot extends SalesSerialLotBase
{

    /**
     * @var boolean $DeleteOnUpdate
     */
    protected $DeleteOnUpdate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getDeleteOnUpdate()
    {
      return $this->DeleteOnUpdate;
    }

    /**
     * @param boolean $DeleteOnUpdate
     * @return SalesSerialLot
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
      return $this;
    }

}
