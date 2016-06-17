<?php

class BatchKey extends ReferenceKey
{

    /**
     * @var \DateTime $CreatedDateTime
     */
    protected $CreatedDateTime = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return BatchKey
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
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return BatchKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return BatchKey
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
