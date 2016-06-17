<?php

class ProjectTimesheetKey extends TransactionKey
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
     * @return ProjectTimesheetKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
