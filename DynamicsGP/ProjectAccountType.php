<?php

class ProjectAccountType extends BusinessObject
{

    /**
     * @var GLAccountNumberKey $GLAccountKey
     */
    protected $GLAccountKey = null;

    /**
     * @var ProjectAccountTypeKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getGLAccountKey()
    {
      return $this->GLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $GLAccountKey
     * @return ProjectAccountType
     */
    public function setGLAccountKey($GLAccountKey)
    {
      $this->GLAccountKey = $GLAccountKey;
      return $this;
    }

    /**
     * @return ProjectAccountTypeKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectAccountTypeKey $Key
     * @return ProjectAccountType
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
