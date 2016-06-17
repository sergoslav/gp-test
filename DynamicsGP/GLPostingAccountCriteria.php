<?php

class GLPostingAccountCriteria extends GLAccountCriteriaBase
{

    /**
     * @var LikeRestrictionOfstring $GLAccountCategoryId
     */
    protected $GLAccountCategoryId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getGLAccountCategoryId()
    {
      return $this->GLAccountCategoryId;
    }

    /**
     * @param LikeRestrictionOfstring $GLAccountCategoryId
     * @return GLPostingAccountCriteria
     */
    public function setGLAccountCategoryId($GLAccountCategoryId)
    {
      $this->GLAccountCategoryId = $GLAccountCategoryId;
      return $this;
    }

}
