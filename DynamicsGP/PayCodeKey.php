<?php

class PayCodeKey extends ReferenceKey
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
     * @return PayCodeKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
