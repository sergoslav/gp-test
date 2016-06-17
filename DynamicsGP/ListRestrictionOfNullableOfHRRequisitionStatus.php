<?php

class ListRestrictionOfNullableOfHRRequisitionStatus extends RestrictionOfNullableOfHRRequisitionStatus
{

    /**
     * @var ArrayOfNullableOfHRRequisitionStatusfo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfHRRequisitionStatusfo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfHRRequisitionStatusfo2IbYCo $Items
     * @return ListRestrictionOfNullableOfHRRequisitionStatus
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
