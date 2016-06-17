<?php

class ListRestrictionOfNullableOfProjectTransactionState extends RestrictionOfNullableOfProjectTransactionState
{

    /**
     * @var ArrayOfNullableOfProjectTransactionStatefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfProjectTransactionStatefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfProjectTransactionStatefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfProjectTransactionState
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
