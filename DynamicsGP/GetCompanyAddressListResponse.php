<?php

class GetCompanyAddressListResponse
{

    /**
     * @var ArrayOfCompanyAddress $GetCompanyAddressListResult
     */
    protected $GetCompanyAddressListResult = null;

    /**
     * @param ArrayOfCompanyAddress $GetCompanyAddressListResult
     */
    public function __construct($GetCompanyAddressListResult)
    {
      $this->GetCompanyAddressListResult = $GetCompanyAddressListResult;
    }

    /**
     * @return ArrayOfCompanyAddress
     */
    public function getGetCompanyAddressListResult()
    {
      return $this->GetCompanyAddressListResult;
    }

    /**
     * @param ArrayOfCompanyAddress $GetCompanyAddressListResult
     * @return GetCompanyAddressListResponse
     */
    public function setGetCompanyAddressListResult($GetCompanyAddressListResult)
    {
      $this->GetCompanyAddressListResult = $GetCompanyAddressListResult;
      return $this;
    }

}
