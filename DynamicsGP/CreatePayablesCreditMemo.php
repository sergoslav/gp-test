<?php

class CreatePayablesCreditMemo
{

    /**
     * @var PayablesCreditMemo $payablesCreditMemo
     */
    protected $payablesCreditMemo = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param PayablesCreditMemo $payablesCreditMemo
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($payablesCreditMemo, $context, $policy)
    {
      $this->payablesCreditMemo = $payablesCreditMemo;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return PayablesCreditMemo
     */
    public function getPayablesCreditMemo()
    {
      return $this->payablesCreditMemo;
    }

    /**
     * @param PayablesCreditMemo $payablesCreditMemo
     * @return CreatePayablesCreditMemo
     */
    public function setPayablesCreditMemo($payablesCreditMemo)
    {
      $this->payablesCreditMemo = $payablesCreditMemo;
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
     * @return CreatePayablesCreditMemo
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
     * @return CreatePayablesCreditMemo
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
