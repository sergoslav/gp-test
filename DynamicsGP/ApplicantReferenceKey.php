<?php

class ApplicantReferenceKey extends ReferenceKey
{

    /**
     * @var ApplicantSequenceKey $ApplicantSequenceKey
     */
    protected $ApplicantSequenceKey = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ApplicantSequenceKey
     */
    public function getApplicantSequenceKey()
    {
      return $this->ApplicantSequenceKey;
    }

    /**
     * @param ApplicantSequenceKey $ApplicantSequenceKey
     * @return ApplicantReferenceKey
     */
    public function setApplicantSequenceKey($ApplicantSequenceKey)
    {
      $this->ApplicantSequenceKey = $ApplicantSequenceKey;
      return $this;
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
     * @return ApplicantReferenceKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
