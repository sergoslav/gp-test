<?php

class ProjectTimesheetLine extends ProjectLineBase
{

    /**
     * @var \DateTime $BeginDateTime
     */
    protected $BeginDateTime = null;

    /**
     * @var ProjectBillingFull $Billing
     */
    protected $Billing = null;

    /**
     * @var PayrollDepartmentKey $DepartmentCodeKey
     */
    protected $DepartmentCodeKey = null;

    /**
     * @var \DateTime $EndDateTime
     */
    protected $EndDateTime = null;

    /**
     * @var JobTitleKey $JobTitleCodeKey
     */
    protected $JobTitleCodeKey = null;

    /**
     * @var ProjectTimesheetLineKey $Key
     */
    protected $Key = null;

    /**
     * @var PayCodeKey $PayCodeKey
     */
    protected $PayCodeKey = null;

    /**
     * @var ProjectChangeOrderKey $ProjectChangeOrderKey
     */
    protected $ProjectChangeOrderKey = null;

    /**
     * @var SalaryPostingType $SalaryPostingType
     */
    protected $SalaryPostingType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getBeginDateTime()
    {
      if ($this->BeginDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BeginDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BeginDateTime
     * @return ProjectTimesheetLine
     */
    public function setBeginDateTime(\DateTime $BeginDateTime = null)
    {
      if ($BeginDateTime == null) {
       $this->BeginDateTime = null;
      } else {
        $this->BeginDateTime = $BeginDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ProjectBillingFull
     */
    public function getBilling()
    {
      return $this->Billing;
    }

    /**
     * @param ProjectBillingFull $Billing
     * @return ProjectTimesheetLine
     */
    public function setBilling($Billing)
    {
      $this->Billing = $Billing;
      return $this;
    }

    /**
     * @return PayrollDepartmentKey
     */
    public function getDepartmentCodeKey()
    {
      return $this->DepartmentCodeKey;
    }

    /**
     * @param PayrollDepartmentKey $DepartmentCodeKey
     * @return ProjectTimesheetLine
     */
    public function setDepartmentCodeKey($DepartmentCodeKey)
    {
      $this->DepartmentCodeKey = $DepartmentCodeKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDateTime()
    {
      if ($this->EndDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDateTime
     * @return ProjectTimesheetLine
     */
    public function setEndDateTime(\DateTime $EndDateTime = null)
    {
      if ($EndDateTime == null) {
       $this->EndDateTime = null;
      } else {
        $this->EndDateTime = $EndDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return JobTitleKey
     */
    public function getJobTitleCodeKey()
    {
      return $this->JobTitleCodeKey;
    }

    /**
     * @param JobTitleKey $JobTitleCodeKey
     * @return ProjectTimesheetLine
     */
    public function setJobTitleCodeKey($JobTitleCodeKey)
    {
      $this->JobTitleCodeKey = $JobTitleCodeKey;
      return $this;
    }

    /**
     * @return ProjectTimesheetLineKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectTimesheetLineKey $Key
     * @return ProjectTimesheetLine
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return PayCodeKey
     */
    public function getPayCodeKey()
    {
      return $this->PayCodeKey;
    }

    /**
     * @param PayCodeKey $PayCodeKey
     * @return ProjectTimesheetLine
     */
    public function setPayCodeKey($PayCodeKey)
    {
      $this->PayCodeKey = $PayCodeKey;
      return $this;
    }

    /**
     * @return ProjectChangeOrderKey
     */
    public function getProjectChangeOrderKey()
    {
      return $this->ProjectChangeOrderKey;
    }

    /**
     * @param ProjectChangeOrderKey $ProjectChangeOrderKey
     * @return ProjectTimesheetLine
     */
    public function setProjectChangeOrderKey($ProjectChangeOrderKey)
    {
      $this->ProjectChangeOrderKey = $ProjectChangeOrderKey;
      return $this;
    }

    /**
     * @return SalaryPostingType
     */
    public function getSalaryPostingType()
    {
      return $this->SalaryPostingType;
    }

    /**
     * @param SalaryPostingType $SalaryPostingType
     * @return ProjectTimesheetLine
     */
    public function setSalaryPostingType($SalaryPostingType)
    {
      $this->SalaryPostingType = $SalaryPostingType;
      return $this;
    }

}
