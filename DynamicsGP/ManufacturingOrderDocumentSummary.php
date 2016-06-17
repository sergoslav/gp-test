<?php

class ManufacturingOrderDocumentSummary extends BusinessObjectSummary
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ItemKey $ItemKey
     */
    protected $ItemKey = null;

    /**
     * @var ManufacturingOrderDocumentKey $ManufacturingOrderDocumentKey
     */
    protected $ManufacturingOrderDocumentKey = null;

    /**
     * @var ManufacturingOrderStatus $OrderStatus
     */
    protected $OrderStatus = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return ManufacturingOrderDocumentSummary
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getItemKey()
    {
      return $this->ItemKey;
    }

    /**
     * @param ItemKey $ItemKey
     * @return ManufacturingOrderDocumentSummary
     */
    public function setItemKey($ItemKey)
    {
      $this->ItemKey = $ItemKey;
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
     * @return ManufacturingOrderDocumentSummary
     */
    public function setManufacturingOrderDocumentKey($ManufacturingOrderDocumentKey)
    {
      $this->ManufacturingOrderDocumentKey = $ManufacturingOrderDocumentKey;
      return $this;
    }

    /**
     * @return ManufacturingOrderStatus
     */
    public function getOrderStatus()
    {
      return $this->OrderStatus;
    }

    /**
     * @param ManufacturingOrderStatus $OrderStatus
     * @return ManufacturingOrderDocumentSummary
     */
    public function setOrderStatus($OrderStatus)
    {
      $this->OrderStatus = $OrderStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return ManufacturingOrderDocumentSummary
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
