<?php

class ListRestrictionOfNullableOfGLTransactionState extends RestrictionOfNullableOfGLTransactionState
{

    /**
     * @var ArrayOfNullableOfGLTransactionStatefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfGLTransactionStatefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfGLTransactionStatefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfGLTransactionState
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
