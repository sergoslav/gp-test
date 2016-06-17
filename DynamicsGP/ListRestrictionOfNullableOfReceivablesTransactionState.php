<?php

class ListRestrictionOfNullableOfReceivablesTransactionState extends RestrictionOfNullableOfReceivablesTransactionState
{

    /**
     * @var ArrayOfNullableOfReceivablesTransactionStatefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfReceivablesTransactionStatefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfReceivablesTransactionStatefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfReceivablesTransactionState
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
