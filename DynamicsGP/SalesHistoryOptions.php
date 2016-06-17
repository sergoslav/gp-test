<?php

class SalesHistoryOptions extends BusinessObject
{

    /**
     * @var boolean $KeepCalendar
     */
    protected $KeepCalendar = null;

    /**
     * @var boolean $KeepPeriod
     */
    protected $KeepPeriod = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getKeepCalendar()
    {
      return $this->KeepCalendar;
    }

    /**
     * @param boolean $KeepCalendar
     * @return SalesHistoryOptions
     */
    public function setKeepCalendar($KeepCalendar)
    {
      $this->KeepCalendar = $KeepCalendar;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeepPeriod()
    {
      return $this->KeepPeriod;
    }

    /**
     * @param boolean $KeepPeriod
     * @return SalesHistoryOptions
     */
    public function setKeepPeriod($KeepPeriod)
    {
      $this->KeepPeriod = $KeepPeriod;
      return $this;
    }

}
