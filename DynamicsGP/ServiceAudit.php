<?php

class ServiceAudit extends BusinessObject
{

    /**
     * @var string $CreatedBy
     */
    protected $CreatedBy = null;

    /**
     * @var \DateTime $CreatedDateTime
     */
    protected $CreatedDateTime = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
      return $this->CreatedBy;
    }

    /**
     * @param string $CreatedBy
     * @return ServiceAudit
     */
    public function setCreatedBy($CreatedBy)
    {
      $this->CreatedBy = $CreatedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDateTime()
    {
      if ($this->CreatedDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDateTime
     * @return ServiceAudit
     */
    public function setCreatedDateTime(\DateTime $CreatedDateTime = null)
    {
      if ($CreatedDateTime == null) {
       $this->CreatedDateTime = null;
      } else {
        $this->CreatedDateTime = $CreatedDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return ServiceAudit
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
