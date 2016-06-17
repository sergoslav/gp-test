<?php

class GLVariableAllocationDistributionAccount extends BusinessObject
{

    /**
     * @var ArrayOfGLVariableAllocationBreakdownAccount $Breakdowns
     */
    protected $Breakdowns = null;

    /**
     * @var GLAllocationDistributionAccountKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfGLVariableAllocationBreakdownAccount
     */
    public function getBreakdowns()
    {
      return $this->Breakdowns;
    }

    /**
     * @param ArrayOfGLVariableAllocationBreakdownAccount $Breakdowns
     * @return GLVariableAllocationDistributionAccount
     */
    public function setBreakdowns($Breakdowns)
    {
      $this->Breakdowns = $Breakdowns;
      return $this;
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
     * @return GLVariableAllocationDistributionAccount
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
