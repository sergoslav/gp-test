<?php

class Behavior
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $Internal
     */
    protected $Internal = null;

    /**
     * @var BehaviorKey $Key
     */
    protected $Key = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ArrayOfBehaviorOption $Options
     */
    protected $Options = null;

    /**
     * @var BehaviorOption $SelectedOption
     */
    protected $SelectedOption = null;

    
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
     * @return Behavior
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInternal()
    {
      return $this->Internal;
    }

    /**
     * @param boolean $Internal
     * @return Behavior
     */
    public function setInternal($Internal)
    {
      $this->Internal = $Internal;
      return $this;
    }

    /**
     * @return BehaviorKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param BehaviorKey $Key
     * @return Behavior
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
     * @return Behavior
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ArrayOfBehaviorOption
     */
    public function getOptions()
    {
      return $this->Options;
    }

    /**
     * @param ArrayOfBehaviorOption $Options
     * @return Behavior
     */
    public function setOptions($Options)
    {
      $this->Options = $Options;
      return $this;
    }

    /**
     * @return BehaviorOption
     */
    public function getSelectedOption()
    {
      return $this->SelectedOption;
    }

    /**
     * @param BehaviorOption $SelectedOption
     * @return Behavior
     */
    public function setSelectedOption($SelectedOption)
    {
      $this->SelectedOption = $SelectedOption;
      return $this;
    }

}
