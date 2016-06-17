<?php

class CustomerChangedKeyCriteria extends BaseChangedKeyCriteria
{

    /**
     * @var BetweenRestrictionOfstring $Id
     */
    protected $Id = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param BetweenRestrictionOfstring $Id
     * @return CustomerChangedKeyCriteria
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
