<?php

class GetChangedSalespersonKeyListResponse
{

    /**
     * @var ArrayOfChangedSalespersonKey $GetChangedSalespersonKeyListResult
     */
    protected $GetChangedSalespersonKeyListResult = null;

    /**
     * @param ArrayOfChangedSalespersonKey $GetChangedSalespersonKeyListResult
     */
    public function __construct($GetChangedSalespersonKeyListResult)
    {
      $this->GetChangedSalespersonKeyListResult = $GetChangedSalespersonKeyListResult;
    }

    /**
     * @return ArrayOfChangedSalespersonKey
     */
    public function getGetChangedSalespersonKeyListResult()
    {
      return $this->GetChangedSalespersonKeyListResult;
    }

    /**
     * @param ArrayOfChangedSalespersonKey $GetChangedSalespersonKeyListResult
     * @return GetChangedSalespersonKeyListResponse
     */
    public function setGetChangedSalespersonKeyListResult($GetChangedSalespersonKeyListResult)
    {
      $this->GetChangedSalespersonKeyListResult = $GetChangedSalespersonKeyListResult;
      return $this;
    }

}
