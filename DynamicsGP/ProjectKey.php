<?php

class ProjectKey extends ReferenceKey
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
     * @return ProjectKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
