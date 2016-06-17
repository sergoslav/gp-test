<?php

class GetProjectMiscellaneousLogList
{

    /**
     * @var ProjectMiscellaneousLogCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ProjectMiscellaneousLogCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ProjectMiscellaneousLogCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ProjectMiscellaneousLogCriteria $criteria
     * @return GetProjectMiscellaneousLogList
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
     * @return GetProjectMiscellaneousLogList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
