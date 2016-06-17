<?php

class GetUofMScheduleList
{

    /**
     * @var UofMScheduleCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param UofMScheduleCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return UofMScheduleCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param UofMScheduleCriteria $criteria
     * @return GetUofMScheduleList
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
     * @return GetUofMScheduleList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
