<?php

class GetSalespersonList
{

    /**
     * @var SalespersonCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SalespersonCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return SalespersonCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param SalespersonCriteria $criteria
     * @return GetSalespersonList
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
     * @return GetSalespersonList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
