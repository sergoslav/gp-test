<?php

class BetweenRestrictionOfNullableOfApplicationStatus extends ListRestrictionOfNullableOfApplicationStatus
{

    /**
     * @var ApplicationStatus $From
     */
    protected $From = null;

    /**
     * @var ApplicationStatus $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var ApplicationStatus $LessThan
     */
    protected $LessThan = null;

    /**
     * @var ApplicationStatus $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ApplicationStatus
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param ApplicationStatus $From
     * @return BetweenRestrictionOfNullableOfApplicationStatus
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return ApplicationStatus
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param ApplicationStatus $GreaterThan
     * @return BetweenRestrictionOfNullableOfApplicationStatus
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return ApplicationStatus
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param ApplicationStatus $LessThan
     * @return BetweenRestrictionOfNullableOfApplicationStatus
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return ApplicationStatus
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param ApplicationStatus $To
     * @return BetweenRestrictionOfNullableOfApplicationStatus
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
