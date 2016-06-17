<?php

class BaseChangedSalesDocumentKeyCriteria extends BaseChangedKeyCriteria
{

    /**
     * @var BetweenRestrictionOfstring $SalesDocumentKeyId
     */
    protected $SalesDocumentKeyId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getSalesDocumentKeyId()
    {
      return $this->SalesDocumentKeyId;
    }

    /**
     * @param BetweenRestrictionOfstring $SalesDocumentKeyId
     * @return BaseChangedSalesDocumentKeyCriteria
     */
    public function setSalesDocumentKeyId($SalesDocumentKeyId)
    {
      $this->SalesDocumentKeyId = $SalesDocumentKeyId;
      return $this;
    }

}
