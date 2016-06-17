<?php

class GetProjectTimesheetList
{

    /**
     * @var ProjectTimesheetCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ProjectTimesheetCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ProjectTimesheetCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ProjectTimesheetCriteria $criteria
     * @return GetProjectTimesheetList
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
     * @return GetProjectTimesheetList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
