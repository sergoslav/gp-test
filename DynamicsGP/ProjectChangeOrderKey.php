<?php

class ProjectChangeOrderKey extends ReferenceKey
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var ProjectContractKey $ProjectContractKey
     */
    protected $ProjectContractKey = null;

    
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
     * @return ProjectChangeOrderKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return ProjectContractKey
     */
    public function getProjectContractKey()
    {
      return $this->ProjectContractKey;
    }

    /**
     * @param ProjectContractKey $ProjectContractKey
     * @return ProjectChangeOrderKey
     */
    public function setProjectContractKey($ProjectContractKey)
    {
      $this->ProjectContractKey = $ProjectContractKey;
      return $this;
    }

}
