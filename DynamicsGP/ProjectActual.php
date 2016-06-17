<?php

class ProjectActual extends ProjectAmount
{

    /**
     * @var \DateTime $BeginDate
     */
    protected $BeginDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getBeginDate()
    {
      if ($this->BeginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BeginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BeginDate
     * @return ProjectActual
     */
    public function setBeginDate(\DateTime $BeginDate = null)
    {
      if ($BeginDate == null) {
       $this->BeginDate = null;
      } else {
        $this->BeginDate = $BeginDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return ProjectActual
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
