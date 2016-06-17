<?php

class GetChangedTaxDetailKeyListResponse
{

    /**
     * @var ArrayOfChangedTaxDetailKey $GetChangedTaxDetailKeyListResult
     */
    protected $GetChangedTaxDetailKeyListResult = null;

    /**
     * @param ArrayOfChangedTaxDetailKey $GetChangedTaxDetailKeyListResult
     */
    public function __construct($GetChangedTaxDetailKeyListResult)
    {
      $this->GetChangedTaxDetailKeyListResult = $GetChangedTaxDetailKeyListResult;
    }

    /**
     * @return ArrayOfChangedTaxDetailKey
     */
    public function getGetChangedTaxDetailKeyListResult()
    {
      return $this->GetChangedTaxDetailKeyListResult;
    }

    /**
     * @param ArrayOfChangedTaxDetailKey $GetChangedTaxDetailKeyListResult
     * @return GetChangedTaxDetailKeyListResponse
     */
    public function setGetChangedTaxDetailKeyListResult($GetChangedTaxDetailKeyListResult)
    {
      $this->GetChangedTaxDetailKeyListResult = $GetChangedTaxDetailKeyListResult;
      return $this;
    }

}
