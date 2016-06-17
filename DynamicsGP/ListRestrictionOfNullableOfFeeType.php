<?php

class ListRestrictionOfNullableOfFeeType extends RestrictionOfNullableOfFeeType
{

    /**
     * @var ArrayOfNullableOfFeeTypefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfFeeTypefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfFeeTypefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfFeeType
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
