<?php

class ProjectContractAccountType extends BusinessObject
{

    /**
     * @var GLAccountNumberKey $GLAccountKey
     */
    protected $GLAccountKey = null;

    /**
     * @var ProjectContractAccountTypeKey $Key
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
     * @return ProjectContractAccountType
     */
    public function setGLAccountKey($GLAccountKey)
    {
      $this->GLAccountKey = $GLAccountKey;
      return $this;
    }

    /**
     * @return ProjectContractAccountTypeKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectContractAccountTypeKey $Key
     * @return ProjectContractAccountType
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
