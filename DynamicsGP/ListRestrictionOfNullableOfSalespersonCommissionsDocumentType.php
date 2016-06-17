<?php

class ListRestrictionOfNullableOfSalespersonCommissionsDocumentType extends RestrictionOfNullableOfSalespersonCommissionsDocumentType
{

    /**
     * @var ArrayOfNullableOfSalespersonCommissionsDocumentTypefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfSalespersonCommissionsDocumentTypefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfSalespersonCommissionsDocumentTypefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfSalespersonCommissionsDocumentType
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
