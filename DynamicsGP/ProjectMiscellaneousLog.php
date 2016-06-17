<?php

class ProjectMiscellaneousLog extends ProjectHeaderBase
{

    /**
     * @var ArrayOfProjectMiscellaneousLogDistribution $Distributions
     */
    protected $Distributions = null;

    /**
     * @var ProjectMiscellaneousLogKey $Key
     */
    protected $Key = null;

    /**
     * @var ArrayOfProjectMiscellaneousLogLine $Lines
     */
    protected $Lines = null;

    /**
     * @var MiscellaneousKey $MiscellaneousKey
     */
    protected $MiscellaneousKey = null;

    /**
     * @var \DateTime $PeriodEndDate
     */
    protected $PeriodEndDate = null;

    /**
     * @var \DateTime $ReportingDate
     */
    protected $ReportingDate = null;

    /**
     * @var int $ReportingPeriod
     */
    protected $ReportingPeriod = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfProjectMiscellaneousLogDistribution
     */
    public function getDistributions()
    {
      return $this->Distributions;
    }

    /**
     * @param ArrayOfProjectMiscellaneousLogDistribution $Distributions
     * @return ProjectMiscellaneousLog
     */
    public function setDistributions($Distributions)
    {
      $this->Distributions = $Distributions;
      return $this;
    }

    /**
     * @return ProjectMiscellaneousLogKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectMiscellaneousLogKey $Key
     * @return ProjectMiscellaneousLog
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ArrayOfProjectMiscellaneousLogLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfProjectMiscellaneousLogLine $Lines
     * @return ProjectMiscellaneousLog
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return MiscellaneousKey
     */
    public function getMiscellaneousKey()
    {
      return $this->MiscellaneousKey;
    }

    /**
     * @param MiscellaneousKey $MiscellaneousKey
     * @return ProjectMiscellaneousLog
     */
    public function setMiscellaneousKey($MiscellaneousKey)
    {
      $this->MiscellaneousKey = $MiscellaneousKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodEndDate()
    {
      if ($this->PeriodEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PeriodEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PeriodEndDate
     * @return ProjectMiscellaneousLog
     */
    public function setPeriodEndDate(\DateTime $PeriodEndDate = null)
    {
      if ($PeriodEndDate == null) {
       $this->PeriodEndDate = null;
      } else {
        $this->PeriodEndDate = $PeriodEndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReportingDate()
    {
      if ($this->ReportingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReportingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReportingDate
     * @return ProjectMiscellaneousLog
     */
    public function setReportingDate(\DateTime $ReportingDate = null)
    {
      if ($ReportingDate == null) {
       $this->ReportingDate = null;
      } else {
        $this->ReportingDate = $ReportingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getReportingPeriod()
    {
      return $this->ReportingPeriod;
    }

    /**
     * @param int $ReportingPeriod
     * @return ProjectMiscellaneousLog
     */
    public function setReportingPeriod($ReportingPeriod)
    {
      $this->ReportingPeriod = $ReportingPeriod;
      return $this;
    }

}
