<?php

class ListRestrictionOfNullableOfServiceTransactionState extends RestrictionOfNullableOfServiceTransactionState
{

    /**
     * @var ArrayOfNullableOfServiceTransactionStatefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfServiceTransactionStatefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfServiceTransactionStatefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfServiceTransactionState
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
