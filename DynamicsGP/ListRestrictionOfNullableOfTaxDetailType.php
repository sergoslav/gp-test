<?php

class ListRestrictionOfNullableOfTaxDetailType extends RestrictionOfNullableOfTaxDetailType
{

    /**
     * @var ArrayOfNullableOfTaxDetailTypefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfTaxDetailTypefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfTaxDetailTypefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfTaxDetailType
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
