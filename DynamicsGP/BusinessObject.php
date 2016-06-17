<?php

class BusinessObject
{

    /**
     * @var ExtensionList $Extensions
     */
    protected $Extensions = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ExtensionList
     */
    public function getExtensions()
    {
      return $this->Extensions;
    }

    /**
     * @param ExtensionList $Extensions
     * @return BusinessObject
     */
    public function setExtensions($Extensions)
    {
      $this->Extensions = $Extensions;
      return $this;
    }

}
