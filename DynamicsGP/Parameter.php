<?php

class Parameter
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ParameterKey $Key
     */
    protected $Key = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
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
     * @return Parameter
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ParameterKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ParameterKey $Key
     * @return Parameter
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
     * @return Parameter
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return Parameter
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
