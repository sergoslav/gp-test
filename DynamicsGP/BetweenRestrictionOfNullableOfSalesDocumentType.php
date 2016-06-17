<?php

class BetweenRestrictionOfNullableOfSalesDocumentType extends ListRestrictionOfNullableOfSalesDocumentType
{

    /**
     * @var SalesDocumentType $From
     */
    protected $From = null;

    /**
     * @var SalesDocumentType $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var SalesDocumentType $LessThan
     */
    protected $LessThan = null;

    /**
     * @var SalesDocumentType $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalesDocumentType
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param SalesDocumentType $From
     * @return BetweenRestrictionOfNullableOfSalesDocumentType
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return SalesDocumentType
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param SalesDocumentType $GreaterThan
     * @return BetweenRestrictionOfNullableOfSalesDocumentType
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return SalesDocumentType
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param SalesDocumentType $LessThan
     * @return BetweenRestrictionOfNullableOfSalesDocumentType
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return SalesDocumentType
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param SalesDocumentType $To
     * @return BetweenRestrictionOfNullableOfSalesDocumentType
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
