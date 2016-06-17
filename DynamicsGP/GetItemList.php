<?php

class GetItemList
{

    /**
     * @var ItemCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ItemCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ItemCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ItemCriteria $criteria
     * @return GetItemList
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
     * @return GetItemList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
