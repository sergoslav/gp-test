<?php

class ListRestrictionOfNullableOfPayablesTransactionState extends RestrictionOfNullableOfPayablesTransactionState
{

    /**
     * @var ArrayOfNullableOfPayablesTransactionStatefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfPayablesTransactionStatefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfPayablesTransactionStatefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfPayablesTransactionState
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
