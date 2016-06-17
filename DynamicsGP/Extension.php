<?php

class Extension
{

    /**
     * @var DocExtension $DocExtension
     */
    protected $DocExtension = null;

    /**
     * @var string $ExtensionId
     */
    protected $ExtensionId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DocExtension
     */
    public function getDocExtension()
    {
      return $this->DocExtension;
    }

    /**
     * @param DocExtension $DocExtension
     * @return Extension
     */
    public function setDocExtension($DocExtension)
    {
      $this->DocExtension = $DocExtension;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtensionId()
    {
      return $this->ExtensionId;
    }

    /**
     * @param string $ExtensionId
     * @return Extension
     */
    public function setExtensionId($ExtensionId)
    {
      $this->ExtensionId = $ExtensionId;
      return $this;
    }

}
