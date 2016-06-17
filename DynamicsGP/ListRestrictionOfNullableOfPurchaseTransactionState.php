<?php

class ListRestrictionOfNullableOfPurchaseTransactionState extends RestrictionOfNullableOfPurchaseTransactionState
{

    /**
     * @var ArrayOfNullableOfPurchaseTransactionStatefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfPurchaseTransactionStatefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfPurchaseTransactionStatefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfPurchaseTransactionState
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
