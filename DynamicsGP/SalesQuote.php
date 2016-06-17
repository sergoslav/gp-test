<?php

class SalesQuote extends SalesDocument
{

    /**
     * @var int $DaysToIncrement
     */
    protected $DaysToIncrement = null;

    /**
     * @var Frequency $DocumentFrequency
     */
    protected $DocumentFrequency = null;

    /**
     * @var \DateTime $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var boolean $IsProspect
     */
    protected $IsProspect = null;

    /**
     * @var boolean $IsRepeating
     */
    protected $IsRepeating = null;

    /**
     * @var ArrayOfSalesQuoteLine $Lines
     */
    protected $Lines = null;

    /**
     * @var int $TimesToRepeat
     */
    protected $TimesToRepeat = null;

    /**
     * @var WorkflowPriority $WorkflowPriority
     */
    protected $WorkflowPriority = null;

    /**
     * @var ArrayOfWorkflow $Workflows
     */
    protected $Workflows = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getDaysToIncrement()
    {
      return $this->DaysToIncrement;
    }

    /**
     * @param int $DaysToIncrement
     * @return SalesQuote
     */
    public function setDaysToIncrement($DaysToIncrement)
    {
      $this->DaysToIncrement = $DaysToIncrement;
      return $this;
    }

    /**
     * @return Frequency
     */
    public function getDocumentFrequency()
    {
      return $this->DocumentFrequency;
    }

    /**
     * @param Frequency $DocumentFrequency
     * @return SalesQuote
     */
    public function setDocumentFrequency($DocumentFrequency)
    {
      $this->DocumentFrequency = $DocumentFrequency;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
      if ($this->ExpirationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpirationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpirationDate
     * @return SalesQuote
     */
    public function setExpirationDate(\DateTime $ExpirationDate = null)
    {
      if ($ExpirationDate == null) {
       $this->ExpirationDate = null;
      } else {
        $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProspect()
    {
      return $this->IsProspect;
    }

    /**
     * @param boolean $IsProspect
     * @return SalesQuote
     */
    public function setIsProspect($IsProspect)
    {
      $this->IsProspect = $IsProspect;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRepeating()
    {
      return $this->IsRepeating;
    }

    /**
     * @param boolean $IsRepeating
     * @return SalesQuote
     */
    public function setIsRepeating($IsRepeating)
    {
      $this->IsRepeating = $IsRepeating;
      return $this;
    }

    /**
     * @return ArrayOfSalesQuoteLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfSalesQuoteLine $Lines
     * @return SalesQuote
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return int
     */
    public function getTimesToRepeat()
    {
      return $this->TimesToRepeat;
    }

    /**
     * @param int $TimesToRepeat
     * @return SalesQuote
     */
    public function setTimesToRepeat($TimesToRepeat)
    {
      $this->TimesToRepeat = $TimesToRepeat;
      return $this;
    }

    /**
     * @return WorkflowPriority
     */
    public function getWorkflowPriority()
    {
      return $this->WorkflowPriority;
    }

    /**
     * @param WorkflowPriority $WorkflowPriority
     * @return SalesQuote
     */
    public function setWorkflowPriority($WorkflowPriority)
    {
      $this->WorkflowPriority = $WorkflowPriority;
      return $this;
    }

    /**
     * @return ArrayOfWorkflow
     */
    public function getWorkflows()
    {
      return $this->Workflows;
    }

    /**
     * @param ArrayOfWorkflow $Workflows
     * @return SalesQuote
     */
    public function setWorkflows($Workflows)
    {
      $this->Workflows = $Workflows;
      return $this;
    }

}
