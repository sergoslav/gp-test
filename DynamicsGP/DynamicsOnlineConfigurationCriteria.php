<?php

class DynamicsOnlineConfigurationCriteria extends Criteria
{

    /**
     * @var RestrictionOfNullableOfboolean $IsCommerceServicesActive
     */
    protected $IsCommerceServicesActive = null;

    /**
     * @var RestrictionOfNullableOfboolean $IsPaymentServicesActive
     */
    protected $IsPaymentServicesActive = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return RestrictionOfNullableOfboolean
     */
    public function getIsCommerceServicesActive()
    {
      return $this->IsCommerceServicesActive;
    }

    /**
     * @param RestrictionOfNullableOfboolean $IsCommerceServicesActive
     * @return DynamicsOnlineConfigurationCriteria
     */
    public function setIsCommerceServicesActive($IsCommerceServicesActive)
    {
      $this->IsCommerceServicesActive = $IsCommerceServicesActive;
      return $this;
    }

    /**
     * @return RestrictionOfNullableOfboolean
     */
    public function getIsPaymentServicesActive()
    {
      return $this->IsPaymentServicesActive;
    }

    /**
     * @param RestrictionOfNullableOfboolean $IsPaymentServicesActive
     * @return DynamicsOnlineConfigurationCriteria
     */
    public function setIsPaymentServicesActive($IsPaymentServicesActive)
    {
      $this->IsPaymentServicesActive = $IsPaymentServicesActive;
      return $this;
    }

}
