<?php

class GetPayablesCreditMemoList
{

    /**
     * @var PayablesCreditMemoCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PayablesCreditMemoCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return PayablesCreditMemoCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PayablesCreditMemoCriteria $criteria
     * @return GetPayablesCreditMemoList
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
     * @return GetPayablesCreditMemoList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
