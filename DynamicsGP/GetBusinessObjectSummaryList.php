<?php

class GetBusinessObjectSummaryList
{

    /**
     * @var guid $businessObjectTypeId
     */
    protected $businessObjectTypeId = null;

    /**
     * @var OrganizationKey $organizationKey
     */
    protected $organizationKey = null;

    /**
     * @var BusinessObjectSummaryCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param guid $businessObjectTypeId
     * @param OrganizationKey $organizationKey
     * @param BusinessObjectSummaryCriteria $criteria
     * @param Context $context
     */
    public function __construct($businessObjectTypeId, $organizationKey, $criteria, $context)
    {
      $this->businessObjectTypeId = $businessObjectTypeId;
      $this->organizationKey = $organizationKey;
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return guid
     */
    public function getBusinessObjectTypeId()
    {
      return $this->businessObjectTypeId;
    }

    /**
     * @param guid $businessObjectTypeId
     * @return GetBusinessObjectSummaryList
     */
    public function setBusinessObjectTypeId($businessObjectTypeId)
    {
      $this->businessObjectTypeId = $businessObjectTypeId;
      return $this;
    }

    /**
     * @return OrganizationKey
     */
    public function getOrganizationKey()
    {
      return $this->organizationKey;
    }

    /**
     * @param OrganizationKey $organizationKey
     * @return GetBusinessObjectSummaryList
     */
    public function setOrganizationKey($organizationKey)
    {
      $this->organizationKey = $organizationKey;
      return $this;
    }

    /**
     * @return BusinessObjectSummaryCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param BusinessObjectSummaryCriteria $criteria
     * @return GetBusinessObjectSummaryList
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
     * @return GetBusinessObjectSummaryList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
