<?php

class BetweenRestrictionOfNullableOfDataModificationAction extends ListRestrictionOfNullableOfDataModificationAction
{

    /**
     * @var DataModificationAction $From
     */
    protected $From = null;

    /**
     * @var DataModificationAction $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var DataModificationAction $LessThan
     */
    protected $LessThan = null;

    /**
     * @var DataModificationAction $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return DataModificationAction
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param DataModificationAction $From
     * @return BetweenRestrictionOfNullableOfDataModificationAction
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return DataModificationAction
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param DataModificationAction $GreaterThan
     * @return BetweenRestrictionOfNullableOfDataModificationAction
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return DataModificationAction
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param DataModificationAction $LessThan
     * @return BetweenRestrictionOfNullableOfDataModificationAction
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return DataModificationAction
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param DataModificationAction $To
     * @return BetweenRestrictionOfNullableOfDataModificationAction
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
