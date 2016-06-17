<?php

class CreateItemWarehouse
{

    /**
     * @var ItemWarehouse $itemWarehouse
     */
    protected $itemWarehouse = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ItemWarehouse $itemWarehouse
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($itemWarehouse, $context, $policy)
    {
      $this->itemWarehouse = $itemWarehouse;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return ItemWarehouse
     */
    public function getItemWarehouse()
    {
      return $this->itemWarehouse;
    }

    /**
     * @param ItemWarehouse $itemWarehouse
     * @return CreateItemWarehouse
     */
    public function setItemWarehouse($itemWarehouse)
    {
      $this->itemWarehouse = $itemWarehouse;
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
     * @return CreateItemWarehouse
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
     * @return CreateItemWarehouse
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
