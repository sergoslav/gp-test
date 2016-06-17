<?php

class ListRestrictionOfNullableOfServiceCallType extends RestrictionOfNullableOfServiceCallType
{

    /**
     * @var ArrayOfNullableOfServiceCallTypefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfServiceCallTypefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfServiceCallTypefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfServiceCallType
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
