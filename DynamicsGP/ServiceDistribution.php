<?php

class ServiceDistribution extends Distribution
{

    /**
     * @var boolean $IsPosted
     */
    protected $IsPosted = null;

    /**
     * @var ServiceLineKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $PostedDate
     */
    protected $PostedDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getIsPosted()
    {
      return $this->IsPosted;
    }

    /**
     * @param boolean $IsPosted
     * @return ServiceDistribution
     */
    public function setIsPosted($IsPosted)
    {
      $this->IsPosted = $IsPosted;
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
     * @return ServiceDistribution
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return ServiceDistribution
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

}
