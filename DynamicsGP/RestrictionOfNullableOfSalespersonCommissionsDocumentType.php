<?php

class RestrictionOfNullableOfSalespersonCommissionsDocumentType
{

    /**
     * @var SalespersonCommissionsDocumentType $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var SalespersonCommissionsDocumentType $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalespersonCommissionsDocumentType
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param SalespersonCommissionsDocumentType $EqualValue
     * @return RestrictionOfNullableOfSalespersonCommissionsDocumentType
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return SalespersonCommissionsDocumentType
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param SalespersonCommissionsDocumentType $NotEqualValue
     * @return RestrictionOfNullableOfSalespersonCommissionsDocumentType
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
