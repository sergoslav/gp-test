<?php

class ManufacturingOrderDocumentCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $ItemKeyId
     */
    protected $ItemKeyId = null;

    /**
     * @var LikeRestrictionOfstring $ManufacturingOrderDocumentKeyId
     */
    protected $ManufacturingOrderDocumentKeyId = null;

    /**
     * @var ListRestrictionOfNullableOfManufacturingOrderStatus $OrderStatus
     */
    protected $OrderStatus = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $StartDate
     */
    protected $StartDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getItemKeyId()
    {
      return $this->ItemKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $ItemKeyId
     * @return ManufacturingOrderDocumentCriteria
     */
    public function setItemKeyId($ItemKeyId)
    {
      $this->ItemKeyId = $ItemKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getManufacturingOrderDocumentKeyId()
    {
      return $this->ManufacturingOrderDocumentKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $ManufacturingOrderDocumentKeyId
     * @return ManufacturingOrderDocumentCriteria
     */
    public function setManufacturingOrderDocumentKeyId($ManufacturingOrderDocumentKeyId)
    {
      $this->ManufacturingOrderDocumentKeyId = $ManufacturingOrderDocumentKeyId;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfManufacturingOrderStatus
     */
    public function getOrderStatus()
    {
      return $this->OrderStatus;
    }

    /**
     * @param ListRestrictionOfNullableOfManufacturingOrderStatus $OrderStatus
     * @return ManufacturingOrderDocumentCriteria
     */
    public function setOrderStatus($OrderStatus)
    {
      $this->OrderStatus = $OrderStatus;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $StartDate
     * @return ManufacturingOrderDocumentCriteria
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

}
