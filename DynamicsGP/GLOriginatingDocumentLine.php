<?php

class GLOriginatingDocumentLine
{

    /**
     * @var string $ControlId
     */
    protected $ControlId = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $MasterId
     */
    protected $MasterId = null;

    /**
     * @var string $MasterName
     */
    protected $MasterName = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var int $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getControlId()
    {
      return $this->ControlId;
    }

    /**
     * @param string $ControlId
     * @return GLOriginatingDocumentLine
     */
    public function setControlId($ControlId)
    {
      $this->ControlId = $ControlId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return GLOriginatingDocumentLine
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return GLOriginatingDocumentLine
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getMasterId()
    {
      return $this->MasterId;
    }

    /**
     * @param string $MasterId
     * @return GLOriginatingDocumentLine
     */
    public function setMasterId($MasterId)
    {
      $this->MasterId = $MasterId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMasterName()
    {
      return $this->MasterName;
    }

    /**
     * @param string $MasterName
     * @return GLOriginatingDocumentLine
     */
    public function setMasterName($MasterName)
    {
      $this->MasterName = $MasterName;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
      return $this->SequenceNumber;
    }

    /**
     * @param int $SequenceNumber
     * @return GLOriginatingDocumentLine
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param int $Type
     * @return GLOriginatingDocumentLine
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
