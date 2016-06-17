<?php

class GLOriginatingDocument
{

    /**
     * @var string $AuditTrailCode
     */
    protected $AuditTrailCode = null;

    /**
     * @var \DateTime $PostedDate
     */
    protected $PostedDate = null;

    /**
     * @var SeriesType $Series
     */
    protected $Series = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAuditTrailCode()
    {
      return $this->AuditTrailCode;
    }

    /**
     * @param string $AuditTrailCode
     * @return GLOriginatingDocument
     */
    public function setAuditTrailCode($AuditTrailCode)
    {
      $this->AuditTrailCode = $AuditTrailCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPostedDate()
    {
      if ($this->PostedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PostedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PostedDate
     * @return GLOriginatingDocument
     */
    public function setPostedDate(\DateTime $PostedDate = null)
    {
      if ($PostedDate == null) {
       $this->PostedDate = null;
      } else {
        $this->PostedDate = $PostedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return SeriesType
     */
    public function getSeries()
    {
      return $this->Series;
    }

    /**
     * @param SeriesType $Series
     * @return GLOriginatingDocument
     */
    public function setSeries($Series)
    {
      $this->Series = $Series;
      return $this;
    }

}
