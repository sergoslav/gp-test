<?php

class CreateReceivablesCreditMemo
{

    /**
     * @var ReceivablesCreditMemo $receivablesCreditMemo
     */
    protected $receivablesCreditMemo = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ReceivablesCreditMemo $receivablesCreditMemo
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($receivablesCreditMemo, $context, $policy)
    {
      $this->receivablesCreditMemo = $receivablesCreditMemo;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return ReceivablesCreditMemo
     */
    public function getReceivablesCreditMemo()
    {
      return $this->receivablesCreditMemo;
    }

    /**
     * @param ReceivablesCreditMemo $receivablesCreditMemo
     * @return CreateReceivablesCreditMemo
     */
    public function setReceivablesCreditMemo($receivablesCreditMemo)
    {
      $this->receivablesCreditMemo = $receivablesCreditMemo;
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
     * @return CreateReceivablesCreditMemo
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
     * @return CreateReceivablesCreditMemo
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
