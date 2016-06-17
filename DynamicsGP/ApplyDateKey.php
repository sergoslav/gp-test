<?php

class ApplyDateKey extends ReferenceKey
{

    /**
     * @var \DateTime $Id
     */
    protected $Id = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getId()
    {
      if ($this->Id == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Id);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Id
     * @return ApplyDateKey
     */
    public function setId(\DateTime $Id = null)
    {
      if ($Id == null) {
       $this->Id = null;
      } else {
        $this->Id = $Id->format(\DateTime::ATOM);
      }
      return $this;
    }

}
