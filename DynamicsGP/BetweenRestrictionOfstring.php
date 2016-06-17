<?php

class BetweenRestrictionOfstring extends ListRestrictionOfstring
{

    /**
     * @var string $From
     */
    protected $From = null;

    /**
     * @var string $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var string $LessThan
     */
    protected $LessThan = null;

    /**
     * @var string $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param string $From
     * @return BetweenRestrictionOfstring
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return string
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param string $GreaterThan
     * @return BetweenRestrictionOfstring
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return string
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param string $LessThan
     * @return BetweenRestrictionOfstring
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return string
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param string $To
     * @return BetweenRestrictionOfstring
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
