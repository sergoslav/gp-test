<?php

class GetReceivablesDebitMemoList
{

    /**
     * @var ReceivablesDebitMemoCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ReceivablesDebitMemoCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ReceivablesDebitMemoCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ReceivablesDebitMemoCriteria $criteria
     * @return GetReceivablesDebitMemoList
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
     * @return GetReceivablesDebitMemoList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
