<?php

class CreateReceivablesReturn
{

    /**
     * @var ReceivablesReturn $receivablesReturn
     */
    protected $receivablesReturn = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ReceivablesReturn $receivablesReturn
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($receivablesReturn, $context, $policy)
    {
      $this->receivablesReturn = $receivablesReturn;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return ReceivablesReturn
     */
    public function getReceivablesReturn()
    {
      return $this->receivablesReturn;
    }

    /**
     * @param ReceivablesReturn $receivablesReturn
     * @return CreateReceivablesReturn
     */
    public function setReceivablesReturn($receivablesReturn)
    {
      $this->receivablesReturn = $receivablesReturn;
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
     * @return CreateReceivablesReturn
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
     * @return CreateReceivablesReturn
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
