<?php

class GLAccountNumberKey extends ReferenceKey
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var boolean $IsEncrypted
     */
    protected $IsEncrypted = null;

    
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
     * @return GLAccountNumberKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEncrypted()
    {
      return $this->IsEncrypted;
    }

    /**
     * @param boolean $IsEncrypted
     * @return GLAccountNumberKey
     */
    public function setIsEncrypted($IsEncrypted)
    {
      $this->IsEncrypted = $IsEncrypted;
      return $this;
    }

}
