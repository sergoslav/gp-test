<?php

class ListRestrictionOfNullableOfSalesTransactionState extends RestrictionOfNullableOfSalesTransactionState
{

    /**
     * @var ArrayOfNullableOfSalesTransactionStatefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfSalesTransactionStatefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfSalesTransactionStatefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfSalesTransactionState
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
