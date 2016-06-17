<?php

class GLTransactionKey extends TransactionKey
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var int $JournalId
     */
    protected $JournalId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return GLTransactionKey
     */
    public function setDate(\DateTime $Date = null)
    {
      if ($Date == null) {
       $this->Date = null;
      } else {
        $this->Date = $Date->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getJournalId()
    {
      return $this->JournalId;
    }

    /**
     * @param int $JournalId
     * @return GLTransactionKey
     */
    public function setJournalId($JournalId)
    {
      $this->JournalId = $JournalId;
      return $this;
    }

}
