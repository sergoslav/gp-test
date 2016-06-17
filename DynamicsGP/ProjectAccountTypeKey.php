<?php

class ProjectAccountTypeKey extends ReferenceKey
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
     * @var ProjectKey $ProjectKey
     */
    protected $ProjectKey = null;

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
     * @return ProjectAccountTypeKey
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
     * @return ProjectAccountTypeKey
     */
    public function setDistributionTypeKey($DistributionTypeKey)
    {
      $this->DistributionTypeKey = $DistributionTypeKey;
      return $this;
    }

    /**
     * @return ProjectKey
     */
    public function getProjectKey()
    {
      return $this->ProjectKey;
    }

    /**
     * @param ProjectKey $ProjectKey
     * @return ProjectAccountTypeKey
     */
    public function setProjectKey($ProjectKey)
    {
      $this->ProjectKey = $ProjectKey;
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
     * @return ProjectAccountTypeKey
     */
    public function setSourceFile($SourceFile)
    {
      $this->SourceFile = $SourceFile;
      return $this;
    }

}
