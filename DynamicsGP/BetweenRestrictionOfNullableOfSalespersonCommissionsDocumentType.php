<?php

class BetweenRestrictionOfNullableOfSalespersonCommissionsDocumentType extends ListRestrictionOfNullableOfSalespersonCommissionsDocumentType
{

    /**
     * @var SalespersonCommissionsDocumentType $From
     */
    protected $From = null;

    /**
     * @var SalespersonCommissionsDocumentType $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var SalespersonCommissionsDocumentType $LessThan
     */
    protected $LessThan = null;

    /**
     * @var SalespersonCommissionsDocumentType $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalespersonCommissionsDocumentType
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param SalespersonCommissionsDocumentType $From
     * @return BetweenRestrictionOfNullableOfSalespersonCommissionsDocumentType
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return SalespersonCommissionsDocumentType
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param SalespersonCommissionsDocumentType $GreaterThan
     * @return BetweenRestrictionOfNullableOfSalespersonCommissionsDocumentType
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return SalespersonCommissionsDocumentType
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param SalespersonCommissionsDocumentType $LessThan
     * @return BetweenRestrictionOfNullableOfSalespersonCommissionsDocumentType
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return SalespersonCommissionsDocumentType
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param SalespersonCommissionsDocumentType $To
     * @return BetweenRestrictionOfNullableOfSalespersonCommissionsDocumentType
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
