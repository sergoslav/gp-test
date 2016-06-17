<?php

class ApplicantReference extends BusinessObject
{

    /**
     * @var ApplicantAddress $Address
     */
    protected $Address = null;

    /**
     * @var ApplicantReferenceKey $ApplicantReferenceKey
     */
    protected $ApplicantReferenceKey = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var boolean $DeleteOnUpdate
     */
    protected $DeleteOnUpdate = null;

    /**
     * @var string $LastModifiedBy
     */
    protected $LastModifiedBy = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var string $Relationship
     */
    protected $Relationship = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ApplicantAddress
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param ApplicantAddress $Address
     * @return ApplicantReference
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return ApplicantReferenceKey
     */
    public function getApplicantReferenceKey()
    {
      return $this->ApplicantReferenceKey;
    }

    /**
     * @param ApplicantReferenceKey $ApplicantReferenceKey
     * @return ApplicantReference
     */
    public function setApplicantReferenceKey($ApplicantReferenceKey)
    {
      $this->ApplicantReferenceKey = $ApplicantReferenceKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return ApplicantReference
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeleteOnUpdate()
    {
      return $this->DeleteOnUpdate;
    }

    /**
     * @param boolean $DeleteOnUpdate
     * @return ApplicantReference
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedBy()
    {
      return $this->LastModifiedBy;
    }

    /**
     * @param string $LastModifiedBy
     * @return ApplicantReference
     */
    public function setLastModifiedBy($LastModifiedBy)
    {
      $this->LastModifiedBy = $LastModifiedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->LastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedDate
     * @return ApplicantReference
     */
    public function setLastModifiedDate(\DateTime $LastModifiedDate = null)
    {
      if ($LastModifiedDate == null) {
       $this->LastModifiedDate = null;
      } else {
        $this->LastModifiedDate = $LastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return ApplicantReference
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelationship()
    {
      return $this->Relationship;
    }

    /**
     * @param string $Relationship
     * @return ApplicantReference
     */
    public function setRelationship($Relationship)
    {
      $this->Relationship = $Relationship;
      return $this;
    }

}
