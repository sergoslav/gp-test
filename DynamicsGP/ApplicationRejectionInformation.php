<?php

class ApplicationRejectionInformation
{

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var ApplicationRejectionReason $Reason
     */
    protected $Reason = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return ApplicationRejectionInformation
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return ApplicationRejectionReason
     */
    public function getReason()
    {
      return $this->Reason;
    }

    /**
     * @param ApplicationRejectionReason $Reason
     * @return ApplicationRejectionInformation
     */
    public function setReason($Reason)
    {
      $this->Reason = $Reason;
      return $this;
    }

}
