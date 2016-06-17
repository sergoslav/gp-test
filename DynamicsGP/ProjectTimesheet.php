<?php

class ProjectTimesheet extends ProjectHeaderBase
{

    /**
     * @var ArrayOfProjectTimesheetDistribution $Distributions
     */
    protected $Distributions = null;

    /**
     * @var EmployeeKey $EmployeeKey
     */
    protected $EmployeeKey = null;

    /**
     * @var ProjectTimesheetKey $Key
     */
    protected $Key = null;

    /**
     * @var ArrayOfProjectTimesheetLine $Lines
     */
    protected $Lines = null;

    /**
     * @var \DateTime $PeriodEndDate
     */
    protected $PeriodEndDate = null;

    /**
     * @var EmployeeKey $PersonalDataKeeperProxyKey
     */
    protected $PersonalDataKeeperProxyKey = null;

    /**
     * @var string $PersonalDataKeeperTimesheetNumber
     */
    protected $PersonalDataKeeperTimesheetNumber = null;

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
     * @return ArrayOfProjectTimesheetDistribution
     */
    public function getDistributions()
    {
      return $this->Distributions;
    }

    /**
     * @param ArrayOfProjectTimesheetDistribution $Distributions
     * @return ProjectTimesheet
     */
    public function setDistributions($Distributions)
    {
      $this->Distributions = $Distributions;
      return $this;
    }

    /**
     * @return EmployeeKey
     */
    public function getEmployeeKey()
    {
      return $this->EmployeeKey;
    }

    /**
     * @param EmployeeKey $EmployeeKey
     * @return ProjectTimesheet
     */
    public function setEmployeeKey($EmployeeKey)
    {
      $this->EmployeeKey = $EmployeeKey;
      return $this;
    }

    /**
     * @return ProjectTimesheetKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectTimesheetKey $Key
     * @return ProjectTimesheet
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ArrayOfProjectTimesheetLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfProjectTimesheetLine $Lines
     * @return ProjectTimesheet
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
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
     * @return ProjectTimesheet
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
     * @return EmployeeKey
     */
    public function getPersonalDataKeeperProxyKey()
    {
      return $this->PersonalDataKeeperProxyKey;
    }

    /**
     * @param EmployeeKey $PersonalDataKeeperProxyKey
     * @return ProjectTimesheet
     */
    public function setPersonalDataKeeperProxyKey($PersonalDataKeeperProxyKey)
    {
      $this->PersonalDataKeeperProxyKey = $PersonalDataKeeperProxyKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getPersonalDataKeeperTimesheetNumber()
    {
      return $this->PersonalDataKeeperTimesheetNumber;
    }

    /**
     * @param string $PersonalDataKeeperTimesheetNumber
     * @return ProjectTimesheet
     */
    public function setPersonalDataKeeperTimesheetNumber($PersonalDataKeeperTimesheetNumber)
    {
      $this->PersonalDataKeeperTimesheetNumber = $PersonalDataKeeperTimesheetNumber;
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
     * @return ProjectTimesheet
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
     * @return ProjectTimesheet
     */
    public function setReportingPeriod($ReportingPeriod)
    {
      $this->ReportingPeriod = $ReportingPeriod;
      return $this;
    }

}
