<?php

class GetPolicyByOperation
{

    /**
     * @var string $operation
     */
    protected $operation = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param string $operation
     * @param Context $context
     */
    public function __construct($operation, $context)
    {
      $this->operation = $operation;
      $this->context = $context;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
      return $this->operation;
    }

    /**
     * @param string $operation
     * @return GetPolicyByOperation
     */
    public function setOperation($operation)
    {
      $this->operation = $operation;
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
     * @return GetPolicyByOperation
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
