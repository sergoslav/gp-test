<?php

class CreateBusinessObjectUserAssignment
{

    /**
     * @var BusinessObjectUserAssignment $businessObjectUserAssignment
     */
    protected $businessObjectUserAssignment = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param BusinessObjectUserAssignment $businessObjectUserAssignment
     * @param Context $context
     */
    public function __construct($businessObjectUserAssignment, $context)
    {
      $this->businessObjectUserAssignment = $businessObjectUserAssignment;
      $this->context = $context;
    }

    /**
     * @return BusinessObjectUserAssignment
     */
    public function getBusinessObjectUserAssignment()
    {
      return $this->businessObjectUserAssignment;
    }

    /**
     * @param BusinessObjectUserAssignment $businessObjectUserAssignment
     * @return CreateBusinessObjectUserAssignment
     */
    public function setBusinessObjectUserAssignment($businessObjectUserAssignment)
    {
      $this->businessObjectUserAssignment = $businessObjectUserAssignment;
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
     * @return CreateBusinessObjectUserAssignment
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
