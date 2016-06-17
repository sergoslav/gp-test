<?php

class BetweenRestrictionOfNullableOfTaxDetailBase extends ListRestrictionOfNullableOfTaxDetailBase
{

    /**
     * @var TaxDetailBase $From
     */
    protected $From = null;

    /**
     * @var TaxDetailBase $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var TaxDetailBase $LessThan
     */
    protected $LessThan = null;

    /**
     * @var TaxDetailBase $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return TaxDetailBase
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param TaxDetailBase $From
     * @return BetweenRestrictionOfNullableOfTaxDetailBase
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return TaxDetailBase
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param TaxDetailBase $GreaterThan
     * @return BetweenRestrictionOfNullableOfTaxDetailBase
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return TaxDetailBase
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param TaxDetailBase $LessThan
     * @return BetweenRestrictionOfNullableOfTaxDetailBase
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return TaxDetailBase
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param TaxDetailBase $To
     * @return BetweenRestrictionOfNullableOfTaxDetailBase
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
