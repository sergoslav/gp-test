<?php

class GetReceivablesCreditMemoList
{

    /**
     * @var ReceivablesCreditMemoCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ReceivablesCreditMemoCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ReceivablesCreditMemoCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ReceivablesCreditMemoCriteria $criteria
     * @return GetReceivablesCreditMemoList
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
     * @return GetReceivablesCreditMemoList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
