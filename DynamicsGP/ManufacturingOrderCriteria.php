<?php

class ManufacturingOrderCriteria extends ManufacturingOrderDocumentCriteria
{

    /**
     * @var RestrictionOfNullableOfboolean $Archived
     */
    protected $Archived = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $DateCompleted
     */
    protected $DateCompleted = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var ListRestrictionOfNullableOfManufacturingOrderOutSourced $OutSourced
     */
    protected $OutSourced = null;

    /**
     * @var LikeRestrictionOfstring $PostToSite
     */
    protected $PostToSite = null;

    /**
     * @var ListRestrictionOfNullableOfManufacturingOrderPriority $Priority
     */
    protected $Priority = null;

    /**
     * @var RestrictionOfNullableOfboolean $QuickMo
     */
    protected $QuickMo = null;

    /**
     * @var LikeRestrictionOfstring $RoutingName
     */
    protected $RoutingName = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return RestrictionOfNullableOfboolean
     */
    public function getArchived()
    {
      return $this->Archived;
    }

    /**
     * @param RestrictionOfNullableOfboolean $Archived
     * @return ManufacturingOrderCriteria
     */
    public function setArchived($Archived)
    {
      $this->Archived = $Archived;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getDateCompleted()
    {
      return $this->DateCompleted;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $DateCompleted
     * @return ManufacturingOrderCriteria
     */
    public function setDateCompleted($DateCompleted)
    {
      $this->DateCompleted = $DateCompleted;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $EndDate
     * @return ManufacturingOrderCriteria
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getLastModifiedDate()
    {
      return $this->LastModifiedDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     * @return ManufacturingOrderCriteria
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfManufacturingOrderOutSourced
     */
    public function getOutSourced()
    {
      return $this->OutSourced;
    }

    /**
     * @param ListRestrictionOfNullableOfManufacturingOrderOutSourced $OutSourced
     * @return ManufacturingOrderCriteria
     */
    public function setOutSourced($OutSourced)
    {
      $this->OutSourced = $OutSourced;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getPostToSite()
    {
      return $this->PostToSite;
    }

    /**
     * @param LikeRestrictionOfstring $PostToSite
     * @return ManufacturingOrderCriteria
     */
    public function setPostToSite($PostToSite)
    {
      $this->PostToSite = $PostToSite;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfManufacturingOrderPriority
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param ListRestrictionOfNullableOfManufacturingOrderPriority $Priority
     * @return ManufacturingOrderCriteria
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return RestrictionOfNullableOfboolean
     */
    public function getQuickMo()
    {
      return $this->QuickMo;
    }

    /**
     * @param RestrictionOfNullableOfboolean $QuickMo
     * @return ManufacturingOrderCriteria
     */
    public function setQuickMo($QuickMo)
    {
      $this->QuickMo = $QuickMo;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getRoutingName()
    {
      return $this->RoutingName;
    }

    /**
     * @param LikeRestrictionOfstring $RoutingName
     * @return ManufacturingOrderCriteria
     */
    public function setRoutingName($RoutingName)
    {
      $this->RoutingName = $RoutingName;
      return $this;
    }

}
