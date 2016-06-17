<?php

class GLAccountFormat extends BusinessObject
{

    /**
     * @var boolean $IsMainSegment
     */
    protected $IsMainSegment = null;

    /**
     * @var GLAccountFormatKey $Key
     */
    protected $Key = null;

    /**
     * @var int $MaximumSegmentLength
     */
    protected $MaximumSegmentLength = null;

    /**
     * @var int $SegmentLength
     */
    protected $SegmentLength = null;

    /**
     * @var string $SegmentName
     */
    protected $SegmentName = null;

    /**
     * @var int $UserDefinedSegment
     */
    protected $UserDefinedSegment = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getIsMainSegment()
    {
      return $this->IsMainSegment;
    }

    /**
     * @param boolean $IsMainSegment
     * @return GLAccountFormat
     */
    public function setIsMainSegment($IsMainSegment)
    {
      $this->IsMainSegment = $IsMainSegment;
      return $this;
    }

    /**
     * @return GLAccountFormatKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param GLAccountFormatKey $Key
     * @return GLAccountFormat
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumSegmentLength()
    {
      return $this->MaximumSegmentLength;
    }

    /**
     * @param int $MaximumSegmentLength
     * @return GLAccountFormat
     */
    public function setMaximumSegmentLength($MaximumSegmentLength)
    {
      $this->MaximumSegmentLength = $MaximumSegmentLength;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentLength()
    {
      return $this->SegmentLength;
    }

    /**
     * @param int $SegmentLength
     * @return GLAccountFormat
     */
    public function setSegmentLength($SegmentLength)
    {
      $this->SegmentLength = $SegmentLength;
      return $this;
    }

    /**
     * @return string
     */
    public function getSegmentName()
    {
      return $this->SegmentName;
    }

    /**
     * @param string $SegmentName
     * @return GLAccountFormat
     */
    public function setSegmentName($SegmentName)
    {
      $this->SegmentName = $SegmentName;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserDefinedSegment()
    {
      return $this->UserDefinedSegment;
    }

    /**
     * @param int $UserDefinedSegment
     * @return GLAccountFormat
     */
    public function setUserDefinedSegment($UserDefinedSegment)
    {
      $this->UserDefinedSegment = $UserDefinedSegment;
      return $this;
    }

}
