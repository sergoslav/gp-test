<?php

class Review
{

    /**
     * @var \DateTime $LastDate
     */
    protected $LastDate = null;

    /**
     * @var \DateTime $NextDate
     */
    protected $NextDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getLastDate()
    {
      if ($this->LastDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastDate
     * @return Review
     */
    public function setLastDate(\DateTime $LastDate = null)
    {
      if ($LastDate == null) {
       $this->LastDate = null;
      } else {
        $this->LastDate = $LastDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNextDate()
    {
      if ($this->NextDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->NextDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $NextDate
     * @return Review
     */
    public function setNextDate(\DateTime $NextDate = null)
    {
      if ($NextDate == null) {
       $this->NextDate = null;
      } else {
        $this->NextDate = $NextDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
