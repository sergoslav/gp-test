<?php

class ProjectCashDetail extends CashDetail
{

    /**
     * @var string $DocumentNumber
     */
    protected $DocumentNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getDocumentNumber()
    {
      return $this->DocumentNumber;
    }

    /**
     * @param string $DocumentNumber
     * @return ProjectCashDetail
     */
    public function setDocumentNumber($DocumentNumber)
    {
      $this->DocumentNumber = $DocumentNumber;
      return $this;
    }

}
