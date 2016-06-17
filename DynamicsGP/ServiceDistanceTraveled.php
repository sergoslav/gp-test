<?php

class ServiceDistanceTraveled extends BusinessObject
{

    /**
     * @var int $Ending
     */
    protected $Ending = null;

    /**
     * @var int $Starting
     */
    protected $Starting = null;

    /**
     * @var int $Used
     */
    protected $Used = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getEnding()
    {
      return $this->Ending;
    }

    /**
     * @param int $Ending
     * @return ServiceDistanceTraveled
     */
    public function setEnding($Ending)
    {
      $this->Ending = $Ending;
      return $this;
    }

    /**
     * @return int
     */
    public function getStarting()
    {
      return $this->Starting;
    }

    /**
     * @param int $Starting
     * @return ServiceDistanceTraveled
     */
    public function setStarting($Starting)
    {
      $this->Starting = $Starting;
      return $this;
    }

    /**
     * @return int
     */
    public function getUsed()
    {
      return $this->Used;
    }

    /**
     * @param int $Used
     * @return ServiceDistanceTraveled
     */
    public function setUsed($Used)
    {
      $this->Used = $Used;
      return $this;
    }

}
