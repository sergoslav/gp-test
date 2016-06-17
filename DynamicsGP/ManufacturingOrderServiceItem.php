<?php

class ManufacturingOrderServiceItem
{

    /**
     * @var \DateTime $DateReleased
     */
    protected $DateReleased = null;

    /**
     * @var ManufacturingOrderDocumentKey $ManufacturingOrderDocumentKey
     */
    protected $ManufacturingOrderDocumentKey = null;

    /**
     * @var Quantity $QtyToOrder
     */
    protected $QtyToOrder = null;

    /**
     * @var \DateTime $RequiredDate
     */
    protected $RequiredDate = null;

    /**
     * @var int $RouteSequenceNum
     */
    protected $RouteSequenceNum = null;

    /**
     * @var ItemKey $ServiceItem
     */
    protected $ServiceItem = null;

    /**
     * @var Quantity $SuggestedQty
     */
    protected $SuggestedQty = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getDateReleased()
    {
      if ($this->DateReleased == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateReleased);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateReleased
     * @return ManufacturingOrderServiceItem
     */
    public function setDateReleased(\DateTime $DateReleased = null)
    {
      if ($DateReleased == null) {
       $this->DateReleased = null;
      } else {
        $this->DateReleased = $DateReleased->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ManufacturingOrderDocumentKey
     */
    public function getManufacturingOrderDocumentKey()
    {
      return $this->ManufacturingOrderDocumentKey;
    }

    /**
     * @param ManufacturingOrderDocumentKey $ManufacturingOrderDocumentKey
     * @return ManufacturingOrderServiceItem
     */
    public function setManufacturingOrderDocumentKey($ManufacturingOrderDocumentKey)
    {
      $this->ManufacturingOrderDocumentKey = $ManufacturingOrderDocumentKey;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQtyToOrder()
    {
      return $this->QtyToOrder;
    }

    /**
     * @param Quantity $QtyToOrder
     * @return ManufacturingOrderServiceItem
     */
    public function setQtyToOrder($QtyToOrder)
    {
      $this->QtyToOrder = $QtyToOrder;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRequiredDate()
    {
      if ($this->RequiredDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RequiredDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RequiredDate
     * @return ManufacturingOrderServiceItem
     */
    public function setRequiredDate(\DateTime $RequiredDate = null)
    {
      if ($RequiredDate == null) {
       $this->RequiredDate = null;
      } else {
        $this->RequiredDate = $RequiredDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getRouteSequenceNum()
    {
      return $this->RouteSequenceNum;
    }

    /**
     * @param int $RouteSequenceNum
     * @return ManufacturingOrderServiceItem
     */
    public function setRouteSequenceNum($RouteSequenceNum)
    {
      $this->RouteSequenceNum = $RouteSequenceNum;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getServiceItem()
    {
      return $this->ServiceItem;
    }

    /**
     * @param ItemKey $ServiceItem
     * @return ManufacturingOrderServiceItem
     */
    public function setServiceItem($ServiceItem)
    {
      $this->ServiceItem = $ServiceItem;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getSuggestedQty()
    {
      return $this->SuggestedQty;
    }

    /**
     * @param Quantity $SuggestedQty
     * @return ManufacturingOrderServiceItem
     */
    public function setSuggestedQty($SuggestedQty)
    {
      $this->SuggestedQty = $SuggestedQty;
      return $this;
    }

}
