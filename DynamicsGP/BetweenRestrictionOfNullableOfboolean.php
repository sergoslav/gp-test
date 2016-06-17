<?php

class BetweenRestrictionOfNullableOfboolean extends ListRestrictionOfNullableOfboolean
{

    /**
     * @var boolean $From
     */
    protected $From = null;

    /**
     * @var boolean $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var boolean $LessThan
     */
    protected $LessThan = null;

    /**
     * @var boolean $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param boolean $From
     * @return BetweenRestrictionOfNullableOfboolean
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param boolean $GreaterThan
     * @return BetweenRestrictionOfNullableOfboolean
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param boolean $LessThan
     * @return BetweenRestrictionOfNullableOfboolean
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param boolean $To
     * @return BetweenRestrictionOfNullableOfboolean
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
