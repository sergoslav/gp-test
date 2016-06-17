<?php

class RestrictionOfNullableOfItemType
{

    /**
     * @var ItemType $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var ItemType $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemType
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param ItemType $EqualValue
     * @return RestrictionOfNullableOfItemType
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return ItemType
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param ItemType $NotEqualValue
     * @return RestrictionOfNullableOfItemType
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
