<?php

class ExtendedBusinessAddress extends BusinessAddress
{

    /**
     * @var string $County
     */
    protected $County = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getCounty()
    {
      return $this->County;
    }

    /**
     * @param string $County
     * @return ExtendedBusinessAddress
     */
    public function setCounty($County)
    {
      $this->County = $County;
      return $this;
    }

}
