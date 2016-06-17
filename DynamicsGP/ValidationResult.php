<?php

class ValidationResult
{

    /**
     * @var ArrayOfValidationError $Errors
     */
    protected $Errors = null;

    /**
     * @var ArrayOfValidationWarning $Warnings
     */
    protected $Warnings = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfValidationError
     */
    public function getErrors()
    {
      return $this->Errors;
    }

    /**
     * @param ArrayOfValidationError $Errors
     * @return ValidationResult
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

    /**
     * @return ArrayOfValidationWarning
     */
    public function getWarnings()
    {
      return $this->Warnings;
    }

    /**
     * @param ArrayOfValidationWarning $Warnings
     * @return ValidationResult
     */
    public function setWarnings($Warnings)
    {
      $this->Warnings = $Warnings;
      return $this;
    }

}
