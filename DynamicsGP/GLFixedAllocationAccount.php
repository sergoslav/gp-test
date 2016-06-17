<?php

class GLFixedAllocationAccount extends GLFinancialAccount
{

    /**
     * @var ArrayOfGLFixedAllocationDistributionAccount $Distributions
     */
    protected $Distributions = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfGLFixedAllocationDistributionAccount
     */
    public function getDistributions()
    {
      return $this->Distributions;
    }

    /**
     * @param ArrayOfGLFixedAllocationDistributionAccount $Distributions
     * @return GLFixedAllocationAccount
     */
    public function setDistributions($Distributions)
    {
      $this->Distributions = $Distributions;
      return $this;
    }

}
