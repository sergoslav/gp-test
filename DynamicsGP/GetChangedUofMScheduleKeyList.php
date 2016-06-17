<?php

class GetChangedUofMScheduleKeyList
{

    /**
     * @var UofMScheduleChangedKeyCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param UofMScheduleChangedKeyCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return UofMScheduleChangedKeyCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param UofMScheduleChangedKeyCriteria $criteria
     * @return GetChangedUofMScheduleKeyList
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
     * @return GetChangedUofMScheduleKeyList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
