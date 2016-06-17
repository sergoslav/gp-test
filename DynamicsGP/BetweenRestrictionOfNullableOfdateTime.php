<?php

class BetweenRestrictionOfNullableOfdateTime extends ListRestrictionOfNullableOfdateTime
{

    /**
     * @var \DateTime $From
     */
    protected $From = null;

    /**
     * @var \DateTime $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var \DateTime $LessThan
     */
    protected $LessThan = null;

    /**
     * @var \DateTime $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getFrom()
    {
      if ($this->From == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->From);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $From
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function setFrom(\DateTime $From = null)
    {
      if ($From == null) {
       $this->From = null;
      } else {
        $this->From = $From->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGreaterThan()
    {
      if ($this->GreaterThan == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->GreaterThan);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $GreaterThan
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function setGreaterThan(\DateTime $GreaterThan = null)
    {
      if ($GreaterThan == null) {
       $this->GreaterThan = null;
      } else {
        $this->GreaterThan = $GreaterThan->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLessThan()
    {
      if ($this->LessThan == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LessThan);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LessThan
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function setLessThan(\DateTime $LessThan = null)
    {
      if ($LessThan == null) {
       $this->LessThan = null;
      } else {
        $this->LessThan = $LessThan->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTo()
    {
      if ($this->To == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->To);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $To
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function setTo(\DateTime $To = null)
    {
      if ($To == null) {
       $this->To = null;
      } else {
        $this->To = $To->format(\DateTime::ATOM);
      }
      return $this;
    }

}
