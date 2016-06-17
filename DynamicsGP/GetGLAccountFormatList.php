<?php

class GetGLAccountFormatList
{

    /**
     * @var GLAccountFormatCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param GLAccountFormatCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return GLAccountFormatCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param GLAccountFormatCriteria $criteria
     * @return GetGLAccountFormatList
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return Context
     */
    public function getContext()
    {
      return $this->context;
    }

    /**
     * @param Context $context
     * @return GetGLAccountFormatList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
