<?php

class GetApplicantEducationList
{

    /**
     * @var ApplicantEducationCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ApplicantEducationCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ApplicantEducationCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ApplicantEducationCriteria $criteria
     * @return GetApplicantEducationList
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
     * @return GetApplicantEducationList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
