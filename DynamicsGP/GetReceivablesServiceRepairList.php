<?php

class GetReceivablesServiceRepairList
{

    /**
     * @var ReceivablesServiceRepairCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ReceivablesServiceRepairCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ReceivablesServiceRepairCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ReceivablesServiceRepairCriteria $criteria
     * @return GetReceivablesServiceRepairList
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
     * @return GetReceivablesServiceRepairList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
