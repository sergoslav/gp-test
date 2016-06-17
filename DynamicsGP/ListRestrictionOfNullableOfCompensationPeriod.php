<?php

class ListRestrictionOfNullableOfCompensationPeriod extends RestrictionOfNullableOfCompensationPeriod
{

    /**
     * @var ArrayOfNullableOfCompensationPeriodfo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfCompensationPeriodfo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfCompensationPeriodfo2IbYCo $Items
     * @return ListRestrictionOfNullableOfCompensationPeriod
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
