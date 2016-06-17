<?php

class GetApplicantList
{

    /**
     * @var ApplicantCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ApplicantCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ApplicantCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ApplicantCriteria $criteria
     * @return GetApplicantList
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
     * @return GetApplicantList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
