<?php

class ListRestrictionOfNullableOfInventoryTransactionState extends RestrictionOfNullableOfInventoryTransactionState
{

    /**
     * @var ArrayOfNullableOfInventoryTransactionStatefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfInventoryTransactionStatefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfInventoryTransactionStatefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfInventoryTransactionState
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
