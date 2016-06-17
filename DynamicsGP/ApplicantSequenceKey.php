<?php

class ApplicantSequenceKey extends ReferenceKey
{

    /**
     * @var ApplicantKey $ApplicantKey
     */
    protected $ApplicantKey = null;

    /**
     * @var SequenceKey $SequenceKey
     */
    protected $SequenceKey = null;

    
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
     * @return ApplicantSequenceKey
     */
    public function setApplicantKey($ApplicantKey)
    {
      $this->ApplicantKey = $ApplicantKey;
      return $this;
    }

    /**
     * @return SequenceKey
     */
    public function getSequenceKey()
    {
      return $this->SequenceKey;
    }

    /**
     * @param SequenceKey $SequenceKey
     * @return ApplicantSequenceKey
     */
    public function setSequenceKey($SequenceKey)
    {
      $this->SequenceKey = $SequenceKey;
      return $this;
    }

}
