<?php

class TaxSchedule extends BusinessObject
{

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var string $TaxScheduleDescription
     */
    protected $TaxScheduleDescription = null;

    /**
     * @var TaxScheduleKey $TaxScheduleKey
     */
    protected $TaxScheduleKey = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return TaxSchedule
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxScheduleDescription()
    {
      return $this->TaxScheduleDescription;
    }

    /**
     * @param string $TaxScheduleDescription
     * @return TaxSchedule
     */
    public function setTaxScheduleDescription($TaxScheduleDescription)
    {
      $this->TaxScheduleDescription = $TaxScheduleDescription;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getTaxScheduleKey()
    {
      return $this->TaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $TaxScheduleKey
     * @return TaxSchedule
     */
    public function setTaxScheduleKey($TaxScheduleKey)
    {
      $this->TaxScheduleKey = $TaxScheduleKey;
      return $this;
    }

}
