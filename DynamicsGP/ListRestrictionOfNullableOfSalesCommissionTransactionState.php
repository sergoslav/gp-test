<?php

class ListRestrictionOfNullableOfSalesCommissionTransactionState extends RestrictionOfNullableOfSalesCommissionTransactionState
{

    /**
     * @var ArrayOfNullableOfSalesCommissionTransactionStatefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfSalesCommissionTransactionStatefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfSalesCommissionTransactionStatefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfSalesCommissionTransactionState
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
