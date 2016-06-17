<?php

class GetApplicantTestList
{

    /**
     * @var ApplicantTestCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ApplicantTestCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ApplicantTestCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ApplicantTestCriteria $criteria
     * @return GetApplicantTestList
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
     * @return GetApplicantTestList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
