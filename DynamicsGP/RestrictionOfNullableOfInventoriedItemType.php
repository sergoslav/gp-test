<?php

class RestrictionOfNullableOfInventoriedItemType
{

    /**
     * @var InventoriedItemType $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var InventoriedItemType $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoriedItemType
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param InventoriedItemType $EqualValue
     * @return RestrictionOfNullableOfInventoriedItemType
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return InventoriedItemType
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param InventoriedItemType $NotEqualValue
     * @return RestrictionOfNullableOfInventoriedItemType
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
