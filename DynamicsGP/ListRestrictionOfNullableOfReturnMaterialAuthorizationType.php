<?php

class ListRestrictionOfNullableOfReturnMaterialAuthorizationType extends RestrictionOfNullableOfReturnMaterialAuthorizationType
{

    /**
     * @var ArrayOfNullableOfReturnMaterialAuthorizationTypefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfReturnMaterialAuthorizationTypefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfReturnMaterialAuthorizationTypefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfReturnMaterialAuthorizationType
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
