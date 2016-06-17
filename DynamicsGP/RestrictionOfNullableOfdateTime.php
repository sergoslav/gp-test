<?php

class RestrictionOfNullableOfdateTime
{

    /**
     * @var \DateTime $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var \DateTime $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getEqualValue()
    {
      if ($this->EqualValue == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EqualValue);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EqualValue
     * @return RestrictionOfNullableOfdateTime
     */
    public function setEqualValue(\DateTime $EqualValue = null)
    {
      if ($EqualValue == null) {
       $this->EqualValue = null;
      } else {
        $this->EqualValue = $EqualValue->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNotEqualValue()
    {
      if ($this->NotEqualValue == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->NotEqualValue);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $NotEqualValue
     * @return RestrictionOfNullableOfdateTime
     */
    public function setNotEqualValue(\DateTime $NotEqualValue = null)
    {
      if ($NotEqualValue == null) {
       $this->NotEqualValue = null;
      } else {
        $this->NotEqualValue = $NotEqualValue->format(\DateTime::ATOM);
      }
      return $this;
    }

}
