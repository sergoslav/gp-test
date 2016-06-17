<?php

class GLIntercompany
{

    /**
     * @var CompanyKey $Key
     */
    protected $Key = null;

    /**
     * @var int $OriginalJournalId
     */
    protected $OriginalJournalId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CompanyKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param CompanyKey $Key
     * @return GLIntercompany
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return int
     */
    public function getOriginalJournalId()
    {
      return $this->OriginalJournalId;
    }

    /**
     * @param int $OriginalJournalId
     * @return GLIntercompany
     */
    public function setOriginalJournalId($OriginalJournalId)
    {
      $this->OriginalJournalId = $OriginalJournalId;
      return $this;
    }

}
