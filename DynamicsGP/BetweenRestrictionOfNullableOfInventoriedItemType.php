<?php

class BetweenRestrictionOfNullableOfInventoriedItemType extends ListRestrictionOfNullableOfInventoriedItemType
{

    /**
     * @var InventoriedItemType $From
     */
    protected $From = null;

    /**
     * @var InventoriedItemType $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var InventoriedItemType $LessThan
     */
    protected $LessThan = null;

    /**
     * @var InventoriedItemType $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return InventoriedItemType
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param InventoriedItemType $From
     * @return BetweenRestrictionOfNullableOfInventoriedItemType
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return InventoriedItemType
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param InventoriedItemType $GreaterThan
     * @return BetweenRestrictionOfNullableOfInventoriedItemType
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return InventoriedItemType
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param InventoriedItemType $LessThan
     * @return BetweenRestrictionOfNullableOfInventoriedItemType
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return InventoriedItemType
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param InventoriedItemType $To
     * @return BetweenRestrictionOfNullableOfInventoriedItemType
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
