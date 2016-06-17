<?php

class ProjectMiscellaneousLogDistribution extends ProjectDistributionBase
{

    /**
     * @var ProjectMiscellaneousLogDistributionKey $Key
     */
    protected $Key = null;

    /**
     * @var UserKey $UserKey
     */
    protected $UserKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ProjectMiscellaneousLogDistributionKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectMiscellaneousLogDistributionKey $Key
     * @return ProjectMiscellaneousLogDistribution
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return UserKey
     */
    public function getUserKey()
    {
      return $this->UserKey;
    }

    /**
     * @param UserKey $UserKey
     * @return ProjectMiscellaneousLogDistribution
     */
    public function setUserKey($UserKey)
    {
      $this->UserKey = $UserKey;
      return $this;
    }

}
