<?php

class GetReceivablesWarrantyList
{

    /**
     * @var ReceivablesWarrantyCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ReceivablesWarrantyCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ReceivablesWarrantyCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ReceivablesWarrantyCriteria $criteria
     * @return GetReceivablesWarrantyList
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
     * @return GetReceivablesWarrantyList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
