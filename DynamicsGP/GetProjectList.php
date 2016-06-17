<?php

class GetProjectList
{

    /**
     * @var ProjectCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ProjectCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ProjectCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ProjectCriteria $criteria
     * @return GetProjectList
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
     * @return GetProjectList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
