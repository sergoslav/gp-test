<?php

class BusinessObjectSummary
{

    /**
     * @var string $BusinessObjectKey
     */
    protected $BusinessObjectKey = null;

    /**
     * @var string $DisplayId
     */
    protected $DisplayId = null;

    /**
     * @var string $DisplayName
     */
    protected $DisplayName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBusinessObjectKey()
    {
      return $this->BusinessObjectKey;
    }

    /**
     * @param string $BusinessObjectKey
     * @return BusinessObjectSummary
     */
    public function setBusinessObjectKey($BusinessObjectKey)
    {
      $this->BusinessObjectKey = $BusinessObjectKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayId()
    {
      return $this->DisplayId;
    }

    /**
     * @param string $DisplayId
     * @return BusinessObjectSummary
     */
    public function setDisplayId($DisplayId)
    {
      $this->DisplayId = $DisplayId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->DisplayName;
    }

    /**
     * @param string $DisplayName
     * @return BusinessObjectSummary
     */
    public function setDisplayName($DisplayName)
    {
      $this->DisplayName = $DisplayName;
      return $this;
    }

}
