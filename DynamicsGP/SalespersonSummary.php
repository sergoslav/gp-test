<?php

class SalespersonSummary
{

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var SalespersonKey $Key
     */
    protected $Key = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var SalesTerritoryKey $SalesTerritoryKey
     */
    protected $SalesTerritoryKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->CreatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate
     * @return SalespersonSummary
     */
    public function setCreatedDate(\DateTime $CreatedDate = null)
    {
      if ($CreatedDate == null) {
       $this->CreatedDate = null;
      } else {
        $this->CreatedDate = $CreatedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return SalespersonSummary
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
      return $this->IsActive;
    }

    /**
     * @param boolean $IsActive
     * @return SalespersonSummary
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return SalespersonKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalespersonKey $Key
     * @return SalespersonSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return SalespersonSummary
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate()
    {
      if ($this->ModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDate
     * @return SalespersonSummary
     */
    public function setModifiedDate(\DateTime $ModifiedDate = null)
    {
      if ($ModifiedDate == null) {
       $this->ModifiedDate = null;
      } else {
        $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return SalesTerritoryKey
     */
    public function getSalesTerritoryKey()
    {
      return $this->SalesTerritoryKey;
    }

    /**
     * @param SalesTerritoryKey $SalesTerritoryKey
     * @return SalespersonSummary
     */
    public function setSalesTerritoryKey($SalesTerritoryKey)
    {
      $this->SalesTerritoryKey = $SalesTerritoryKey;
      return $this;
    }

}
