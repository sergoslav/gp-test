<?php

class GetPayablesDocumentList
{

    /**
     * @var PayablesDocumentCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PayablesDocumentCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return PayablesDocumentCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PayablesDocumentCriteria $criteria
     * @return GetPayablesDocumentList
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
     * @return GetPayablesDocumentList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
