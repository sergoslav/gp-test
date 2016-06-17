<?php

class ListRestrictionOfNullableOfSalesDocumentType extends RestrictionOfNullableOfSalesDocumentType
{

    /**
     * @var ArrayOfNullableOfSalesDocumentTypefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfSalesDocumentTypefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfSalesDocumentTypefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfSalesDocumentType
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
