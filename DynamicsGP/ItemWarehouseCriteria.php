<?php

class ItemWarehouseCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $BuyerId
     */
    protected $BuyerId = null;

    /**
     * @var LikeRestrictionOfstring $ItemId
     */
    protected $ItemId = null;

    /**
     * @var LikeRestrictionOfstring $PlannerId
     */
    protected $PlannerId = null;

    /**
     * @var LikeRestrictionOfstring $WarehouseId
     */
    protected $WarehouseId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getBuyerId()
    {
      return $this->BuyerId;
    }

    /**
     * @param LikeRestrictionOfstring $BuyerId
     * @return ItemWarehouseCriteria
     */
    public function setBuyerId($BuyerId)
    {
      $this->BuyerId = $BuyerId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getItemId()
    {
      return $this->ItemId;
    }

    /**
     * @param LikeRestrictionOfstring $ItemId
     * @return ItemWarehouseCriteria
     */
    public function setItemId($ItemId)
    {
      $this->ItemId = $ItemId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getPlannerId()
    {
      return $this->PlannerId;
    }

    /**
     * @param LikeRestrictionOfstring $PlannerId
     * @return ItemWarehouseCriteria
     */
    public function setPlannerId($PlannerId)
    {
      $this->PlannerId = $PlannerId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getWarehouseId()
    {
      return $this->WarehouseId;
    }

    /**
     * @param LikeRestrictionOfstring $WarehouseId
     * @return ItemWarehouseCriteria
     */
    public function setWarehouseId($WarehouseId)
    {
      $this->WarehouseId = $WarehouseId;
      return $this;
    }

}
