<?php

class GetGLAccountFormatListResponse
{

    /**
     * @var ArrayOfGLAccountFormat $GetGLAccountFormatListResult
     */
    protected $GetGLAccountFormatListResult = null;

    /**
     * @param ArrayOfGLAccountFormat $GetGLAccountFormatListResult
     */
    public function __construct($GetGLAccountFormatListResult)
    {
      $this->GetGLAccountFormatListResult = $GetGLAccountFormatListResult;
    }

    /**
     * @return ArrayOfGLAccountFormat
     */
    public function getGetGLAccountFormatListResult()
    {
      return $this->GetGLAccountFormatListResult;
    }

    /**
     * @param ArrayOfGLAccountFormat $GetGLAccountFormatListResult
     * @return GetGLAccountFormatListResponse
     */
    public function setGetGLAccountFormatListResult($GetGLAccountFormatListResult)
    {
      $this->GetGLAccountFormatListResult = $GetGLAccountFormatListResult;
      return $this;
    }

}
