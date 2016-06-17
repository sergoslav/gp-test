<?php

class CreateReceivablesDebitMemo
{

    /**
     * @var ReceivablesDebitMemo $receivablesDebitMemo
     */
    protected $receivablesDebitMemo = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ReceivablesDebitMemo $receivablesDebitMemo
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($receivablesDebitMemo, $context, $policy)
    {
      $this->receivablesDebitMemo = $receivablesDebitMemo;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return ReceivablesDebitMemo
     */
    public function getReceivablesDebitMemo()
    {
      return $this->receivablesDebitMemo;
    }

    /**
     * @param ReceivablesDebitMemo $receivablesDebitMemo
     * @return CreateReceivablesDebitMemo
     */
    public function setReceivablesDebitMemo($receivablesDebitMemo)
    {
      $this->receivablesDebitMemo = $receivablesDebitMemo;
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
     * @return CreateReceivablesDebitMemo
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
     * @return CreateReceivablesDebitMemo
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
