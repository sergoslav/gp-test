<?php

class ListRestrictionOfNullableOfTaxDetailBase extends RestrictionOfNullableOfTaxDetailBase
{

    /**
     * @var ArrayOfNullableOfTaxDetailBasefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfTaxDetailBasefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfTaxDetailBasefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfTaxDetailBase
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
