<?php

class GLFixedAllocationDistributionAccount extends BusinessObject
{

    /**
     * @var GLAllocationDistributionAccountKey $Key
     */
    protected $Key = null;

    /**
     * @var Percent $Percentage
     */
    protected $Percentage = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GLAllocationDistributionAccountKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param GLAllocationDistributionAccountKey $Key
     * @return GLFixedAllocationDistributionAccount
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getPercentage()
    {
      return $this->Percentage;
    }

    /**
     * @param Percent $Percentage
     * @return GLFixedAllocationDistributionAccount
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

}
