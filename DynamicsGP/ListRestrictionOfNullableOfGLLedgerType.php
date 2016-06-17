<?php

class ListRestrictionOfNullableOfGLLedgerType extends RestrictionOfNullableOfGLLedgerType
{

    /**
     * @var ArrayOfNullableOfGLLedgerTypefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfGLLedgerTypefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfGLLedgerTypefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfGLLedgerType
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
