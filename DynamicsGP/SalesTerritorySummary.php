<?php

class SalesTerritorySummary
{

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var SalesTerritoryKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var string $SalesManagerFirstName
     */
    protected $SalesManagerFirstName = null;

    /**
     * @var SalespersonKey $SalesManagerKey
     */
    protected $SalesManagerKey = null;

    /**
     * @var string $SalesManagerLastName
     */
    protected $SalesManagerLastName = null;

    
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
     * @return SalesTerritorySummary
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
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return SalesTerritorySummary
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return SalesTerritorySummary
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return SalesTerritoryKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesTerritoryKey $Key
     * @return SalesTerritorySummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return SalesTerritorySummary
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
     * @return string
     */
    public function getSalesManagerFirstName()
    {
      return $this->SalesManagerFirstName;
    }

    /**
     * @param string $SalesManagerFirstName
     * @return SalesTerritorySummary
     */
    public function setSalesManagerFirstName($SalesManagerFirstName)
    {
      $this->SalesManagerFirstName = $SalesManagerFirstName;
      return $this;
    }

    /**
     * @return SalespersonKey
     */
    public function getSalesManagerKey()
    {
      return $this->SalesManagerKey;
    }

    /**
     * @param SalespersonKey $SalesManagerKey
     * @return SalesTerritorySummary
     */
    public function setSalesManagerKey($SalesManagerKey)
    {
      $this->SalesManagerKey = $SalesManagerKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesManagerLastName()
    {
      return $this->SalesManagerLastName;
    }

    /**
     * @param string $SalesManagerLastName
     * @return SalesTerritorySummary
     */
    public function setSalesManagerLastName($SalesManagerLastName)
    {
      $this->SalesManagerLastName = $SalesManagerLastName;
      return $this;
    }

}
