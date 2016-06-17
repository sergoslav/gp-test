<?php

class GetGLAccountCategoryListResponse
{

    /**
     * @var ArrayOfGLAccountCategory $GetGLAccountCategoryListResult
     */
    protected $GetGLAccountCategoryListResult = null;

    /**
     * @param ArrayOfGLAccountCategory $GetGLAccountCategoryListResult
     */
    public function __construct($GetGLAccountCategoryListResult)
    {
      $this->GetGLAccountCategoryListResult = $GetGLAccountCategoryListResult;
    }

    /**
     * @return ArrayOfGLAccountCategory
     */
    public function getGetGLAccountCategoryListResult()
    {
      return $this->GetGLAccountCategoryListResult;
    }

    /**
     * @param ArrayOfGLAccountCategory $GetGLAccountCategoryListResult
     * @return GetGLAccountCategoryListResponse
     */
    public function setGetGLAccountCategoryListResult($GetGLAccountCategoryListResult)
    {
      $this->GetGLAccountCategoryListResult = $GetGLAccountCategoryListResult;
      return $this;
    }

}
