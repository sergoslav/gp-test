<?php

class ProjectChangeOrderPayCodeHourlyKey extends Key
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    
    public function __construct()
    {
    
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
     * @return ProjectChangeOrderPayCodeHourlyKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
