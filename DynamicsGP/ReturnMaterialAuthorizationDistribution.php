<?php

class ReturnMaterialAuthorizationDistribution extends Distribution
{

    /**
     * @var boolean $IsPosted
     */
    protected $IsPosted = null;

    /**
     * @var ServiceLineDetailKey $Key
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
     * @return ReturnMaterialAuthorizationDistribution
     */
    public function setIsPosted($IsPosted)
    {
      $this->IsPosted = $IsPosted;
      return $this;
    }

    /**
     * @return ServiceLineDetailKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ServiceLineDetailKey $Key
     * @return ReturnMaterialAuthorizationDistribution
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
     * @return ReturnMaterialAuthorizationDistribution
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
