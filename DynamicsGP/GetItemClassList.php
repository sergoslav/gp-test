<?php

class GetItemClassList
{

    /**
     * @var ItemClassCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ItemClassCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ItemClassCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ItemClassCriteria $criteria
     * @return GetItemClassList
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
     * @return GetItemClassList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
