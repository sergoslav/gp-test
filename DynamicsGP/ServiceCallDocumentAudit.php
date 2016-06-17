<?php

class ServiceCallDocumentAudit extends ServiceAudit
{

    /**
     * @var ServiceCallStatusCodeKey $FromStatusCodeKey
     */
    protected $FromStatusCodeKey = null;

    /**
     * @var ServiceLineKey $Key
     */
    protected $Key = null;

    /**
     * @var ServiceTechnicianKey $TechnicianKey
     */
    protected $TechnicianKey = null;

    /**
     * @var ServiceCallStatusCodeKey $ToStatusCodeKey
     */
    protected $ToStatusCodeKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ServiceCallStatusCodeKey
     */
    public function getFromStatusCodeKey()
    {
      return $this->FromStatusCodeKey;
    }

    /**
     * @param ServiceCallStatusCodeKey $FromStatusCodeKey
     * @return ServiceCallDocumentAudit
     */
    public function setFromStatusCodeKey($FromStatusCodeKey)
    {
      $this->FromStatusCodeKey = $FromStatusCodeKey;
      return $this;
    }

    /**
     * @return ServiceLineKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ServiceLineKey $Key
     * @return ServiceCallDocumentAudit
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ServiceTechnicianKey
     */
    public function getTechnicianKey()
    {
      return $this->TechnicianKey;
    }

    /**
     * @param ServiceTechnicianKey $TechnicianKey
     * @return ServiceCallDocumentAudit
     */
    public function setTechnicianKey($TechnicianKey)
    {
      $this->TechnicianKey = $TechnicianKey;
      return $this;
    }

    /**
     * @return ServiceCallStatusCodeKey
     */
    public function getToStatusCodeKey()
    {
      return $this->ToStatusCodeKey;
    }

    /**
     * @param ServiceCallStatusCodeKey $ToStatusCodeKey
     * @return ServiceCallDocumentAudit
     */
    public function setToStatusCodeKey($ToStatusCodeKey)
    {
      $this->ToStatusCodeKey = $ToStatusCodeKey;
      return $this;
    }

}
