<?php

class ApplicantTestKey extends ReferenceKey
{

    /**
     * @var ApplicantSequenceKey $ApplicantSequenceKey
     */
    protected $ApplicantSequenceKey = null;

    /**
     * @var TestKey $TestKey
     */
    protected $TestKey = null;

    
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
     * @return ApplicantTestKey
     */
    public function setApplicantSequenceKey($ApplicantSequenceKey)
    {
      $this->ApplicantSequenceKey = $ApplicantSequenceKey;
      return $this;
    }

    /**
     * @return TestKey
     */
    public function getTestKey()
    {
      return $this->TestKey;
    }

    /**
     * @param TestKey $TestKey
     * @return ApplicantTestKey
     */
    public function setTestKey($TestKey)
    {
      $this->TestKey = $TestKey;
      return $this;
    }

}
