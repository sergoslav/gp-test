<?php

class ProjectTimesheetDistribution extends ProjectDistributionBase
{

    /**
     * @var ProjectTimesheetDistributionKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ProjectTimesheetDistributionKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectTimesheetDistributionKey $Key
     * @return ProjectTimesheetDistribution
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
