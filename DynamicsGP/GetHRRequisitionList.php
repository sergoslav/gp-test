<?php

class GetHRRequisitionList
{

    /**
     * @var HRRequisitionCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param HRRequisitionCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return HRRequisitionCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param HRRequisitionCriteria $criteria
     * @return GetHRRequisitionList
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
     * @return GetHRRequisitionList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
