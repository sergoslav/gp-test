<?php

class ExtensionList
{

    /**
     * @var Extension[] $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Extension[]
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param Extension[] $Extension
     * @return ExtensionList
     */
    public function setExtension(array $Extension = null)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
