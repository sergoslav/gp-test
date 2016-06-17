<?php

class GLVariableAllocationBreakdownAccountKey extends ReferenceKey
{

    /**
     * @var GLAllocationDistributionAccountKey $AllocationDistributionAccountKey
     */
    protected $AllocationDistributionAccountKey = null;

    /**
     * @var GLAccountNumberKey $BreakdownAccountKey
     */
    protected $BreakdownAccountKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GLAllocationDistributionAccountKey
     */
    public function getAllocationDistributionAccountKey()
    {
      return $this->AllocationDistributionAccountKey;
    }

    /**
     * @param GLAllocationDistributionAccountKey $AllocationDistributionAccountKey
     * @return GLVariableAllocationBreakdownAccountKey
     */
    public function setAllocationDistributionAccountKey($AllocationDistributionAccountKey)
    {
      $this->AllocationDistributionAccountKey = $AllocationDistributionAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getBreakdownAccountKey()
    {
      return $this->BreakdownAccountKey;
    }

    /**
     * @param GLAccountNumberKey $BreakdownAccountKey
     * @return GLVariableAllocationBreakdownAccountKey
     */
    public function setBreakdownAccountKey($BreakdownAccountKey)
    {
      $this->BreakdownAccountKey = $BreakdownAccountKey;
      return $this;
    }

}
