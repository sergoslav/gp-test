<?php

class CreateItemCurrency
{

    /**
     * @var ItemCurrency $itemCurrency
     */
    protected $itemCurrency = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ItemCurrency $itemCurrency
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($itemCurrency, $context, $policy)
    {
      $this->itemCurrency = $itemCurrency;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return ItemCurrency
     */
    public function getItemCurrency()
    {
      return $this->itemCurrency;
    }

    /**
     * @param ItemCurrency $itemCurrency
     * @return CreateItemCurrency
     */
    public function setItemCurrency($itemCurrency)
    {
      $this->itemCurrency = $itemCurrency;
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
     * @return CreateItemCurrency
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
     * @return CreateItemCurrency
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
