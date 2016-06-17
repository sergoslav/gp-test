<?php

class GetBatchList
{

    /**
     * @var BatchCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param BatchCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return BatchCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param BatchCriteria $criteria
     * @return GetBatchList
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
     * @return GetBatchList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
