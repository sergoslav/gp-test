<?php

class KitComponent extends BusinessObject
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var KitComponentKey $Key
     */
    protected $Key = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var ItemType $Type
     */
    protected $Type = null;

    /**
     * @var UofMScheduleKey $UofMScheduleKey
     */
    protected $UofMScheduleKey = null;

    
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
     * @return KitComponent
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return KitComponentKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param KitComponentKey $Key
     * @return KitComponent
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param Quantity $Quantity
     * @return KitComponent
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return ItemType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ItemType $Type
     * @return KitComponent
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return UofMScheduleKey
     */
    public function getUofMScheduleKey()
    {
      return $this->UofMScheduleKey;
    }

    /**
     * @param UofMScheduleKey $UofMScheduleKey
     * @return KitComponent
     */
    public function setUofMScheduleKey($UofMScheduleKey)
    {
      $this->UofMScheduleKey = $UofMScheduleKey;
      return $this;
    }

}
