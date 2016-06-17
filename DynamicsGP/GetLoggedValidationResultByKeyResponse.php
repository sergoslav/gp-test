<?php

class GetLoggedValidationResultByKeyResponse
{

    /**
     * @var ValidationResult $GetLoggedValidationResultByKeyResult
     */
    protected $GetLoggedValidationResultByKeyResult = null;

    /**
     * @param ValidationResult $GetLoggedValidationResultByKeyResult
     */
    public function __construct($GetLoggedValidationResultByKeyResult)
    {
      $this->GetLoggedValidationResultByKeyResult = $GetLoggedValidationResultByKeyResult;
    }

    /**
     * @return ValidationResult
     */
    public function getGetLoggedValidationResultByKeyResult()
    {
      return $this->GetLoggedValidationResultByKeyResult;
    }

    /**
     * @param ValidationResult $GetLoggedValidationResultByKeyResult
     * @return GetLoggedValidationResultByKeyResponse
     */
    public function setGetLoggedValidationResultByKeyResult($GetLoggedValidationResultByKeyResult)
    {
      $this->GetLoggedValidationResultByKeyResult = $GetLoggedValidationResultByKeyResult;
      return $this;
    }

}
