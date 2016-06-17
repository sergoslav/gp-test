<?php

class BaseChangedSalesDocument extends ChangedBusinessObjectGreatPlainsKey
{

    /**
     * @var SalesDocumentTypeKey $SalesDocumentTypeKey
     */
    protected $SalesDocumentTypeKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalesDocumentTypeKey
     */
    public function getSalesDocumentTypeKey()
    {
      return $this->SalesDocumentTypeKey;
    }

    /**
     * @param SalesDocumentTypeKey $SalesDocumentTypeKey
     * @return BaseChangedSalesDocument
     */
    public function setSalesDocumentTypeKey($SalesDocumentTypeKey)
    {
      $this->SalesDocumentTypeKey = $SalesDocumentTypeKey;
      return $this;
    }

}
