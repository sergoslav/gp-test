<?php

class GetApplicantInterviewList
{

    /**
     * @var ApplicantInterviewCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ApplicantInterviewCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ApplicantInterviewCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ApplicantInterviewCriteria $criteria
     * @return GetApplicantInterviewList
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
     * @return GetApplicantInterviewList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
