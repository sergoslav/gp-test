<?php

class ChangedShippingMethodKey extends ChangedBusinessObjectKey
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
     * @return ChangedShippingMethodKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
