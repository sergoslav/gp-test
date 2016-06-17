<?php

class ApplicantKey extends ReferenceKey
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
     * @return ApplicantKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
