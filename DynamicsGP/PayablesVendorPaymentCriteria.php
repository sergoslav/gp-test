<?php

class PayablesVendorPaymentCriteria extends PayablesDocumentCriteriaBase
{

    /**
     * @var PayablesVendorPaymentScope $Scope
     */
    protected $Scope = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PayablesVendorPaymentScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param PayablesVendorPaymentScope $Scope
     * @return PayablesVendorPaymentCriteria
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

}
