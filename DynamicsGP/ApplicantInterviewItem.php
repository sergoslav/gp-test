<?php

class ApplicantInterviewItem
{

    /**
     * @var int $CategoryCode
     */
    protected $CategoryCode = null;

    /**
     * @var string $CategoryName
     */
    protected $CategoryName = null;

    /**
     * @var int $CategoryWeight
     */
    protected $CategoryWeight = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var int $Score
     */
    protected $Score = null;

    /**
     * @var SequenceKey $SequenceKey
     */
    protected $SequenceKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCategoryCode()
    {
      return $this->CategoryCode;
    }

    /**
     * @param int $CategoryCode
     * @return ApplicantInterviewItem
     */
    public function setCategoryCode($CategoryCode)
    {
      $this->CategoryCode = $CategoryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
      return $this->CategoryName;
    }

    /**
     * @param string $CategoryName
     * @return ApplicantInterviewItem
     */
    public function setCategoryName($CategoryName)
    {
      $this->CategoryName = $CategoryName;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryWeight()
    {
      return $this->CategoryWeight;
    }

    /**
     * @param int $CategoryWeight
     * @return ApplicantInterviewItem
     */
    public function setCategoryWeight($CategoryWeight)
    {
      $this->CategoryWeight = $CategoryWeight;
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
     * @return ApplicantInterviewItem
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return int
     */
    public function getScore()
    {
      return $this->Score;
    }

    /**
     * @param int $Score
     * @return ApplicantInterviewItem
     */
    public function setScore($Score)
    {
      $this->Score = $Score;
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
     * @return ApplicantInterviewItem
     */
    public function setSequenceKey($SequenceKey)
    {
      $this->SequenceKey = $SequenceKey;
      return $this;
    }

}
