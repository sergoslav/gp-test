<?php

class ProjectEmployeeExpenseDistribution extends ProjectDistributionBase
{

    /**
     * @var ProjectEmployeeExpenseDistributionKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ProjectEmployeeExpenseDistributionKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectEmployeeExpenseDistributionKey $Key
     * @return ProjectEmployeeExpenseDistribution
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
