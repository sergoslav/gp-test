<?php

class BatchCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $Id
     */
    protected $Id = null;

    /**
     * @var LikeRestrictionOfstring $Source
     */
    protected $Source = null;

    
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
     * @return BatchCriteria
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param LikeRestrictionOfstring $Source
     * @return BatchCriteria
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
