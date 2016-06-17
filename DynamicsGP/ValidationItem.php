<?php

class ValidationItem
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $ObjectType
     */
    protected $ObjectType = null;

    /**
     * @var ArrayOfstring $PropertyNames
     */
    protected $PropertyNames = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return ValidationItem
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return ValidationItem
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getObjectType()
    {
      return $this->ObjectType;
    }

    /**
     * @param string $ObjectType
     * @return ValidationItem
     */
    public function setObjectType($ObjectType)
    {
      $this->ObjectType = $ObjectType;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getPropertyNames()
    {
      return $this->PropertyNames;
    }

    /**
     * @param ArrayOfstring $PropertyNames
     * @return ValidationItem
     */
    public function setPropertyNames($PropertyNames)
    {
      $this->PropertyNames = $PropertyNames;
      return $this;
    }

}
