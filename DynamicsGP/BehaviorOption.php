<?php

class BehaviorOption
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var BehaviorOptionKey $Key
     */
    protected $Key = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ArrayOfParameter $Parameters
     */
    protected $Parameters = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return BehaviorOption
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return BehaviorOptionKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param BehaviorOptionKey $Key
     * @return BehaviorOption
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
     * @return BehaviorOption
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ArrayOfParameter
     */
    public function getParameters()
    {
      return $this->Parameters;
    }

    /**
     * @param ArrayOfParameter $Parameters
     * @return BehaviorOption
     */
    public function setParameters($Parameters)
    {
      $this->Parameters = $Parameters;
      return $this;
    }

}
