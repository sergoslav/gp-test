<?php

class GetReceivablesDocumentList
{

    /**
     * @var ReceivablesDocumentCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ReceivablesDocumentCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ReceivablesDocumentCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ReceivablesDocumentCriteria $criteria
     * @return GetReceivablesDocumentList
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
     * @return GetReceivablesDocumentList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
