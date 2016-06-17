<?php

class CreateReceivablesServiceRepair
{

    /**
     * @var ReceivablesServiceRepair $receivablesServiceRepair
     */
    protected $receivablesServiceRepair = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ReceivablesServiceRepair $receivablesServiceRepair
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($receivablesServiceRepair, $context, $policy)
    {
      $this->receivablesServiceRepair = $receivablesServiceRepair;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return ReceivablesServiceRepair
     */
    public function getReceivablesServiceRepair()
    {
      return $this->receivablesServiceRepair;
    }

    /**
     * @param ReceivablesServiceRepair $receivablesServiceRepair
     * @return CreateReceivablesServiceRepair
     */
    public function setReceivablesServiceRepair($receivablesServiceRepair)
    {
      $this->receivablesServiceRepair = $receivablesServiceRepair;
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
     * @return CreateReceivablesServiceRepair
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return Policy
     */
    public function getPolicy()
    {
      return $this->policy;
    }

    /**
     * @param Policy $policy
     * @return CreateReceivablesServiceRepair
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
