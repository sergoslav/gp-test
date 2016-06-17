<?php

class ProjectContractAccountTypeKey extends ReferenceKey
{

    /**
     * @var string $CostTransaction
     */
    protected $CostTransaction = null;

    /**
     * @var DistributionTypeKey $DistributionTypeKey
     */
    protected $DistributionTypeKey = null;

    /**
     * @var ProjectContractKey $ProjectContractKey
     */
    protected $ProjectContractKey = null;

    /**
     * @var ProjectSourceFile $SourceFile
     */
    protected $SourceFile = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getCostTransaction()
    {
      return $this->CostTransaction;
    }

    /**
     * @param string $CostTransaction
     * @return ProjectContractAccountTypeKey
     */
    public function setCostTransaction($CostTransaction)
    {
      $this->CostTransaction = $CostTransaction;
      return $this;
    }

    /**
     * @return DistributionTypeKey
     */
    public function getDistributionTypeKey()
    {
      return $this->DistributionTypeKey;
    }

    /**
     * @param DistributionTypeKey $DistributionTypeKey
     * @return ProjectContractAccountTypeKey
     */
    public function setDistributionTypeKey($DistributionTypeKey)
    {
      $this->DistributionTypeKey = $DistributionTypeKey;
      return $this;
    }

    /**
     * @return ProjectContractKey
     */
    public function getProjectContractKey()
    {
      return $this->ProjectContractKey;
    }

    /**
     * @param ProjectContractKey $ProjectContractKey
     * @return ProjectContractAccountTypeKey
     */
    public function setProjectContractKey($ProjectContractKey)
    {
      $this->ProjectContractKey = $ProjectContractKey;
      return $this;
    }

    /**
     * @return ProjectSourceFile
     */
    public function getSourceFile()
    {
      return $this->SourceFile;
    }

    /**
     * @param ProjectSourceFile $SourceFile
     * @return ProjectContractAccountTypeKey
     */
    public function setSourceFile($SourceFile)
    {
      $this->SourceFile = $SourceFile;
      return $this;
    }

}
