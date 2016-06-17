<?php

class GLAllocationDistributionAccountKey extends ReferenceKey
{

    /**
     * @var GLAccountNumberKey $AccountKey
     */
    protected $AccountKey = null;

    /**
     * @var GLAccountNumberKey $DistributionAccountKey
     */
    protected $DistributionAccountKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getAccountKey()
    {
      return $this->AccountKey;
    }

    /**
     * @param GLAccountNumberKey $AccountKey
     * @return GLAllocationDistributionAccountKey
     */
    public function setAccountKey($AccountKey)
    {
      $this->AccountKey = $AccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getDistributionAccountKey()
    {
      return $this->DistributionAccountKey;
    }

    /**
     * @param GLAccountNumberKey $DistributionAccountKey
     * @return GLAllocationDistributionAccountKey
     */
    public function setDistributionAccountKey($DistributionAccountKey)
    {
      $this->DistributionAccountKey = $DistributionAccountKey;
      return $this;
    }

}
