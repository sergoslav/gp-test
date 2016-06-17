<?php

class ItemSummaryBase
{

    /**
     * @var ItemClassKey $ClassKey
     */
    protected $ClassKey = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $GenericDescription
     */
    protected $GenericDescription = null;

    /**
     * @var ItemKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var string $ShortDescription
     */
    protected $ShortDescription = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemClassKey
     */
    public function getClassKey()
    {
      return $this->ClassKey;
    }

    /**
     * @param ItemClassKey $ClassKey
     * @return ItemSummaryBase
     */
    public function setClassKey($ClassKey)
    {
      $this->ClassKey = $ClassKey;
      return $this;
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
     * @return ItemSummaryBase
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
     * @return ItemSummaryBase
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getGenericDescription()
    {
      return $this->GenericDescription;
    }

    /**
     * @param string $GenericDescription
     * @return ItemSummaryBase
     */
    public function setGenericDescription($GenericDescription)
    {
      $this->GenericDescription = $GenericDescription;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ItemKey $Key
     * @return ItemSummaryBase
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return ItemSummaryBase
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
     * @return ItemSummaryBase
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
    public function getShortDescription()
    {
      return $this->ShortDescription;
    }

    /**
     * @param string $ShortDescription
     * @return ItemSummaryBase
     */
    public function setShortDescription($ShortDescription)
    {
      $this->ShortDescription = $ShortDescription;
      return $this;
    }

}
