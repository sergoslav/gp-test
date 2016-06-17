<?php

class ReceivablesDistribution extends Distribution
{

    /**
     * @var boolean $IsPosted
     */
    protected $IsPosted = null;

    /**
     * @var ReceivablesDistributionKey $Key
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
     * @return ReceivablesDistribution
     */
    public function setIsPosted($IsPosted)
    {
      $this->IsPosted = $IsPosted;
      return $this;
    }

    /**
     * @return ReceivablesDistributionKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ReceivablesDistributionKey $Key
     * @return ReceivablesDistribution
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
