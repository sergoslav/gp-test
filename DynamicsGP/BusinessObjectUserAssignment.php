<?php

class BusinessObjectUserAssignment
{

    /**
     * @var string $BusinessObjectKey
     */
    protected $BusinessObjectKey = null;

    /**
     * @var guid $BusinessObjectTypeId
     */
    protected $BusinessObjectTypeId = null;

    /**
     * @var OrganizationKey $OrganizationKey
     */
    protected $OrganizationKey = null;

    /**
     * @var string $User
     */
    protected $User = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBusinessObjectKey()
    {
      return $this->BusinessObjectKey;
    }

    /**
     * @param string $BusinessObjectKey
     * @return BusinessObjectUserAssignment
     */
    public function setBusinessObjectKey($BusinessObjectKey)
    {
      $this->BusinessObjectKey = $BusinessObjectKey;
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
     * @return BusinessObjectUserAssignment
     */
    public function setBusinessObjectTypeId($BusinessObjectTypeId)
    {
      $this->BusinessObjectTypeId = $BusinessObjectTypeId;
      return $this;
    }

    /**
     * @return OrganizationKey
     */
    public function getOrganizationKey()
    {
      return $this->OrganizationKey;
    }

    /**
     * @param OrganizationKey $OrganizationKey
     * @return BusinessObjectUserAssignment
     */
    public function setOrganizationKey($OrganizationKey)
    {
      $this->OrganizationKey = $OrganizationKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
      return $this->User;
    }

    /**
     * @param string $User
     * @return BusinessObjectUserAssignment
     */
    public function setUser($User)
    {
      $this->User = $User;
      return $this;
    }

}
