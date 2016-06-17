<?php

class ShippingMethodChangedKeyCriteria extends BaseChangedKeyCriteria
{

    /**
     * @var BetweenRestrictionOfstring $id
     */
    protected $id = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param BetweenRestrictionOfstring $id
     * @return ShippingMethodChangedKeyCriteria
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
