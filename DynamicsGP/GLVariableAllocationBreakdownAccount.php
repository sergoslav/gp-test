<?php

class GLVariableAllocationBreakdownAccount extends BusinessObject
{

    /**
     * @var GLVariableAllocationBreakdownAccountKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GLVariableAllocationBreakdownAccountKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param GLVariableAllocationBreakdownAccountKey $Key
     * @return GLVariableAllocationBreakdownAccount
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
