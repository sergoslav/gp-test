<?php

class BetweenRestrictionOfNullableOfTaxDetailType extends ListRestrictionOfNullableOfTaxDetailType
{

    /**
     * @var TaxDetailType $From
     */
    protected $From = null;

    /**
     * @var TaxDetailType $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var TaxDetailType $LessThan
     */
    protected $LessThan = null;

    /**
     * @var TaxDetailType $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return TaxDetailType
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param TaxDetailType $From
     * @return BetweenRestrictionOfNullableOfTaxDetailType
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return TaxDetailType
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param TaxDetailType $GreaterThan
     * @return BetweenRestrictionOfNullableOfTaxDetailType
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return TaxDetailType
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param TaxDetailType $LessThan
     * @return BetweenRestrictionOfNullableOfTaxDetailType
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return TaxDetailType
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param TaxDetailType $To
     * @return BetweenRestrictionOfNullableOfTaxDetailType
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
