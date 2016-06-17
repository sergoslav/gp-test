<?php

class Policy
{

    /**
     * @var ArrayOfBehavior $Behaviors
     */
    protected $Behaviors = null;

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
     * @return ArrayOfBehavior
     */
    public function getBehaviors()
    {
      return $this->Behaviors;
    }

    /**
     * @param ArrayOfBehavior $Behaviors
     * @return Policy
     */
    public function setBehaviors($Behaviors)
    {
      $this->Behaviors = $Behaviors;
      return $this;
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
     * @return Policy
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
     * @return Policy
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
     * @return Policy
     */
    public function setRootBusinessObjectName($RootBusinessObjectName)
    {
      $this->RootBusinessObjectName = $RootBusinessObjectName;
      return $this;
    }

}
