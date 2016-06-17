<?php

class GetApplicantWorkHistoryList
{

    /**
     * @var ApplicantWorkHistoryCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ApplicantWorkHistoryCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ApplicantWorkHistoryCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ApplicantWorkHistoryCriteria $criteria
     * @return GetApplicantWorkHistoryList
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
     * @return GetApplicantWorkHistoryList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
