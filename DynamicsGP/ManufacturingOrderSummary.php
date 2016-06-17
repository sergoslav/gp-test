<?php

class ManufacturingOrderSummary extends ManufacturingOrderDocumentSummary
{

    /**
     * @var \DateTime $DateCompleted
     */
    protected $DateCompleted = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var boolean $IsArchivedMO
     */
    protected $IsArchivedMO = null;

    /**
     * @var boolean $IsQuickMO
     */
    protected $IsQuickMO = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var ManufacturingOrderOutSourced $OutSourced
     */
    protected $OutSourced = null;

    /**
     * @var string $PickNumber
     */
    protected $PickNumber = null;

    /**
     * @var string $PostToSite
     */
    protected $PostToSite = null;

    /**
     * @var ManufacturingOrderPriority $Priority
     */
    protected $Priority = null;

    /**
     * @var string $RoutingName
     */
    protected $RoutingName = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getDateCompleted()
    {
      if ($this->DateCompleted == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateCompleted);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateCompleted
     * @return ManufacturingOrderSummary
     */
    public function setDateCompleted(\DateTime $DateCompleted = null)
    {
      if ($DateCompleted == null) {
       $this->DateCompleted = null;
      } else {
        $this->DateCompleted = $DateCompleted->format(\DateTime::ATOM);
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
     * @return ManufacturingOrderSummary
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

    /**
     * @return boolean
     */
    public function getIsArchivedMO()
    {
      return $this->IsArchivedMO;
    }

    /**
     * @param boolean $IsArchivedMO
     * @return ManufacturingOrderSummary
     */
    public function setIsArchivedMO($IsArchivedMO)
    {
      $this->IsArchivedMO = $IsArchivedMO;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsQuickMO()
    {
      return $this->IsQuickMO;
    }

    /**
     * @param boolean $IsQuickMO
     * @return ManufacturingOrderSummary
     */
    public function setIsQuickMO($IsQuickMO)
    {
      $this->IsQuickMO = $IsQuickMO;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->LastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedDate
     * @return ManufacturingOrderSummary
     */
    public function setLastModifiedDate(\DateTime $LastModifiedDate = null)
    {
      if ($LastModifiedDate == null) {
       $this->LastModifiedDate = null;
      } else {
        $this->LastModifiedDate = $LastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ManufacturingOrderOutSourced
     */
    public function getOutSourced()
    {
      return $this->OutSourced;
    }

    /**
     * @param ManufacturingOrderOutSourced $OutSourced
     * @return ManufacturingOrderSummary
     */
    public function setOutSourced($OutSourced)
    {
      $this->OutSourced = $OutSourced;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickNumber()
    {
      return $this->PickNumber;
    }

    /**
     * @param string $PickNumber
     * @return ManufacturingOrderSummary
     */
    public function setPickNumber($PickNumber)
    {
      $this->PickNumber = $PickNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostToSite()
    {
      return $this->PostToSite;
    }

    /**
     * @param string $PostToSite
     * @return ManufacturingOrderSummary
     */
    public function setPostToSite($PostToSite)
    {
      $this->PostToSite = $PostToSite;
      return $this;
    }

    /**
     * @return ManufacturingOrderPriority
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param ManufacturingOrderPriority $Priority
     * @return ManufacturingOrderSummary
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoutingName()
    {
      return $this->RoutingName;
    }

    /**
     * @param string $RoutingName
     * @return ManufacturingOrderSummary
     */
    public function setRoutingName($RoutingName)
    {
      $this->RoutingName = $RoutingName;
      return $this;
    }

}
