<?php

class ListRestrictionOfNullableOfReceivablesDocumentType extends RestrictionOfNullableOfReceivablesDocumentType
{

    /**
     * @var ArrayOfNullableOfReceivablesDocumentTypefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfReceivablesDocumentTypefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfReceivablesDocumentTypefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfReceivablesDocumentType
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
