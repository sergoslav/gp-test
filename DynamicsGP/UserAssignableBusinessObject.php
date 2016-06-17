<?php

class UserAssignableBusinessObject
{

    /**
     * @var string $BusinessObjectTypeDisplayName
     */
    protected $BusinessObjectTypeDisplayName = null;

    /**
     * @var guid $BusinessObjectTypeId
     */
    protected $BusinessObjectTypeId = null;

    /**
     * @var boolean $IsKeyEqualToDisplayId
     */
    protected $IsKeyEqualToDisplayId = null;

    /**
     * @var SupportedContainment $SupportedContainment
     */
    protected $SupportedContainment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBusinessObjectTypeDisplayName()
    {
      return $this->BusinessObjectTypeDisplayName;
    }

    /**
     * @param string $BusinessObjectTypeDisplayName
     * @return UserAssignableBusinessObject
     */
    public function setBusinessObjectTypeDisplayName($BusinessObjectTypeDisplayName)
    {
      $this->BusinessObjectTypeDisplayName = $BusinessObjectTypeDisplayName;
      return $this;
    }

    /**
     * @return guid
     */
    public function getBusinessObjectTypeId()
    {
      return $this->BusinessObjectTypeId;
    }

    /**
     * @param guid $BusinessObjectTypeId
     * @return UserAssignableBusinessObject
     */
    public function setBusinessObjectTypeId($BusinessObjectTypeId)
    {
      $this->BusinessObjectTypeId = $BusinessObjectTypeId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsKeyEqualToDisplayId()
    {
      return $this->IsKeyEqualToDisplayId;
    }

    /**
     * @param boolean $IsKeyEqualToDisplayId
     * @return UserAssignableBusinessObject
     */
    public function setIsKeyEqualToDisplayId($IsKeyEqualToDisplayId)
    {
      $this->IsKeyEqualToDisplayId = $IsKeyEqualToDisplayId;
      return $this;
    }

    /**
     * @return SupportedContainment
     */
    public function getSupportedContainment()
    {
      return $this->SupportedContainment;
    }

    /**
     * @param SupportedContainment $SupportedContainment
     * @return UserAssignableBusinessObject
     */
    public function setSupportedContainment($SupportedContainment)
    {
      $this->SupportedContainment = $SupportedContainment;
      return $this;
    }

}
