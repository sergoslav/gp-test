<?php

class HRRequisitionSummary extends BusinessObjectSummary
{

    /**
     * @var \DateTime $InternalCloseDate
     */
    protected $InternalCloseDate = null;

    /**
     * @var \DateTime $InternalPostDate
     */
    protected $InternalPostDate = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var ManagerKey $ManagerKey
     */
    protected $ManagerKey = null;

    /**
     * @var \DateTime $OpeningDate
     */
    protected $OpeningDate = null;

    /**
     * @var PositionKey $PositionKey
     */
    protected $PositionKey = null;

    /**
     * @var HRRequisitionNumberKey $RequisitionNumber
     */
    protected $RequisitionNumber = null;

    /**
     * @var HRRequisitionStatus $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getInternalCloseDate()
    {
      if ($this->InternalCloseDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InternalCloseDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InternalCloseDate
     * @return HRRequisitionSummary
     */
    public function setInternalCloseDate(\DateTime $InternalCloseDate = null)
    {
      if ($InternalCloseDate == null) {
       $this->InternalCloseDate = null;
      } else {
        $this->InternalCloseDate = $InternalCloseDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInternalPostDate()
    {
      if ($this->InternalPostDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InternalPostDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InternalPostDate
     * @return HRRequisitionSummary
     */
    public function setInternalPostDate(\DateTime $InternalPostDate = null)
    {
      if ($InternalPostDate == null) {
       $this->InternalPostDate = null;
      } else {
        $this->InternalPostDate = $InternalPostDate->format(\DateTime::ATOM);
      }
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
     * @return HRRequisitionSummary
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
     * @return ManagerKey
     */
    public function getManagerKey()
    {
      return $this->ManagerKey;
    }

    /**
     * @param ManagerKey $ManagerKey
     * @return HRRequisitionSummary
     */
    public function setManagerKey($ManagerKey)
    {
      $this->ManagerKey = $ManagerKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOpeningDate()
    {
      if ($this->OpeningDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->OpeningDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $OpeningDate
     * @return HRRequisitionSummary
     */
    public function setOpeningDate(\DateTime $OpeningDate = null)
    {
      if ($OpeningDate == null) {
       $this->OpeningDate = null;
      } else {
        $this->OpeningDate = $OpeningDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return PositionKey
     */
    public function getPositionKey()
    {
      return $this->PositionKey;
    }

    /**
     * @param PositionKey $PositionKey
     * @return HRRequisitionSummary
     */
    public function setPositionKey($PositionKey)
    {
      $this->PositionKey = $PositionKey;
      return $this;
    }

    /**
     * @return HRRequisitionNumberKey
     */
    public function getRequisitionNumber()
    {
      return $this->RequisitionNumber;
    }

    /**
     * @param HRRequisitionNumberKey $RequisitionNumber
     * @return HRRequisitionSummary
     */
    public function setRequisitionNumber($RequisitionNumber)
    {
      $this->RequisitionNumber = $RequisitionNumber;
      return $this;
    }

    /**
     * @return HRRequisitionStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param HRRequisitionStatus $Status
     * @return HRRequisitionSummary
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
