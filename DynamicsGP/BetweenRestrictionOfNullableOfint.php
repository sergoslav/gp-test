<?php

class BetweenRestrictionOfNullableOfint extends ListRestrictionOfNullableOfint
{

    /**
     * @var int $From
     */
    protected $From = null;

    /**
     * @var int $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var int $LessThan
     */
    protected $LessThan = null;

    /**
     * @var int $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param int $From
     * @return BetweenRestrictionOfNullableOfint
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return int
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param int $GreaterThan
     * @return BetweenRestrictionOfNullableOfint
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return int
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param int $LessThan
     * @return BetweenRestrictionOfNullableOfint
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return int
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param int $To
     * @return BetweenRestrictionOfNullableOfint
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
