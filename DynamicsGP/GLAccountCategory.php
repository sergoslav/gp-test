<?php

class GLAccountCategory
{

    /**
     * @var GLAccountCategoryKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GLAccountCategoryKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param GLAccountCategoryKey $Key
     * @return GLAccountCategory
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
