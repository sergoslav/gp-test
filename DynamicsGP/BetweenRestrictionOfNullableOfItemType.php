<?php

class BetweenRestrictionOfNullableOfItemType extends ListRestrictionOfNullableOfItemType
{

    /**
     * @var ItemType $From
     */
    protected $From = null;

    /**
     * @var ItemType $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var ItemType $LessThan
     */
    protected $LessThan = null;

    /**
     * @var ItemType $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ItemType
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param ItemType $From
     * @return BetweenRestrictionOfNullableOfItemType
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return ItemType
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param ItemType $GreaterThan
     * @return BetweenRestrictionOfNullableOfItemType
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return ItemType
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param ItemType $LessThan
     * @return BetweenRestrictionOfNullableOfItemType
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return ItemType
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param ItemType $To
     * @return BetweenRestrictionOfNullableOfItemType
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
