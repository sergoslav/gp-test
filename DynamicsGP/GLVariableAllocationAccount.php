<?php

class GLVariableAllocationAccount extends GLFinancialAccount
{

    /**
     * @var GLVariableAllocationAccountBalanceCalculationType $BalanceForCalculation
     */
    protected $BalanceForCalculation = null;

    /**
     * @var ArrayOfGLVariableAllocationDistributionAccount $Distributions
     */
    protected $Distributions = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GLVariableAllocationAccountBalanceCalculationType
     */
    public function getBalanceForCalculation()
    {
      return $this->BalanceForCalculation;
    }

    /**
     * @param GLVariableAllocationAccountBalanceCalculationType $BalanceForCalculation
     * @return GLVariableAllocationAccount
     */
    public function setBalanceForCalculation($BalanceForCalculation)
    {
      $this->BalanceForCalculation = $BalanceForCalculation;
      return $this;
    }

    /**
     * @return ArrayOfGLVariableAllocationDistributionAccount
     */
    public function getDistributions()
    {
      return $this->Distributions;
    }

    /**
     * @param ArrayOfGLVariableAllocationDistributionAccount $Distributions
     * @return GLVariableAllocationAccount
     */
    public function setDistributions($Distributions)
    {
      $this->Distributions = $Distributions;
      return $this;
    }

}
