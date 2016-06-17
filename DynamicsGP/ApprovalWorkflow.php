<?php

class ApprovalWorkflow extends Workflow
{

    /**
     * @var ApprovalWorkflowStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $WorkflowName
     */
    protected $WorkflowName = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ApprovalWorkflowStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ApprovalWorkflowStatus $Status
     * @return ApprovalWorkflow
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkflowName()
    {
      return $this->WorkflowName;
    }

    /**
     * @param string $WorkflowName
     * @return ApprovalWorkflow
     */
    public function setWorkflowName($WorkflowName)
    {
      $this->WorkflowName = $WorkflowName;
      return $this;
    }

}
