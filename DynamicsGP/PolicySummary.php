<?php

class PolicySummary
{

    /**
     * @var PolicyKey $Key
     */
    protected $Key = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $RootBusinessObjectName
     */
    protected $RootBusinessObjectName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PolicyKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PolicyKey $Key
     * @return PolicySummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return PolicySummary
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getRootBusinessObjectName()
    {
      return $this->RootBusinessObjectName;
    }

    /**
     * @param string $RootBusinessObjectName
     * @return PolicySummary
     */
    public function setRootBusinessObjectName($RootBusinessObjectName)
    {
      $this->RootBusinessObjectName = $RootBusinessObjectName;
      return $this;
    }

}
