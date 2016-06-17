<?php

class DistributionTypeKey extends ReferenceKey
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return DistributionTypeKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
