<?php

class ApplicantReferenceSummary
{

    /**
     * @var ApplicantReferenceKey $ApplicantReferenceKey
     */
    protected $ApplicantReferenceKey = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var string $Relationship
     */
    protected $Relationship = null;

    
    public function __construct()
    {
    
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
     * @return ApplicantReferenceSummary
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
     * @return ApplicantReferenceSummary
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
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
     * @return ApplicantReferenceSummary
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
    public function getRelationship()
    {
      return $this->Relationship;
    }

    /**
     * @param string $Relationship
     * @return ApplicantReferenceSummary
     */
    public function setRelationship($Relationship)
    {
      $this->Relationship = $Relationship;
      return $this;
    }

}
