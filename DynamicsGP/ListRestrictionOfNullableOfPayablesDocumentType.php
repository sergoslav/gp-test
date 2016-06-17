<?php

class ListRestrictionOfNullableOfPayablesDocumentType extends RestrictionOfNullableOfPayablesDocumentType
{

    /**
     * @var ArrayOfNullableOfPayablesDocumentTypefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfPayablesDocumentTypefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfPayablesDocumentTypefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfPayablesDocumentType
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
