<?php

class ListRestrictionOfNullableOfGLAccountSummaryType extends RestrictionOfNullableOfGLAccountSummaryType
{

    /**
     * @var ArrayOfNullableOfGLAccountSummaryTypefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfGLAccountSummaryTypefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfGLAccountSummaryTypefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfGLAccountSummaryType
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
