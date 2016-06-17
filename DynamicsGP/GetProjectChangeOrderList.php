<?php

class GetProjectChangeOrderList
{

    /**
     * @var ProjectChangeOrderCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ProjectChangeOrderCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ProjectChangeOrderCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ProjectChangeOrderCriteria $criteria
     * @return GetProjectChangeOrderList
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
     * @return GetProjectChangeOrderList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
