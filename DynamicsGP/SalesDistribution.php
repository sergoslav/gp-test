<?php

class SalesDistribution extends Distribution
{

    /**
     * @var boolean $IsPosted
     */
    protected $IsPosted = null;

    /**
     * @var SalesDistributionKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getIsPosted()
    {
      return $this->IsPosted;
    }

    /**
     * @param boolean $IsPosted
     * @return SalesDistribution
     */
    public function setIsPosted($IsPosted)
    {
      $this->IsPosted = $IsPosted;
      return $this;
    }

    /**
     * @return SalesDistributionKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesDistributionKey $Key
     * @return SalesDistribution
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
