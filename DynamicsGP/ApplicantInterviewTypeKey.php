<?php

class ApplicantInterviewTypeKey extends ReferenceKey
{

    /**
     * @var ApplicantKey $ApplicantKey
     */
    protected $ApplicantKey = null;

    /**
     * @var ApplyDateKey $ApplyDateKey
     */
    protected $ApplyDateKey = null;

    /**
     * @var InterviewTypeKey $InterviewTypeKey
     */
    protected $InterviewTypeKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ApplicantKey
     */
    public function getApplicantKey()
    {
      return $this->ApplicantKey;
    }

    /**
     * @param ApplicantKey $ApplicantKey
     * @return ApplicantInterviewTypeKey
     */
    public function setApplicantKey($ApplicantKey)
    {
      $this->ApplicantKey = $ApplicantKey;
      return $this;
    }

    /**
     * @return ApplyDateKey
     */
    public function getApplyDateKey()
    {
      return $this->ApplyDateKey;
    }

    /**
     * @param ApplyDateKey $ApplyDateKey
     * @return ApplicantInterviewTypeKey
     */
    public function setApplyDateKey($ApplyDateKey)
    {
      $this->ApplyDateKey = $ApplyDateKey;
      return $this;
    }

    /**
     * @return InterviewTypeKey
     */
    public function getInterviewTypeKey()
    {
      return $this->InterviewTypeKey;
    }

    /**
     * @param InterviewTypeKey $InterviewTypeKey
     * @return ApplicantInterviewTypeKey
     */
    public function setInterviewTypeKey($InterviewTypeKey)
    {
      $this->InterviewTypeKey = $InterviewTypeKey;
      return $this;
    }

}
