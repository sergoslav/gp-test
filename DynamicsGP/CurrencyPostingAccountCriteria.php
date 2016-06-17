<?php

class CurrencyPostingAccountCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $Id
     */
    protected $Id = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param LikeRestrictionOfstring $Id
     * @return CurrencyPostingAccountCriteria
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
