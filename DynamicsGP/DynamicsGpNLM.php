<?php

require_once "NTLM_SoapClient.php";

class DynamicsGpNLM extends NTLM_SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetChangedCurrencyKeyList' => '\\GetChangedCurrencyKeyList',
        'GetChangedCurrencyKeyListResponse' => '\\GetChangedCurrencyKeyListResponse',
        'GetChangedInternetAddressKeyList' => '\\GetChangedInternetAddressKeyList',
        'GetChangedInternetAddressKeyListResponse' => '\\GetChangedInternetAddressKeyListResponse',
        'GetChangedTaxScheduleDetailKeyList' => '\\GetChangedTaxScheduleDetailKeyList',
        'GetChangedTaxScheduleDetailKeyListResponse' => '\\GetChangedTaxScheduleDetailKeyListResponse',
        'GetChangedTaxDetailKeyList' => '\\GetChangedTaxDetailKeyList',
        'GetChangedTaxDetailKeyListResponse' => '\\GetChangedTaxDetailKeyListResponse',
        'GetChangedShippingMethodKeyList' => '\\GetChangedShippingMethodKeyList',
        'GetChangedShippingMethodKeyListResponse' => '\\GetChangedShippingMethodKeyListResponse',
        'GetBackOfficeRoleAssignmentList' => '\\GetBackOfficeRoleAssignmentList',
        'GetBackOfficeRoleAssignmentListResponse' => '\\GetBackOfficeRoleAssignmentListResponse',
        'GetBackOfficeRoleList' => '\\GetBackOfficeRoleList',
        'GetBackOfficeRoleListResponse' => '\\GetBackOfficeRoleListResponse',
        'GetBackOfficeRoleByKey' => '\\GetBackOfficeRoleByKey',
        'GetBackOfficeRoleByKeyResponse' => '\\GetBackOfficeRoleByKeyResponse',
        'CreateBackOfficeRoleAssignment' => '\\CreateBackOfficeRoleAssignment',
        'CreateBackOfficeRoleAssignmentResponse' => '\\CreateBackOfficeRoleAssignmentResponse',
        'GetBankByKey' => '\\GetBankByKey',
        'GetBankByKeyResponse' => '\\GetBankByKeyResponse',
        'GetBankList' => '\\GetBankList',
        'GetBankListResponse' => '\\GetBankListResponse',
        'GetBatchByKey' => '\\GetBatchByKey',
        'GetBatchByKeyResponse' => '\\GetBatchByKeyResponse',
        'GetBatchList' => '\\GetBatchList',
        'GetBatchListResponse' => '\\GetBatchListResponse',
        'GetBusinessObjectUserAssignmentList' => '\\GetBusinessObjectUserAssignmentList',
        'GetBusinessObjectUserAssignmentListResponse' => '\\GetBusinessObjectUserAssignmentListResponse',
        'GetUserAssignableBusinessObjectList' => '\\GetUserAssignableBusinessObjectList',
        'GetUserAssignableBusinessObjectListResponse' => '\\GetUserAssignableBusinessObjectListResponse',
        'GetBusinessObjectSummaryList' => '\\GetBusinessObjectSummaryList',
        'GetBusinessObjectSummaryListResponse' => '\\GetBusinessObjectSummaryListResponse',
        'CreateBusinessObjectUserAssignment' => '\\CreateBusinessObjectUserAssignment',
        'CreateBusinessObjectUserAssignmentResponse' => '\\CreateBusinessObjectUserAssignmentResponse',
        'DeleteBusinessObjectUserAssignment' => '\\DeleteBusinessObjectUserAssignment',
        'DeleteBusinessObjectUserAssignmentResponse' => '\\DeleteBusinessObjectUserAssignmentResponse',
        'GetCountryRegionCodeByKey' => '\\GetCountryRegionCodeByKey',
        'GetCountryRegionCodeByKeyResponse' => '\\GetCountryRegionCodeByKeyResponse',
        'GetCountryRegionCodeList' => '\\GetCountryRegionCodeList',
        'GetCountryRegionCodeListResponse' => '\\GetCountryRegionCodeListResponse',
        'GetGLAccountFormatList' => '\\GetGLAccountFormatList',
        'GetGLAccountFormatListResponse' => '\\GetGLAccountFormatListResponse',
        'GetPaymentCardTypeByKey' => '\\GetPaymentCardTypeByKey',
        'GetPaymentCardTypeByKeyResponse' => '\\GetPaymentCardTypeByKeyResponse',
        'GetPaymentCardTypeList' => '\\GetPaymentCardTypeList',
        'GetPaymentCardTypeListResponse' => '\\GetPaymentCardTypeListResponse',
        'GetPaymentTermsByKey' => '\\GetPaymentTermsByKey',
        'GetPaymentTermsByKeyResponse' => '\\GetPaymentTermsByKeyResponse',
        'GetPaymentTermsList' => '\\GetPaymentTermsList',
        'GetPaymentTermsListResponse' => '\\GetPaymentTermsListResponse',
        'GetCompanyByKey' => '\\GetCompanyByKey',
        'GetCompanyByKeyResponse' => '\\GetCompanyByKeyResponse',
        'GetCompanyAddressByKey' => '\\GetCompanyAddressByKey',
        'GetCompanyAddressByKeyResponse' => '\\GetCompanyAddressByKeyResponse',
        'GetCompanyList' => '\\GetCompanyList',
        'GetCompanyListResponse' => '\\GetCompanyListResponse',
        'GetWSEnabledCompanyList' => '\\GetWSEnabledCompanyList',
        'GetWSEnabledCompanyListResponse' => '\\GetWSEnabledCompanyListResponse',
        'GetWSEnabledCompanyForUserList' => '\\GetWSEnabledCompanyForUserList',
        'GetWSEnabledCompanyForUserListResponse' => '\\GetWSEnabledCompanyForUserListResponse',
        'GetCompanyAddressList' => '\\GetCompanyAddressList',
        'GetCompanyAddressListResponse' => '\\GetCompanyAddressListResponse',
        'GetLoggedExceptionDataList' => '\\GetLoggedExceptionDataList',
        'GetLoggedExceptionDataListResponse' => '\\GetLoggedExceptionDataListResponse',
        'GetLoggedExceptionDataByKey' => '\\GetLoggedExceptionDataByKey',
        'GetLoggedExceptionDataByKeyResponse' => '\\GetLoggedExceptionDataByKeyResponse',
        'GetLoggedValidationResultByKey' => '\\GetLoggedValidationResultByKey',
        'GetLoggedValidationResultByKeyResponse' => '\\GetLoggedValidationResultByKeyResponse',
        'DeleteLoggedExceptionDataByKey' => '\\DeleteLoggedExceptionDataByKey',
        'DeleteLoggedExceptionDataByKeyResponse' => '\\DeleteLoggedExceptionDataByKeyResponse',
        'DeleteAllLoggedExceptionData' => '\\DeleteAllLoggedExceptionData',
        'DeleteAllLoggedExceptionDataResponse' => '\\DeleteAllLoggedExceptionDataResponse',
        'GetCurrencyByKey' => '\\GetCurrencyByKey',
        'GetCurrencyByKeyResponse' => '\\GetCurrencyByKeyResponse',
        'GetCurrencyPostingAccountByKey' => '\\GetCurrencyPostingAccountByKey',
        'GetCurrencyPostingAccountByKeyResponse' => '\\GetCurrencyPostingAccountByKeyResponse',
        'GetCurrencyAccessByKey' => '\\GetCurrencyAccessByKey',
        'GetCurrencyAccessByKeyResponse' => '\\GetCurrencyAccessByKeyResponse',
        'GetMulticurrencySetupByKey' => '\\GetMulticurrencySetupByKey',
        'GetMulticurrencySetupByKeyResponse' => '\\GetMulticurrencySetupByKeyResponse',
        'GetCurrencyList' => '\\GetCurrencyList',
        'GetCurrencyListResponse' => '\\GetCurrencyListResponse',
        'GetCurrencyAccessList' => '\\GetCurrencyAccessList',
        'GetCurrencyAccessListResponse' => '\\GetCurrencyAccessListResponse',
        'GetCurrencyPostingAccountList' => '\\GetCurrencyPostingAccountList',
        'GetCurrencyPostingAccountListResponse' => '\\GetCurrencyPostingAccountListResponse',
        'GetMulticurrencySetupList' => '\\GetMulticurrencySetupList',
        'GetMulticurrencySetupListResponse' => '\\GetMulticurrencySetupListResponse',
        'GetPolicyList' => '\\GetPolicyList',
        'GetPolicyListResponse' => '\\GetPolicyListResponse',
        'GetPolicyListByRoleKey' => '\\GetPolicyListByRoleKey',
        'GetPolicyListByRoleKeyResponse' => '\\GetPolicyListByRoleKeyResponse',
        'GetPolicyRoles' => '\\GetPolicyRoles',
        'GetPolicyRolesResponse' => '\\GetPolicyRolesResponse',
        'GetPolicyByOperation' => '\\GetPolicyByOperation',
        'GetPolicyByOperationResponse' => '\\GetPolicyByOperationResponse',
        'GetPolicyByKey' => '\\GetPolicyByKey',
        'GetPolicyByKeyResponse' => '\\GetPolicyByKeyResponse',
        'GetCompletePolicyByKey' => '\\GetCompletePolicyByKey',
        'GetCompletePolicyByKeyResponse' => '\\GetCompletePolicyByKeyResponse',
        'CreatePolicy' => '\\CreatePolicy',
        'CreatePolicyResponse' => '\\CreatePolicyResponse',
        'UpdatePolicy' => '\\UpdatePolicy',
        'UpdatePolicyResponse' => '\\UpdatePolicyResponse',
        'DeletePolicy' => '\\DeletePolicy',
        'DeletePolicyResponse' => '\\DeletePolicyResponse',
        'GetSalespersonByKey' => '\\GetSalespersonByKey',
        'GetSalespersonByKeyResponse' => '\\GetSalespersonByKeyResponse',
        'GetSalespersonList' => '\\GetSalespersonList',
        'GetSalespersonListResponse' => '\\GetSalespersonListResponse',
        'GetSalesTerritoryByKey' => '\\GetSalesTerritoryByKey',
        'GetSalesTerritoryByKeyResponse' => '\\GetSalesTerritoryByKeyResponse',
        'GetSalesTerritoryList' => '\\GetSalesTerritoryList',
        'GetSalesTerritoryListResponse' => '\\GetSalesTerritoryListResponse',
        'GetShippingMethodByKey' => '\\GetShippingMethodByKey',
        'GetShippingMethodByKeyResponse' => '\\GetShippingMethodByKeyResponse',
        'GetShippingMethodList' => '\\GetShippingMethodList',
        'GetShippingMethodListResponse' => '\\GetShippingMethodListResponse',
        'GetTaxScheduleByKey' => '\\GetTaxScheduleByKey',
        'GetTaxScheduleByKeyResponse' => '\\GetTaxScheduleByKeyResponse',
        'GetTaxScheduleList' => '\\GetTaxScheduleList',
        'GetTaxScheduleListResponse' => '\\GetTaxScheduleListResponse',
        'GetTaxScheduleDetailList' => '\\GetTaxScheduleDetailList',
        'GetTaxScheduleDetailListResponse' => '\\GetTaxScheduleDetailListResponse',
        'GetTaxScheduleDetailByKey' => '\\GetTaxScheduleDetailByKey',
        'GetTaxScheduleDetailByKeyResponse' => '\\GetTaxScheduleDetailByKeyResponse',
        'GetTaxDetailByKey' => '\\GetTaxDetailByKey',
        'GetTaxDetailByKeyResponse' => '\\GetTaxDetailByKeyResponse',
        'GetTaxDetailList' => '\\GetTaxDetailList',
        'GetTaxDetailListResponse' => '\\GetTaxDetailListResponse',
        'GetTenantList' => '\\GetTenantList',
        'GetTenantListResponse' => '\\GetTenantListResponse',
        'MultitenantEnabled' => '\\MultitenantEnabled',
        'MultitenantEnabledResponse' => '\\MultitenantEnabledResponse',
        'CreateServiceEquipment' => '\\CreateServiceEquipment',
        'CreateServiceEquipmentResponse' => '\\CreateServiceEquipmentResponse',
        'UpdateServiceEquipment' => '\\UpdateServiceEquipment',
        'UpdateServiceEquipmentResponse' => '\\UpdateServiceEquipmentResponse',
        'GetServiceEquipmentByKey' => '\\GetServiceEquipmentByKey',
        'GetServiceEquipmentByKeyResponse' => '\\GetServiceEquipmentByKeyResponse',
        'GetServiceEquipmentList' => '\\GetServiceEquipmentList',
        'GetServiceEquipmentListResponse' => '\\GetServiceEquipmentListResponse',
        'CreateServiceQuote' => '\\CreateServiceQuote',
        'CreateServiceQuoteResponse' => '\\CreateServiceQuoteResponse',
        'UpdateServiceQuote' => '\\UpdateServiceQuote',
        'UpdateServiceQuoteResponse' => '\\UpdateServiceQuoteResponse',
        'GetServiceQuoteByKey' => '\\GetServiceQuoteByKey',
        'GetServiceQuoteByKeyResponse' => '\\GetServiceQuoteByKeyResponse',
        'GetServiceQuoteList' => '\\GetServiceQuoteList',
        'GetServiceQuoteListResponse' => '\\GetServiceQuoteListResponse',
        'CreateServiceCall' => '\\CreateServiceCall',
        'CreateServiceCallResponse' => '\\CreateServiceCallResponse',
        'UpdateServiceCall' => '\\UpdateServiceCall',
        'UpdateServiceCallResponse' => '\\UpdateServiceCallResponse',
        'GetServiceCallByKey' => '\\GetServiceCallByKey',
        'GetServiceCallByKeyResponse' => '\\GetServiceCallByKeyResponse',
        'GetServiceCallList' => '\\GetServiceCallList',
        'GetServiceCallListResponse' => '\\GetServiceCallListResponse',
        'CreateReturnMaterialAuthorization' => '\\CreateReturnMaterialAuthorization',
        'CreateReturnMaterialAuthorizationResponse' => '\\CreateReturnMaterialAuthorizationResponse',
        'UpdateReturnMaterialAuthorization' => '\\UpdateReturnMaterialAuthorization',
        'UpdateReturnMaterialAuthorizationResponse' => '\\UpdateReturnMaterialAuthorizationResponse',
        'GetReturnMaterialAuthorizationByKey' => '\\GetReturnMaterialAuthorizationByKey',
        'GetReturnMaterialAuthorizationByKeyResponse' => '\\GetReturnMaterialAuthorizationByKeyResponse',
        'GetReturnMaterialAuthorizationList' => '\\GetReturnMaterialAuthorizationList',
        'GetReturnMaterialAuthorizationListResponse' => '\\GetReturnMaterialAuthorizationListResponse',
        'CreateGLTransaction' => '\\CreateGLTransaction',
        'CreateGLTransactionResponse' => '\\CreateGLTransactionResponse',
        'CreateGLFixedAllocationAccount' => '\\CreateGLFixedAllocationAccount',
        'CreateGLFixedAllocationAccountResponse' => '\\CreateGLFixedAllocationAccountResponse',
        'CreateGLPostingAccount' => '\\CreateGLPostingAccount',
        'CreateGLPostingAccountResponse' => '\\CreateGLPostingAccountResponse',
        'CreateGLUnitAccount' => '\\CreateGLUnitAccount',
        'CreateGLUnitAccountResponse' => '\\CreateGLUnitAccountResponse',
        'CreateGLVariableAllocationAccount' => '\\CreateGLVariableAllocationAccount',
        'CreateGLVariableAllocationAccountResponse' => '\\CreateGLVariableAllocationAccountResponse',
        'GetGLTransactionList' => '\\GetGLTransactionList',
        'GetGLTransactionListResponse' => '\\GetGLTransactionListResponse',
        'GetGLAccountCategoryList' => '\\GetGLAccountCategoryList',
        'GetGLAccountCategoryListResponse' => '\\GetGLAccountCategoryListResponse',
        'GetGLPostingAccountList' => '\\GetGLPostingAccountList',
        'GetGLPostingAccountListResponse' => '\\GetGLPostingAccountListResponse',
        'GetGLUnitAccountList' => '\\GetGLUnitAccountList',
        'GetGLUnitAccountListResponse' => '\\GetGLUnitAccountListResponse',
        'GetGLAccountList' => '\\GetGLAccountList',
        'GetGLAccountListResponse' => '\\GetGLAccountListResponse',
        'GetGLFixedAllocationAccountList' => '\\GetGLFixedAllocationAccountList',
        'GetGLFixedAllocationAccountListResponse' => '\\GetGLFixedAllocationAccountListResponse',
        'GetGLVariableAllocationAccountList' => '\\GetGLVariableAllocationAccountList',
        'GetGLVariableAllocationAccountListResponse' => '\\GetGLVariableAllocationAccountListResponse',
        'GetGLTransactionByKey' => '\\GetGLTransactionByKey',
        'GetGLTransactionByKeyResponse' => '\\GetGLTransactionByKeyResponse',
        'GetGLPostedTransactionByKey' => '\\GetGLPostedTransactionByKey',
        'GetGLPostedTransactionByKeyResponse' => '\\GetGLPostedTransactionByKeyResponse',
        'GetGLPostingAccountByKey' => '\\GetGLPostingAccountByKey',
        'GetGLPostingAccountByKeyResponse' => '\\GetGLPostingAccountByKeyResponse',
        'GetGLUnitAccountByKey' => '\\GetGLUnitAccountByKey',
        'GetGLUnitAccountByKeyResponse' => '\\GetGLUnitAccountByKeyResponse',
        'GetGLAccountByKey' => '\\GetGLAccountByKey',
        'GetGLAccountByKeyResponse' => '\\GetGLAccountByKeyResponse',
        'GetGLFixedAllocationAccountByKey' => '\\GetGLFixedAllocationAccountByKey',
        'GetGLFixedAllocationAccountByKeyResponse' => '\\GetGLFixedAllocationAccountByKeyResponse',
        'GetGLVariableAllocationAccountByKey' => '\\GetGLVariableAllocationAccountByKey',
        'GetGLVariableAllocationAccountByKeyResponse' => '\\GetGLVariableAllocationAccountByKeyResponse',
        'GetApplicantByKey' => '\\GetApplicantByKey',
        'GetApplicantByKeyResponse' => '\\GetApplicantByKeyResponse',
        'GetApplicantList' => '\\GetApplicantList',
        'GetApplicantListResponse' => '\\GetApplicantListResponse',
        'CreateApplicant' => '\\CreateApplicant',
        'CreateApplicantResponse' => '\\CreateApplicantResponse',
        'UpdateApplicant' => '\\UpdateApplicant',
        'UpdateApplicantResponse' => '\\UpdateApplicantResponse',
        'DeleteApplicant' => '\\DeleteApplicant',
        'DeleteApplicantResponse' => '\\DeleteApplicantResponse',
        'GetApplicantApplicationByKey' => '\\GetApplicantApplicationByKey',
        'GetApplicantApplicationByKeyResponse' => '\\GetApplicantApplicationByKeyResponse',
        'GetApplicantApplicationList' => '\\GetApplicantApplicationList',
        'GetApplicantApplicationListResponse' => '\\GetApplicantApplicationListResponse',
        'DeleteApplicantApplication' => '\\DeleteApplicantApplication',
        'DeleteApplicantApplicationResponse' => '\\DeleteApplicantApplicationResponse',
        'GetApplicantEducationByKey' => '\\GetApplicantEducationByKey',
        'GetApplicantEducationByKeyResponse' => '\\GetApplicantEducationByKeyResponse',
        'GetApplicantEducationList' => '\\GetApplicantEducationList',
        'GetApplicantEducationListResponse' => '\\GetApplicantEducationListResponse',
        'CreateApplicantEducation' => '\\CreateApplicantEducation',
        'CreateApplicantEducationResponse' => '\\CreateApplicantEducationResponse',
        'UpdateApplicantEducation' => '\\UpdateApplicantEducation',
        'UpdateApplicantEducationResponse' => '\\UpdateApplicantEducationResponse',
        'DeleteApplicantEducation' => '\\DeleteApplicantEducation',
        'DeleteApplicantEducationResponse' => '\\DeleteApplicantEducationResponse',
        'GetApplicantReferenceByKey' => '\\GetApplicantReferenceByKey',
        'GetApplicantReferenceByKeyResponse' => '\\GetApplicantReferenceByKeyResponse',
        'GetApplicantReferenceList' => '\\GetApplicantReferenceList',
        'GetApplicantReferenceListResponse' => '\\GetApplicantReferenceListResponse',
        'CreateApplicantReference' => '\\CreateApplicantReference',
        'CreateApplicantReferenceResponse' => '\\CreateApplicantReferenceResponse',
        'UpdateApplicantReference' => '\\UpdateApplicantReference',
        'UpdateApplicantReferenceResponse' => '\\UpdateApplicantReferenceResponse',
        'DeleteApplicantReference' => '\\DeleteApplicantReference',
        'DeleteApplicantReferenceResponse' => '\\DeleteApplicantReferenceResponse',
        'GetApplicantInterviewByKey' => '\\GetApplicantInterviewByKey',
        'GetApplicantInterviewByKeyResponse' => '\\GetApplicantInterviewByKeyResponse',
        'GetApplicantInterviewList' => '\\GetApplicantInterviewList',
        'GetApplicantInterviewListResponse' => '\\GetApplicantInterviewListResponse',
        'CreateApplicantInterview' => '\\CreateApplicantInterview',
        'CreateApplicantInterviewResponse' => '\\CreateApplicantInterviewResponse',
        'UpdateApplicantInterview' => '\\UpdateApplicantInterview',
        'UpdateApplicantInterviewResponse' => '\\UpdateApplicantInterviewResponse',
        'DeleteApplicantInterview' => '\\DeleteApplicantInterview',
        'DeleteApplicantInterviewResponse' => '\\DeleteApplicantInterviewResponse',
        'GetApplicantTestByKey' => '\\GetApplicantTestByKey',
        'GetApplicantTestByKeyResponse' => '\\GetApplicantTestByKeyResponse',
        'GetApplicantTestList' => '\\GetApplicantTestList',
        'GetApplicantTestListResponse' => '\\GetApplicantTestListResponse',
        'CreateApplicantTest' => '\\CreateApplicantTest',
        'CreateApplicantTestResponse' => '\\CreateApplicantTestResponse',
        'UpdateApplicantTest' => '\\UpdateApplicantTest',
        'UpdateApplicantTestResponse' => '\\UpdateApplicantTestResponse',
        'DeleteApplicantTest' => '\\DeleteApplicantTest',
        'DeleteApplicantTestResponse' => '\\DeleteApplicantTestResponse',
        'GetApplicantWorkHistoryByKey' => '\\GetApplicantWorkHistoryByKey',
        'GetApplicantWorkHistoryByKeyResponse' => '\\GetApplicantWorkHistoryByKeyResponse',
        'GetApplicantWorkHistoryList' => '\\GetApplicantWorkHistoryList',
        'GetApplicantWorkHistoryListResponse' => '\\GetApplicantWorkHistoryListResponse',
        'CreateApplicantWorkHistory' => '\\CreateApplicantWorkHistory',
        'CreateApplicantWorkHistoryResponse' => '\\CreateApplicantWorkHistoryResponse',
        'UpdateApplicantWorkHistory' => '\\UpdateApplicantWorkHistory',
        'UpdateApplicantWorkHistoryResponse' => '\\UpdateApplicantWorkHistoryResponse',
        'DeleteApplicantWorkHistory' => '\\DeleteApplicantWorkHistory',
        'DeleteApplicantWorkHistoryResponse' => '\\DeleteApplicantWorkHistoryResponse',
        'GetApplicantSkillByKey' => '\\GetApplicantSkillByKey',
        'GetApplicantSkillByKeyResponse' => '\\GetApplicantSkillByKeyResponse',
        'GetApplicantSkillList' => '\\GetApplicantSkillList',
        'GetApplicantSkillListResponse' => '\\GetApplicantSkillListResponse',
        'CreateApplicantSkill' => '\\CreateApplicantSkill',
        'CreateApplicantSkillResponse' => '\\CreateApplicantSkillResponse',
        'UpdateApplicantSkill' => '\\UpdateApplicantSkill',
        'UpdateApplicantSkillResponse' => '\\UpdateApplicantSkillResponse',
        'DeleteApplicantSkill' => '\\DeleteApplicantSkill',
        'DeleteApplicantSkillResponse' => '\\DeleteApplicantSkillResponse',
        'GetHRRequisitionByKey' => '\\GetHRRequisitionByKey',
        'GetHRRequisitionByKeyResponse' => '\\GetHRRequisitionByKeyResponse',
        'GetHRRequisitionList' => '\\GetHRRequisitionList',
        'GetHRRequisitionListResponse' => '\\GetHRRequisitionListResponse',
        'CreateHRRequisition' => '\\CreateHRRequisition',
        'CreateHRRequisitionResponse' => '\\CreateHRRequisitionResponse',
        'UpdateHRRequisition' => '\\UpdateHRRequisition',
        'UpdateHRRequisitionResponse' => '\\UpdateHRRequisitionResponse',
        'GetSkillByKey' => '\\GetSkillByKey',
        'GetSkillByKeyResponse' => '\\GetSkillByKeyResponse',
        'GetSkillList' => '\\GetSkillList',
        'GetSkillListResponse' => '\\GetSkillListResponse',
        'CreateSkill' => '\\CreateSkill',
        'CreateSkillResponse' => '\\CreateSkillResponse',
        'UpdateSkill' => '\\UpdateSkill',
        'UpdateSkillResponse' => '\\UpdateSkillResponse',
        'DeleteSkill' => '\\DeleteSkill',
        'DeleteSkillResponse' => '\\DeleteSkillResponse',
        'GetSkillSetByKey' => '\\GetSkillSetByKey',
        'GetSkillSetByKeyResponse' => '\\GetSkillSetByKeyResponse',
        'GetSkillSetList' => '\\GetSkillSetList',
        'GetSkillSetListResponse' => '\\GetSkillSetListResponse',
        'CreateSkillSet' => '\\CreateSkillSet',
        'CreateSkillSetResponse' => '\\CreateSkillSetResponse',
        'UpdateSkillSet' => '\\UpdateSkillSet',
        'UpdateSkillSetResponse' => '\\UpdateSkillSetResponse',
        'DeleteSkillSet' => '\\DeleteSkillSet',
        'DeleteSkillSetResponse' => '\\DeleteSkillSetResponse',
        'GetEmployeeByKey' => '\\GetEmployeeByKey',
        'GetEmployeeByKeyResponse' => '\\GetEmployeeByKeyResponse',
        'GetEmployeeList' => '\\GetEmployeeList',
        'GetEmployeeListResponse' => '\\GetEmployeeListResponse',
        'CreateEmployee' => '\\CreateEmployee',
        'CreateEmployeeResponse' => '\\CreateEmployeeResponse',
        'UpdateEmployee' => '\\UpdateEmployee',
        'UpdateEmployeeResponse' => '\\UpdateEmployeeResponse',
        'GetEmployeeAddressByKey' => '\\GetEmployeeAddressByKey',
        'GetEmployeeAddressByKeyResponse' => '\\GetEmployeeAddressByKeyResponse',
        'GetEmployeeAddressList' => '\\GetEmployeeAddressList',
        'GetEmployeeAddressListResponse' => '\\GetEmployeeAddressListResponse',
        'CreateEmployeeAddress' => '\\CreateEmployeeAddress',
        'CreateEmployeeAddressResponse' => '\\CreateEmployeeAddressResponse',
        'UpdateEmployeeAddress' => '\\UpdateEmployeeAddress',
        'UpdateEmployeeAddressResponse' => '\\UpdateEmployeeAddressResponse',
        'DeleteEmployeeAddress' => '\\DeleteEmployeeAddress',
        'DeleteEmployeeAddressResponse' => '\\DeleteEmployeeAddressResponse',
        'GetEmployeePayCodeByKey' => '\\GetEmployeePayCodeByKey',
        'GetEmployeePayCodeByKeyResponse' => '\\GetEmployeePayCodeByKeyResponse',
        'GetEmployeePayCodeList' => '\\GetEmployeePayCodeList',
        'GetEmployeePayCodeListResponse' => '\\GetEmployeePayCodeListResponse',
        'CreateEmployeePayCode' => '\\CreateEmployeePayCode',
        'CreateEmployeePayCodeResponse' => '\\CreateEmployeePayCodeResponse',
        'UpdateEmployeePayCode' => '\\UpdateEmployeePayCode',
        'UpdateEmployeePayCodeResponse' => '\\UpdateEmployeePayCodeResponse',
        'GetWarehouseList' => '\\GetWarehouseList',
        'GetWarehouseListResponse' => '\\GetWarehouseListResponse',
        'GetItemList' => '\\GetItemList',
        'GetItemListResponse' => '\\GetItemListResponse',
        'GetInventoriedItemList' => '\\GetInventoriedItemList',
        'GetInventoriedItemListResponse' => '\\GetInventoriedItemListResponse',
        'GetFeeList' => '\\GetFeeList',
        'GetFeeListResponse' => '\\GetFeeListResponse',
        'GetServiceList' => '\\GetServiceList',
        'GetServiceListResponse' => '\\GetServiceListResponse',
        'GetPricingList' => '\\GetPricingList',
        'GetPricingListResponse' => '\\GetPricingListResponse',
        'GetUofMScheduleList' => '\\GetUofMScheduleList',
        'GetUofMScheduleListResponse' => '\\GetUofMScheduleListResponse',
        'GetItemVendorList' => '\\GetItemVendorList',
        'GetItemVendorListResponse' => '\\GetItemVendorListResponse',
        'GetItemWarehouseList' => '\\GetItemWarehouseList',
        'GetItemWarehouseListResponse' => '\\GetItemWarehouseListResponse',
        'GetItemCurrencyList' => '\\GetItemCurrencyList',
        'GetItemCurrencyListResponse' => '\\GetItemCurrencyListResponse',
        'GetPriceLevelList' => '\\GetPriceLevelList',
        'GetPriceLevelListResponse' => '\\GetPriceLevelListResponse',
        'GetPriceLevelByKey' => '\\GetPriceLevelByKey',
        'GetPriceLevelByKeyResponse' => '\\GetPriceLevelByKeyResponse',
        'GetItemClassList' => '\\GetItemClassList',
        'GetItemClassListResponse' => '\\GetItemClassListResponse',
        'GetInventoryAdjustmentList' => '\\GetInventoryAdjustmentList',
        'GetInventoryAdjustmentListResponse' => '\\GetInventoryAdjustmentListResponse',
        'GetInventoryVarianceList' => '\\GetInventoryVarianceList',
        'GetInventoryVarianceListResponse' => '\\GetInventoryVarianceListResponse',
        'GetInventoryTransferList' => '\\GetInventoryTransferList',
        'GetInventoryTransferListResponse' => '\\GetInventoryTransferListResponse',
        'GetWarehouseByKey' => '\\GetWarehouseByKey',
        'GetWarehouseByKeyResponse' => '\\GetWarehouseByKeyResponse',
        'GetItemByKey' => '\\GetItemByKey',
        'GetItemByKeyResponse' => '\\GetItemByKeyResponse',
        'GetInventoriedItemByKey' => '\\GetInventoriedItemByKey',
        'GetInventoriedItemByKeyResponse' => '\\GetInventoriedItemByKeyResponse',
        'GetFeeByKey' => '\\GetFeeByKey',
        'GetFeeByKeyResponse' => '\\GetFeeByKeyResponse',
        'GetServiceByKey' => '\\GetServiceByKey',
        'GetServiceByKeyResponse' => '\\GetServiceByKeyResponse',
        'GetPricingByKey' => '\\GetPricingByKey',
        'GetPricingByKeyResponse' => '\\GetPricingByKeyResponse',
        'GetUofMScheduleByKey' => '\\GetUofMScheduleByKey',
        'GetUofMScheduleByKeyResponse' => '\\GetUofMScheduleByKeyResponse',
        'GetItemVendorByKey' => '\\GetItemVendorByKey',
        'GetItemVendorByKeyResponse' => '\\GetItemVendorByKeyResponse',
        'GetItemWarehouseByKey' => '\\GetItemWarehouseByKey',
        'GetItemWarehouseByKeyResponse' => '\\GetItemWarehouseByKeyResponse',
        'GetItemCurrencyByKey' => '\\GetItemCurrencyByKey',
        'GetItemCurrencyByKeyResponse' => '\\GetItemCurrencyByKeyResponse',
        'GetInventoryAdjustmentByKey' => '\\GetInventoryAdjustmentByKey',
        'GetInventoryAdjustmentByKeyResponse' => '\\GetInventoryAdjustmentByKeyResponse',
        'GetInventoryVarianceByKey' => '\\GetInventoryVarianceByKey',
        'GetInventoryVarianceByKeyResponse' => '\\GetInventoryVarianceByKeyResponse',
        'GetInventoryTransferByKey' => '\\GetInventoryTransferByKey',
        'GetInventoryTransferByKeyResponse' => '\\GetInventoryTransferByKeyResponse',
        'DiscontinueSalesItem' => '\\DiscontinueSalesItem',
        'DiscontinueSalesItemResponse' => '\\DiscontinueSalesItemResponse',
        'CreateWarehouse' => '\\CreateWarehouse',
        'CreateWarehouseResponse' => '\\CreateWarehouseResponse',
        'CreateSalesItem' => '\\CreateSalesItem',
        'CreateSalesItemResponse' => '\\CreateSalesItemResponse',
        'CreateKit' => '\\CreateKit',
        'CreateKitResponse' => '\\CreateKitResponse',
        'CreateFee' => '\\CreateFee',
        'CreateFeeResponse' => '\\CreateFeeResponse',
        'CreateService' => '\\CreateService',
        'CreateServiceResponse' => '\\CreateServiceResponse',
        'CreatePricing' => '\\CreatePricing',
        'CreatePricingResponse' => '\\CreatePricingResponse',
        'CreateItemVendor' => '\\CreateItemVendor',
        'CreateItemVendorResponse' => '\\CreateItemVendorResponse',
        'CreateItemWarehouse' => '\\CreateItemWarehouse',
        'CreateItemWarehouseResponse' => '\\CreateItemWarehouseResponse',
        'CreateItemCurrency' => '\\CreateItemCurrency',
        'CreateItemCurrencyResponse' => '\\CreateItemCurrencyResponse',
        'CreateInventoryAdjustment' => '\\CreateInventoryAdjustment',
        'CreateInventoryAdjustmentResponse' => '\\CreateInventoryAdjustmentResponse',
        'CreateInventoryVariance' => '\\CreateInventoryVariance',
        'CreateInventoryVarianceResponse' => '\\CreateInventoryVarianceResponse',
        'CreateInventoryTransfer' => '\\CreateInventoryTransfer',
        'CreateInventoryTransferResponse' => '\\CreateInventoryTransferResponse',
        'UpdateItemVendor' => '\\UpdateItemVendor',
        'UpdateItemVendorResponse' => '\\UpdateItemVendorResponse',
        'GetChangedUofMScheduleKeyList' => '\\GetChangedUofMScheduleKeyList',
        'GetChangedUofMScheduleKeyListResponse' => '\\GetChangedUofMScheduleKeyListResponse',
        'GetChangedPriceLevelKeyList' => '\\GetChangedPriceLevelKeyList',
        'GetChangedPriceLevelKeyListResponse' => '\\GetChangedPriceLevelKeyListResponse',
        'GetChangedPricingKeyList' => '\\GetChangedPricingKeyList',
        'GetChangedPricingKeyListResponse' => '\\GetChangedPricingKeyListResponse',
        'GetChangedItemKeyList' => '\\GetChangedItemKeyList',
        'GetChangedItemKeyListResponse' => '\\GetChangedItemKeyListResponse',
        'GetPlannedOrderByKey' => '\\GetPlannedOrderByKey',
        'GetPlannedOrderByKeyResponse' => '\\GetPlannedOrderByKeyResponse',
        'GetPlannedOrderList' => '\\GetPlannedOrderList',
        'GetPlannedOrderListResponse' => '\\GetPlannedOrderListResponse',
        'GetVendorPlannedOrderByKey' => '\\GetVendorPlannedOrderByKey',
        'GetVendorPlannedOrderByKeyResponse' => '\\GetVendorPlannedOrderByKeyResponse',
        'GetVendorPlannedOrderList' => '\\GetVendorPlannedOrderList',
        'GetVendorPlannedOrderListResponse' => '\\GetVendorPlannedOrderListResponse',
        'GetManufacturingOrderByKey' => '\\GetManufacturingOrderByKey',
        'GetManufacturingOrderByKeyResponse' => '\\GetManufacturingOrderByKeyResponse',
        'GetManufacturingOrderList' => '\\GetManufacturingOrderList',
        'GetManufacturingOrderListResponse' => '\\GetManufacturingOrderListResponse',
        'GetVendorManufacturingOrderByKey' => '\\GetVendorManufacturingOrderByKey',
        'GetVendorManufacturingOrderByKeyResponse' => '\\GetVendorManufacturingOrderByKeyResponse',
        'GetVendorManufacturingOrderList' => '\\GetVendorManufacturingOrderList',
        'GetVendorManufacturingOrderListResponse' => '\\GetVendorManufacturingOrderListResponse',
        'GetProjectMiscellaneousLogList' => '\\GetProjectMiscellaneousLogList',
        'GetProjectMiscellaneousLogListResponse' => '\\GetProjectMiscellaneousLogListResponse',
        'GetProjectBudgetList' => '\\GetProjectBudgetList',
        'GetProjectBudgetListResponse' => '\\GetProjectBudgetListResponse',
        'GetProjectChangeOrderList' => '\\GetProjectChangeOrderList',
        'GetProjectChangeOrderListResponse' => '\\GetProjectChangeOrderListResponse',
        'GetProjectContractList' => '\\GetProjectContractList',
        'GetProjectContractListResponse' => '\\GetProjectContractListResponse',
        'GetProjectList' => '\\GetProjectList',
        'GetProjectListResponse' => '\\GetProjectListResponse',
        'GetProjectTimesheetList' => '\\GetProjectTimesheetList',
        'GetProjectTimesheetListResponse' => '\\GetProjectTimesheetListResponse',
        'GetProjectEmployeeExpenseList' => '\\GetProjectEmployeeExpenseList',
        'GetProjectEmployeeExpenseListResponse' => '\\GetProjectEmployeeExpenseListResponse',
        'GetProjectMiscellaneousLogByKey' => '\\GetProjectMiscellaneousLogByKey',
        'GetProjectMiscellaneousLogByKeyResponse' => '\\GetProjectMiscellaneousLogByKeyResponse',
        'GetProjectBudgetByKey' => '\\GetProjectBudgetByKey',
        'GetProjectBudgetByKeyResponse' => '\\GetProjectBudgetByKeyResponse',
        'GetProjectChangeOrderByKey' => '\\GetProjectChangeOrderByKey',
        'GetProjectChangeOrderByKeyResponse' => '\\GetProjectChangeOrderByKeyResponse',
        'GetProjectContractByKey' => '\\GetProjectContractByKey',
        'GetProjectContractByKeyResponse' => '\\GetProjectContractByKeyResponse',
        'GetProjectByKey' => '\\GetProjectByKey',
        'GetProjectByKeyResponse' => '\\GetProjectByKeyResponse',
        'GetProjectTimesheetByKey' => '\\GetProjectTimesheetByKey',
        'GetProjectTimesheetByKeyResponse' => '\\GetProjectTimesheetByKeyResponse',
        'GetProjectEmployeeExpenseByKey' => '\\GetProjectEmployeeExpenseByKey',
        'GetProjectEmployeeExpenseByKeyResponse' => '\\GetProjectEmployeeExpenseByKeyResponse',
        'CreateVendor' => '\\CreateVendor',
        'CreateVendorResponse' => '\\CreateVendorResponse',
        'CreateVendorAddress' => '\\CreateVendorAddress',
        'CreateVendorAddressResponse' => '\\CreateVendorAddressResponse',
        'UpdateVendor' => '\\UpdateVendor',
        'UpdateVendorResponse' => '\\UpdateVendorResponse',
        'UpdateVendorAddress' => '\\UpdateVendorAddress',
        'UpdateVendorAddressResponse' => '\\UpdateVendorAddressResponse',
        'DeleteVendorAddress' => '\\DeleteVendorAddress',
        'DeleteVendorAddressResponse' => '\\DeleteVendorAddressResponse',
        'GetVendorByKey' => '\\GetVendorByKey',
        'GetVendorByKeyResponse' => '\\GetVendorByKeyResponse',
        'GetVendorAddressByKey' => '\\GetVendorAddressByKey',
        'GetVendorAddressByKeyResponse' => '\\GetVendorAddressByKeyResponse',
        'GetVendorList' => '\\GetVendorList',
        'GetVendorListResponse' => '\\GetVendorListResponse',
        'GetVendorAddressList' => '\\GetVendorAddressList',
        'GetVendorAddressListResponse' => '\\GetVendorAddressListResponse',
        'CreatePayablesInvoice' => '\\CreatePayablesInvoice',
        'CreatePayablesInvoiceResponse' => '\\CreatePayablesInvoiceResponse',
        'CreatePayablesFinanceCharge' => '\\CreatePayablesFinanceCharge',
        'CreatePayablesFinanceChargeResponse' => '\\CreatePayablesFinanceChargeResponse',
        'CreatePayablesMiscellaneousCharge' => '\\CreatePayablesMiscellaneousCharge',
        'CreatePayablesMiscellaneousChargeResponse' => '\\CreatePayablesMiscellaneousChargeResponse',
        'CreatePayablesReturn' => '\\CreatePayablesReturn',
        'CreatePayablesReturnResponse' => '\\CreatePayablesReturnResponse',
        'CreatePayablesCreditMemo' => '\\CreatePayablesCreditMemo',
        'CreatePayablesCreditMemoResponse' => '\\CreatePayablesCreditMemoResponse',
        'GetPayablesInvoiceByKey' => '\\GetPayablesInvoiceByKey',
        'GetPayablesInvoiceByKeyResponse' => '\\GetPayablesInvoiceByKeyResponse',
        'GetPayablesFinanceChargeByKey' => '\\GetPayablesFinanceChargeByKey',
        'GetPayablesFinanceChargeByKeyResponse' => '\\GetPayablesFinanceChargeByKeyResponse',
        'GetPayablesMiscellaneousChargeByKey' => '\\GetPayablesMiscellaneousChargeByKey',
        'GetPayablesMiscellaneousChargeByKeyResponse' => '\\GetPayablesMiscellaneousChargeByKeyResponse',
        'GetPayablesReturnByKey' => '\\GetPayablesReturnByKey',
        'GetPayablesReturnByKeyResponse' => '\\GetPayablesReturnByKeyResponse',
        'GetPayablesCreditMemoByKey' => '\\GetPayablesCreditMemoByKey',
        'GetPayablesCreditMemoByKeyResponse' => '\\GetPayablesCreditMemoByKeyResponse',
        'GetPayablesDocumentList' => '\\GetPayablesDocumentList',
        'GetPayablesDocumentListResponse' => '\\GetPayablesDocumentListResponse',
        'GetPayablesInvoiceList' => '\\GetPayablesInvoiceList',
        'GetPayablesInvoiceListResponse' => '\\GetPayablesInvoiceListResponse',
        'GetPayablesFinanceChargeList' => '\\GetPayablesFinanceChargeList',
        'GetPayablesFinanceChargeListResponse' => '\\GetPayablesFinanceChargeListResponse',
        'GetPayablesMiscellaneousChargeList' => '\\GetPayablesMiscellaneousChargeList',
        'GetPayablesMiscellaneousChargeListResponse' => '\\GetPayablesMiscellaneousChargeListResponse',
        'GetPayablesReturnList' => '\\GetPayablesReturnList',
        'GetPayablesReturnListResponse' => '\\GetPayablesReturnListResponse',
        'GetPayablesCreditMemoList' => '\\GetPayablesCreditMemoList',
        'GetPayablesCreditMemoListResponse' => '\\GetPayablesCreditMemoListResponse',
        'CreatePurchaseOrder' => '\\CreatePurchaseOrder',
        'CreatePurchaseOrderResponse' => '\\CreatePurchaseOrderResponse',
        'CreatePurchaseReceipt' => '\\CreatePurchaseReceipt',
        'CreatePurchaseReceiptResponse' => '\\CreatePurchaseReceiptResponse',
        'CreatePurchaseInvoice' => '\\CreatePurchaseInvoice',
        'CreatePurchaseInvoiceResponse' => '\\CreatePurchaseInvoiceResponse',
        'UpdatePurchaseOrder' => '\\UpdatePurchaseOrder',
        'UpdatePurchaseOrderResponse' => '\\UpdatePurchaseOrderResponse',
        'DeletePurchaseOrder' => '\\DeletePurchaseOrder',
        'DeletePurchaseOrderResponse' => '\\DeletePurchaseOrderResponse',
        'VoidPurchaseOrder' => '\\VoidPurchaseOrder',
        'VoidPurchaseOrderResponse' => '\\VoidPurchaseOrderResponse',
        'GetPurchaseOrderByKey' => '\\GetPurchaseOrderByKey',
        'GetPurchaseOrderByKeyResponse' => '\\GetPurchaseOrderByKeyResponse',
        'GetPurchaseReceiptByKey' => '\\GetPurchaseReceiptByKey',
        'GetPurchaseReceiptByKeyResponse' => '\\GetPurchaseReceiptByKeyResponse',
        'GetPurchaseInvoiceByKey' => '\\GetPurchaseInvoiceByKey',
        'GetPurchaseInvoiceByKeyResponse' => '\\GetPurchaseInvoiceByKeyResponse',
        'GetPurchaseOrderList' => '\\GetPurchaseOrderList',
        'GetPurchaseOrderListResponse' => '\\GetPurchaseOrderListResponse',
        'GetPurchaseReceiptList' => '\\GetPurchaseReceiptList',
        'GetPurchaseReceiptListResponse' => '\\GetPurchaseReceiptListResponse',
        'GetPurchaseInvoiceList' => '\\GetPurchaseInvoiceList',
        'GetPurchaseInvoiceListResponse' => '\\GetPurchaseInvoiceListResponse',
        'GetChangedSalespersonKeyList' => '\\GetChangedSalespersonKeyList',
        'GetChangedSalespersonKeyListResponse' => '\\GetChangedSalespersonKeyListResponse',
        'GetChangedCustomerAddressKeyList' => '\\GetChangedCustomerAddressKeyList',
        'GetChangedCustomerAddressKeyListResponse' => '\\GetChangedCustomerAddressKeyListResponse',
        'GetChangedCustomerKeyList' => '\\GetChangedCustomerKeyList',
        'GetChangedCustomerKeyListResponse' => '\\GetChangedCustomerKeyListResponse',
        'CreateCorporateAccount' => '\\CreateCorporateAccount',
        'CreateCorporateAccountResponse' => '\\CreateCorporateAccountResponse',
        'CreateCustomer' => '\\CreateCustomer',
        'CreateCustomerResponse' => '\\CreateCustomerResponse',
        'CreateCustomerAddress' => '\\CreateCustomerAddress',
        'CreateCustomerAddressResponse' => '\\CreateCustomerAddressResponse',
        'UpdateCorporateAccount' => '\\UpdateCorporateAccount',
        'UpdateCorporateAccountResponse' => '\\UpdateCorporateAccountResponse',
        'UpdateCustomer' => '\\UpdateCustomer',
        'UpdateCustomerResponse' => '\\UpdateCustomerResponse',
        'UpdateCustomerAddress' => '\\UpdateCustomerAddress',
        'UpdateCustomerAddressResponse' => '\\UpdateCustomerAddressResponse',
        'DeleteCustomer' => '\\DeleteCustomer',
        'DeleteCustomerResponse' => '\\DeleteCustomerResponse',
        'DeleteCustomerAddress' => '\\DeleteCustomerAddress',
        'DeleteCustomerAddressResponse' => '\\DeleteCustomerAddressResponse',
        'GetCorporateAccountByKey' => '\\GetCorporateAccountByKey',
        'GetCorporateAccountByKeyResponse' => '\\GetCorporateAccountByKeyResponse',
        'GetCustomerByKey' => '\\GetCustomerByKey',
        'GetCustomerByKeyResponse' => '\\GetCustomerByKeyResponse',
        'GetCustomerAddressByKey' => '\\GetCustomerAddressByKey',
        'GetCustomerAddressByKeyResponse' => '\\GetCustomerAddressByKeyResponse',
        'GetCustomerList' => '\\GetCustomerList',
        'GetCustomerListResponse' => '\\GetCustomerListResponse',
        'GetCustomerAddressList' => '\\GetCustomerAddressList',
        'GetCustomerAddressListResponse' => '\\GetCustomerAddressListResponse',
        'CreateReceivablesInvoice' => '\\CreateReceivablesInvoice',
        'CreateReceivablesInvoiceResponse' => '\\CreateReceivablesInvoiceResponse',
        'CreateReceivablesDebitMemo' => '\\CreateReceivablesDebitMemo',
        'CreateReceivablesDebitMemoResponse' => '\\CreateReceivablesDebitMemoResponse',
        'CreateReceivablesServiceRepair' => '\\CreateReceivablesServiceRepair',
        'CreateReceivablesServiceRepairResponse' => '\\CreateReceivablesServiceRepairResponse',
        'CreateReceivablesFinanceCharge' => '\\CreateReceivablesFinanceCharge',
        'CreateReceivablesFinanceChargeResponse' => '\\CreateReceivablesFinanceChargeResponse',
        'CreateReceivablesWarranty' => '\\CreateReceivablesWarranty',
        'CreateReceivablesWarrantyResponse' => '\\CreateReceivablesWarrantyResponse',
        'CreateReceivablesCreditMemo' => '\\CreateReceivablesCreditMemo',
        'CreateReceivablesCreditMemoResponse' => '\\CreateReceivablesCreditMemoResponse',
        'CreateReceivablesReturn' => '\\CreateReceivablesReturn',
        'CreateReceivablesReturnResponse' => '\\CreateReceivablesReturnResponse',
        'CreateCashReceipt' => '\\CreateCashReceipt',
        'CreateCashReceiptResponse' => '\\CreateCashReceiptResponse',
        'GetReceivablesInvoiceByKey' => '\\GetReceivablesInvoiceByKey',
        'GetReceivablesInvoiceByKeyResponse' => '\\GetReceivablesInvoiceByKeyResponse',
        'GetReceivablesDebitMemoByKey' => '\\GetReceivablesDebitMemoByKey',
        'GetReceivablesDebitMemoByKeyResponse' => '\\GetReceivablesDebitMemoByKeyResponse',
        'GetReceivablesServiceRepairByKey' => '\\GetReceivablesServiceRepairByKey',
        'GetReceivablesServiceRepairByKeyResponse' => '\\GetReceivablesServiceRepairByKeyResponse',
        'GetReceivablesFinanceChargeByKey' => '\\GetReceivablesFinanceChargeByKey',
        'GetReceivablesFinanceChargeByKeyResponse' => '\\GetReceivablesFinanceChargeByKeyResponse',
        'GetReceivablesWarrantyByKey' => '\\GetReceivablesWarrantyByKey',
        'GetReceivablesWarrantyByKeyResponse' => '\\GetReceivablesWarrantyByKeyResponse',
        'GetReceivablesCreditMemoByKey' => '\\GetReceivablesCreditMemoByKey',
        'GetReceivablesCreditMemoByKeyResponse' => '\\GetReceivablesCreditMemoByKeyResponse',
        'GetReceivablesReturnByKey' => '\\GetReceivablesReturnByKey',
        'GetReceivablesReturnByKeyResponse' => '\\GetReceivablesReturnByKeyResponse',
        'GetCashReceiptByKey' => '\\GetCashReceiptByKey',
        'GetCashReceiptByKeyResponse' => '\\GetCashReceiptByKeyResponse',
        'GetCustomerReceivablesSummaryByKey' => '\\GetCustomerReceivablesSummaryByKey',
        'GetCustomerReceivablesSummaryByKeyResponse' => '\\GetCustomerReceivablesSummaryByKeyResponse',
        'GetPostedPayablesVendorPaymentsByKey' => '\\GetPostedPayablesVendorPaymentsByKey',
        'GetPostedPayablesVendorPaymentsByKeyResponse' => '\\GetPostedPayablesVendorPaymentsByKeyResponse',
        'GetReceivablesDocumentList' => '\\GetReceivablesDocumentList',
        'GetReceivablesDocumentListResponse' => '\\GetReceivablesDocumentListResponse',
        'GetReceivablesInvoiceList' => '\\GetReceivablesInvoiceList',
        'GetReceivablesInvoiceListResponse' => '\\GetReceivablesInvoiceListResponse',
        'GetReceivablesDebitMemoList' => '\\GetReceivablesDebitMemoList',
        'GetReceivablesDebitMemoListResponse' => '\\GetReceivablesDebitMemoListResponse',
        'GetReceivablesServiceRepairList' => '\\GetReceivablesServiceRepairList',
        'GetReceivablesServiceRepairListResponse' => '\\GetReceivablesServiceRepairListResponse',
        'GetReceivablesFinanceChargeList' => '\\GetReceivablesFinanceChargeList',
        'GetReceivablesFinanceChargeListResponse' => '\\GetReceivablesFinanceChargeListResponse',
        'GetReceivablesWarrantyList' => '\\GetReceivablesWarrantyList',
        'GetReceivablesWarrantyListResponse' => '\\GetReceivablesWarrantyListResponse',
        'GetReceivablesCreditMemoList' => '\\GetReceivablesCreditMemoList',
        'GetReceivablesCreditMemoListResponse' => '\\GetReceivablesCreditMemoListResponse',
        'GetReceivablesReturnList' => '\\GetReceivablesReturnList',
        'GetReceivablesReturnListResponse' => '\\GetReceivablesReturnListResponse',
        'GetCashReceiptList' => '\\GetCashReceiptList',
        'GetCashReceiptListResponse' => '\\GetCashReceiptListResponse',
        'GetCustomerReceivablesSummaryList' => '\\GetCustomerReceivablesSummaryList',
        'GetCustomerReceivablesSummaryListResponse' => '\\GetCustomerReceivablesSummaryListResponse',
        'GetPostedPayablesVendorPaymentsList' => '\\GetPostedPayablesVendorPaymentsList',
        'GetPostedPayablesVendorPaymentsListResponse' => '\\GetPostedPayablesVendorPaymentsListResponse',
        'VoidReceivablesCreditMemo' => '\\VoidReceivablesCreditMemo',
        'VoidReceivablesCreditMemoResponse' => '\\VoidReceivablesCreditMemoResponse',
        'VoidReceivablesReturn' => '\\VoidReceivablesReturn',
        'VoidReceivablesReturnResponse' => '\\VoidReceivablesReturnResponse',
        'VoidCashReceipt' => '\\VoidCashReceipt',
        'VoidCashReceiptResponse' => '\\VoidCashReceiptResponse',
        'CreateSalesOrder' => '\\CreateSalesOrder',
        'CreateSalesOrderResponse' => '\\CreateSalesOrderResponse',
        'CreateSalesInvoice' => '\\CreateSalesInvoice',
        'CreateSalesInvoiceResponse' => '\\CreateSalesInvoiceResponse',
        'CreateSalesReturn' => '\\CreateSalesReturn',
        'CreateSalesReturnResponse' => '\\CreateSalesReturnResponse',
        'CreateSalesBackorder' => '\\CreateSalesBackorder',
        'CreateSalesBackorderResponse' => '\\CreateSalesBackorderResponse',
        'CreateSalesFulfillmentOrder' => '\\CreateSalesFulfillmentOrder',
        'CreateSalesFulfillmentOrderResponse' => '\\CreateSalesFulfillmentOrderResponse',
        'CreateSalesQuote' => '\\CreateSalesQuote',
        'CreateSalesQuoteResponse' => '\\CreateSalesQuoteResponse',
        'CreateSalesProcessHoldSetup' => '\\CreateSalesProcessHoldSetup',
        'CreateSalesProcessHoldSetupResponse' => '\\CreateSalesProcessHoldSetupResponse',
        'UpdateSalesOrder' => '\\UpdateSalesOrder',
        'UpdateSalesOrderResponse' => '\\UpdateSalesOrderResponse',
        'UpdateSalesInvoice' => '\\UpdateSalesInvoice',
        'UpdateSalesInvoiceResponse' => '\\UpdateSalesInvoiceResponse',
        'UpdateSalesReturn' => '\\UpdateSalesReturn',
        'UpdateSalesReturnResponse' => '\\UpdateSalesReturnResponse',
        'UpdateSalesBackorder' => '\\UpdateSalesBackorder',
        'UpdateSalesBackorderResponse' => '\\UpdateSalesBackorderResponse',
        'UpdateSalesFulfillmentOrder' => '\\UpdateSalesFulfillmentOrder',
        'UpdateSalesFulfillmentOrderResponse' => '\\UpdateSalesFulfillmentOrderResponse',
        'UpdateSalesQuote' => '\\UpdateSalesQuote',
        'UpdateSalesQuoteResponse' => '\\UpdateSalesQuoteResponse',
        'UpdateSalesProcessHoldSetup' => '\\UpdateSalesProcessHoldSetup',
        'UpdateSalesProcessHoldSetupResponse' => '\\UpdateSalesProcessHoldSetupResponse',
        'DeleteSalesOrder' => '\\DeleteSalesOrder',
        'DeleteSalesOrderResponse' => '\\DeleteSalesOrderResponse',
        'DeleteSalesInvoice' => '\\DeleteSalesInvoice',
        'DeleteSalesInvoiceResponse' => '\\DeleteSalesInvoiceResponse',
        'DeleteSalesReturn' => '\\DeleteSalesReturn',
        'DeleteSalesReturnResponse' => '\\DeleteSalesReturnResponse',
        'DeleteSalesBackorder' => '\\DeleteSalesBackorder',
        'DeleteSalesBackorderResponse' => '\\DeleteSalesBackorderResponse',
        'DeleteSalesFulfillmentOrder' => '\\DeleteSalesFulfillmentOrder',
        'DeleteSalesFulfillmentOrderResponse' => '\\DeleteSalesFulfillmentOrderResponse',
        'DeleteSalesQuote' => '\\DeleteSalesQuote',
        'DeleteSalesQuoteResponse' => '\\DeleteSalesQuoteResponse',
        'VoidSalesOrder' => '\\VoidSalesOrder',
        'VoidSalesOrderResponse' => '\\VoidSalesOrderResponse',
        'VoidSalesInvoice' => '\\VoidSalesInvoice',
        'VoidSalesInvoiceResponse' => '\\VoidSalesInvoiceResponse',
        'VoidSalesReturn' => '\\VoidSalesReturn',
        'VoidSalesReturnResponse' => '\\VoidSalesReturnResponse',
        'VoidSalesBackorder' => '\\VoidSalesBackorder',
        'VoidSalesBackorderResponse' => '\\VoidSalesBackorderResponse',
        'VoidSalesQuote' => '\\VoidSalesQuote',
        'VoidSalesQuoteResponse' => '\\VoidSalesQuoteResponse',
        'GetSalesOrderByKey' => '\\GetSalesOrderByKey',
        'GetSalesOrderByKeyResponse' => '\\GetSalesOrderByKeyResponse',
        'GetSalesInvoiceByKey' => '\\GetSalesInvoiceByKey',
        'GetSalesInvoiceByKeyResponse' => '\\GetSalesInvoiceByKeyResponse',
        'GetSalesReturnByKey' => '\\GetSalesReturnByKey',
        'GetSalesReturnByKeyResponse' => '\\GetSalesReturnByKeyResponse',
        'GetSalesBackorderByKey' => '\\GetSalesBackorderByKey',
        'GetSalesBackorderByKeyResponse' => '\\GetSalesBackorderByKeyResponse',
        'GetSalesFulfillmentOrderByKey' => '\\GetSalesFulfillmentOrderByKey',
        'GetSalesFulfillmentOrderByKeyResponse' => '\\GetSalesFulfillmentOrderByKeyResponse',
        'GetSalesQuoteByKey' => '\\GetSalesQuoteByKey',
        'GetSalesQuoteByKeyResponse' => '\\GetSalesQuoteByKeyResponse',
        'GetSalesProcessHoldSetupByKey' => '\\GetSalesProcessHoldSetupByKey',
        'GetSalesProcessHoldSetupByKeyResponse' => '\\GetSalesProcessHoldSetupByKeyResponse',
        'GetSalespersonCommissionsByKey' => '\\GetSalespersonCommissionsByKey',
        'GetSalespersonCommissionsByKeyResponse' => '\\GetSalespersonCommissionsByKeyResponse',
        'GetSalesDocumentList' => '\\GetSalesDocumentList',
        'GetSalesDocumentListResponse' => '\\GetSalesDocumentListResponse',
        'GetSalesOrderList' => '\\GetSalesOrderList',
        'GetSalesOrderListResponse' => '\\GetSalesOrderListResponse',
        'GetSalesInvoiceList' => '\\GetSalesInvoiceList',
        'GetSalesInvoiceListResponse' => '\\GetSalesInvoiceListResponse',
        'GetSalesReturnList' => '\\GetSalesReturnList',
        'GetSalesReturnListResponse' => '\\GetSalesReturnListResponse',
        'GetSalesBackorderList' => '\\GetSalesBackorderList',
        'GetSalesBackorderListResponse' => '\\GetSalesBackorderListResponse',
        'GetSalesFulfillmentOrderList' => '\\GetSalesFulfillmentOrderList',
        'GetSalesFulfillmentOrderListResponse' => '\\GetSalesFulfillmentOrderListResponse',
        'GetSalesQuoteList' => '\\GetSalesQuoteList',
        'GetSalesQuoteListResponse' => '\\GetSalesQuoteListResponse',
        'GetSalesProcessHoldSetupList' => '\\GetSalesProcessHoldSetupList',
        'GetSalesProcessHoldSetupListResponse' => '\\GetSalesProcessHoldSetupListResponse',
        'GetSalespersonCommissionsList' => '\\GetSalespersonCommissionsList',
        'GetSalespersonCommissionsListResponse' => '\\GetSalespersonCommissionsListResponse',
        'GetChangedSalesOrderKeyList' => '\\GetChangedSalesOrderKeyList',
        'GetChangedSalesOrderKeyListResponse' => '\\GetChangedSalesOrderKeyListResponse',
        'GetChangedSalesInvoiceKeyList' => '\\GetChangedSalesInvoiceKeyList',
        'GetChangedSalesInvoiceKeyListResponse' => '\\GetChangedSalesInvoiceKeyListResponse',
        'GetDynamicsOnlineConfigurationByKey' => '\\GetDynamicsOnlineConfigurationByKey',
        'GetDynamicsOnlineConfigurationByKeyResponse' => '\\GetDynamicsOnlineConfigurationByKeyResponse',
        'GetDynamicsOnlineConfigurationList' => '\\GetDynamicsOnlineConfigurationList',
        'GetDynamicsOnlineConfigurationListResponse' => '\\GetDynamicsOnlineConfigurationListResponse',
        'CurrencyChangedKeyCriteria' => '\\CurrencyChangedKeyCriteria',
        'BaseChangedKeyCriteria' => '\\BaseChangedKeyCriteria',
        'ArrayOfChangedCurrencyKey' => '\\ArrayOfChangedCurrencyKey',
        'ChangedCurrencyKey' => '\\ChangedCurrencyKey',
        'ChangedBusinessObjectGreatPlainsKey' => '\\ChangedBusinessObjectGreatPlainsKey',
        'ChangedCustomerKey' => '\\ChangedCustomerKey',
        'ChangedCustomerAddressKey' => '\\ChangedCustomerAddressKey',
        'CustomerKey' => '\\CustomerKey',
        'ReferenceKey' => '\\ReferenceKey',
        'GreatPlainsKey' => '\\GreatPlainsKey',
        'InternetAddressKeyChangedCriteria' => '\\InternetAddressKeyChangedCriteria',
        'ArrayOfChangedInternetAddressKey' => '\\ArrayOfChangedInternetAddressKey',
        'ChangedInternetAddressKey' => '\\ChangedInternetAddressKey',
        'AddressKey' => '\\AddressKey',
        'TaxScheduleDetailChangedKeyCriteria' => '\\TaxScheduleDetailChangedKeyCriteria',
        'ArrayOfChangedTaxScheduleDetailKey' => '\\ArrayOfChangedTaxScheduleDetailKey',
        'ChangedTaxScheduleDetailKey' => '\\ChangedTaxScheduleDetailKey',
        'TaxScheduleDetailKey' => '\\TaxScheduleDetailKey',
        'TaxDetailKey' => '\\TaxDetailKey',
        'TaxScheduleKey' => '\\TaxScheduleKey',
        'TaxDetailChangedKeyCriteria' => '\\TaxDetailChangedKeyCriteria',
        'ArrayOfChangedTaxDetailKey' => '\\ArrayOfChangedTaxDetailKey',
        'ChangedTaxDetailKey' => '\\ChangedTaxDetailKey',
        'ShippingMethodChangedKeyCriteria' => '\\ShippingMethodChangedKeyCriteria',
        'ArrayOfChangedShippingMethodKey' => '\\ArrayOfChangedShippingMethodKey',
        'ChangedShippingMethodKey' => '\\ChangedShippingMethodKey',
        'ArrayOfBackOfficeRoleAssignment' => '\\ArrayOfBackOfficeRoleAssignment',
        'BackOfficeRoleAssignment' => '\\BackOfficeRoleAssignment',
        'BackOfficeRoleAssignmentKey' => '\\BackOfficeRoleAssignmentKey',
        'BackOfficeRoleKey' => '\\BackOfficeRoleKey',
        'UserKey' => '\\UserKey',
        'ArrayOfBackOfficeRole' => '\\ArrayOfBackOfficeRole',
        'BackOfficeRole' => '\\BackOfficeRole',
        'BankKey' => '\\BankKey',
        'Bank' => '\\Bank',
        'Address' => '\\Address',
        'AddressBase' => '\\AddressBase',
        'BankCriteria' => '\\BankCriteria',
        'ArrayOfBank' => '\\ArrayOfBank',
        'BatchKey' => '\\BatchKey',
        'Batch' => '\\Batch',
        'BankAccountKey' => '\\BankAccountKey',
        'CurrencyKey' => '\\CurrencyKey',
        'ArrayOfWorkflow' => '\\ArrayOfWorkflow',
        'Workflow' => '\\Workflow',
        'ApprovalWorkflow' => '\\ApprovalWorkflow',
        'BatchCriteria' => '\\BatchCriteria',
        'ArrayOfBatch' => '\\ArrayOfBatch',
        'CountryRegionCodeKey' => '\\CountryRegionCodeKey',
        'CountryRegionCode' => '\\CountryRegionCode',
        'CountryRegionCodeCriteria' => '\\CountryRegionCodeCriteria',
        'ArrayOfCountryRegionCode' => '\\ArrayOfCountryRegionCode',
        'GLAccountFormatCriteria' => '\\GLAccountFormatCriteria',
        'ArrayOfGLAccountFormat' => '\\ArrayOfGLAccountFormat',
        'GLAccountFormat' => '\\GLAccountFormat',
        'GLAccountFormatKey' => '\\GLAccountFormatKey',
        'PaymentCardTypeKey' => '\\PaymentCardTypeKey',
        'PaymentCardType' => '\\PaymentCardType',
        'GLAccountNumberKey' => '\\GLAccountNumberKey',
        'VendorKey' => '\\VendorKey',
        'PaymentCardTypeCriteria' => '\\PaymentCardTypeCriteria',
        'ArrayOfPaymentCardType' => '\\ArrayOfPaymentCardType',
        'PaymentTermsKey' => '\\PaymentTermsKey',
        'PaymentTerms' => '\\PaymentTerms',
        'MoneyPercentChoice' => '\\MoneyPercentChoice',
        'PaymentTermsCriteria' => '\\PaymentTermsCriteria',
        'ArrayOfPaymentTerms' => '\\ArrayOfPaymentTerms',
        'Company' => '\\Company',
        'ExtendedBusinessAddress' => '\\ExtendedBusinessAddress',
        'BusinessAddress' => '\\BusinessAddress',
        'InternationalAddress' => '\\InternationalAddress',
        'CompanyAddressKey' => '\\CompanyAddressKey',
        'CompanyAddress' => '\\CompanyAddress',
        'InternetAddresses' => '\\InternetAddresses',
        'CompanyCriteria' => '\\CompanyCriteria',
        'ArrayOfCompany' => '\\ArrayOfCompany',
        'CompanyAddressCriteria' => '\\CompanyAddressCriteria',
        'ArrayOfCompanyAddress' => '\\ArrayOfCompanyAddress',
        'Currency' => '\\Currency',
        'CurrencyPostingAccountKey' => '\\CurrencyPostingAccountKey',
        'CurrencyPostingAccount' => '\\CurrencyPostingAccount',
        'CurrencyAccessKey' => '\\CurrencyAccessKey',
        'CurrencyAccess' => '\\CurrencyAccess',
        'MulticurrencySetupKey' => '\\MulticurrencySetupKey',
        'MulticurrencySetup' => '\\MulticurrencySetup',
        'RateTypeKey' => '\\RateTypeKey',
        'CurrencyCriteria' => '\\CurrencyCriteria',
        'ArrayOfCurrency' => '\\ArrayOfCurrency',
        'CurrencyAccessCriteria' => '\\CurrencyAccessCriteria',
        'ArrayOfCurrencyAccess' => '\\ArrayOfCurrencyAccess',
        'CurrencyPostingAccountCriteria' => '\\CurrencyPostingAccountCriteria',
        'ArrayOfCurrencyPostingAccount' => '\\ArrayOfCurrencyPostingAccount',
        'MulticurrencySetupCriteria' => '\\MulticurrencySetupCriteria',
        'ArrayOfMulticurrencySetup' => '\\ArrayOfMulticurrencySetup',
        'SalespersonKey' => '\\SalespersonKey',
        'Salesperson' => '\\Salesperson',
        'EmployeeKey' => '\\EmployeeKey',
        'SalesHistoryOptions' => '\\SalesHistoryOptions',
        'ArrayOfSalespersonHistory' => '\\ArrayOfSalespersonHistory',
        'SalespersonHistory' => '\\SalespersonHistory',
        'CommissionSummary' => '\\CommissionSummary',
        'SalespersonHistoryKey' => '\\SalespersonHistoryKey',
        'SalesSummary' => '\\SalesSummary',
        'SalesTerritoryKey' => '\\SalesTerritoryKey',
        'SalespersonCriteria' => '\\SalespersonCriteria',
        'ArrayOfSalespersonSummary' => '\\ArrayOfSalespersonSummary',
        'SalespersonSummary' => '\\SalespersonSummary',
        'SalesTerritory' => '\\SalesTerritory',
        'ArrayOfSalesTerritoryHistory' => '\\ArrayOfSalesTerritoryHistory',
        'SalesTerritoryHistory' => '\\SalesTerritoryHistory',
        'SalesTerritoryHistoryKey' => '\\SalesTerritoryHistoryKey',
        'SalesTerritoryCriteria' => '\\SalesTerritoryCriteria',
        'ArrayOfSalesTerritorySummary' => '\\ArrayOfSalesTerritorySummary',
        'SalesTerritorySummary' => '\\SalesTerritorySummary',
        'ShippingMethodKey' => '\\ShippingMethodKey',
        'ShippingMethod' => '\\ShippingMethod',
        'ShippingMethodCriteria' => '\\ShippingMethodCriteria',
        'ArrayOfShippingMethod' => '\\ArrayOfShippingMethod',
        'TaxSchedule' => '\\TaxSchedule',
        'TaxScheduleCriteria' => '\\TaxScheduleCriteria',
        'ArrayOfTaxSchedule' => '\\ArrayOfTaxSchedule',
        'TaxScheduleDetailCriteria' => '\\TaxScheduleDetailCriteria',
        'ArrayOfTaxScheduleDetail' => '\\ArrayOfTaxScheduleDetail',
        'TaxScheduleDetail' => '\\TaxScheduleDetail',
        'TaxDetail' => '\\TaxDetail',
        'TaxDetailCriteria' => '\\TaxDetailCriteria',
        'ArrayOfTaxDetail' => '\\ArrayOfTaxDetail',
        'ServiceEquipment' => '\\ServiceEquipment',
        'ServiceEquipmentAddress' => '\\ServiceEquipmentAddress',
        'ServiceEquipmentKey' => '\\ServiceEquipmentKey',
        'ItemKey' => '\\ItemKey',
        'OfficeKey' => '\\OfficeKey',
        'ArrayOfServiceEquipmentReading' => '\\ArrayOfServiceEquipmentReading',
        'ServiceEquipmentReading' => '\\ServiceEquipmentReading',
        'ServiceEquipmentReadingKey' => '\\ServiceEquipmentReadingKey',
        'ServiceEquipmentMeter' => '\\ServiceEquipmentMeter',
        'ServiceWarrantyCode' => '\\ServiceWarrantyCode',
        'ServiceWarrantyCodeKey' => '\\ServiceWarrantyCodeKey',
        'ServiceAreaKey' => '\\ServiceAreaKey',
        'ServiceStatusKey' => '\\ServiceStatusKey',
        'ServiceTechnicianKey' => '\\ServiceTechnicianKey',
        'ServiceTimeZoneKey' => '\\ServiceTimeZoneKey',
        'ServiceEquipmentCriteria' => '\\ServiceEquipmentCriteria',
        'ArrayOfServiceEquipmentSummary' => '\\ArrayOfServiceEquipmentSummary',
        'ServiceEquipmentSummary' => '\\ServiceEquipmentSummary',
        'ServiceQuote' => '\\ServiceQuote',
        'ServiceCallDocument' => '\\ServiceCallDocument',
        'ServiceDocument' => '\\ServiceDocument',
        'ServiceBillTo' => '\\ServiceBillTo',
        'ServiceDocumentKey' => '\\ServiceDocumentKey',
        'TransactionKey' => '\\TransactionKey',
        'ShipToAddressKey' => '\\ShipToAddressKey',
        'ServiceCall' => '\\ServiceCall',
        'ArrayOfServiceCallAdditionalChargeLine' => '\\ArrayOfServiceCallAdditionalChargeLine',
        'ServiceCallAdditionalChargeLine' => '\\ServiceCallAdditionalChargeLine',
        'ServiceChargeLine' => '\\ServiceChargeLine',
        'ServiceLine' => '\\ServiceLine',
        'ServiceLineKey' => '\\ServiceLineKey',
        'PriceLevelKey' => '\\PriceLevelKey',
        'ServiceLinePurchaseOrderCreation' => '\\ServiceLinePurchaseOrderCreation',
        'PurchaseTransactionLineKey' => '\\PurchaseTransactionLineKey',
        'PurchaseTransactionKey' => '\\PurchaseTransactionKey',
        'ArrayOfServiceCallEquipmentCode' => '\\ArrayOfServiceCallEquipmentCode',
        'ServiceCallEquipmentCode' => '\\ServiceCallEquipmentCode',
        'ServiceEquipmentCode' => '\\ServiceEquipmentCode',
        'ServiceCallLineCauseCodeKey' => '\\ServiceCallLineCauseCodeKey',
        'ServiceCallLineProblemCodeKey' => '\\ServiceCallLineProblemCodeKey',
        'ServiceCallLineRepairCodeKey' => '\\ServiceCallLineRepairCodeKey',
        'ArrayOfServiceCallExpenseLine' => '\\ArrayOfServiceCallExpenseLine',
        'ServiceCallExpenseLine' => '\\ServiceCallExpenseLine',
        'ArrayOfServiceCallLaborLine' => '\\ArrayOfServiceCallLaborLine',
        'ServiceCallLaborLine' => '\\ServiceCallLaborLine',
        'ServiceLaborLine' => '\\ServiceLaborLine',
        'ServiceDistanceTraveled' => '\\ServiceDistanceTraveled',
        'ServiceWorkTypeKey' => '\\ServiceWorkTypeKey',
        'ServiceCallEquipmentMeter' => '\\ServiceCallEquipmentMeter',
        'ArrayOfServiceCallPartLine' => '\\ArrayOfServiceCallPartLine',
        'ServiceCallPartLine' => '\\ServiceCallPartLine',
        'ServicePartLine' => '\\ServicePartLine',
        'ServiceCallStatusCodeKey' => '\\ServiceCallStatusCodeKey',
        'WarehouseKey' => '\\WarehouseKey',
        'ArrayOfServiceLot' => '\\ArrayOfServiceLot',
        'ServiceLot' => '\\ServiceLot',
        'ServiceSerialLot' => '\\ServiceSerialLot',
        'SalesSerialLotBase' => '\\SalesSerialLotBase',
        'ServiceSerial' => '\\ServiceSerial',
        'SalesSerialLot' => '\\SalesSerialLot',
        'SalesSerial' => '\\SalesSerial',
        'SalesComponentSerial' => '\\SalesComponentSerial',
        'SalesComponentSerialKey' => '\\SalesComponentSerialKey',
        'SalesComponentKey' => '\\SalesComponentKey',
        'SalesLineKey' => '\\SalesLineKey',
        'SalesDocumentKey' => '\\SalesDocumentKey',
        'SalesLineSerial' => '\\SalesLineSerial',
        'SalesLineSerialKey' => '\\SalesLineSerialKey',
        'SalesComponentLot' => '\\SalesComponentLot',
        'SalesLot' => '\\SalesLot',
        'SalesLineLot' => '\\SalesLineLot',
        'SalesLineLotKey' => '\\SalesLineLotKey',
        'SalesComponentLotKey' => '\\SalesComponentLotKey',
        'ServiceSerialLotKey' => '\\ServiceSerialLotKey',
        'ArrayOfServiceSerial' => '\\ArrayOfServiceSerial',
        'ReturnMaterialAuthorization' => '\\ReturnMaterialAuthorization',
        'ArrayOfReturnMaterialAuthorizationAudit' => '\\ArrayOfReturnMaterialAuthorizationAudit',
        'ReturnMaterialAuthorizationAudit' => '\\ReturnMaterialAuthorizationAudit',
        'ServiceAudit' => '\\ServiceAudit',
        'ServiceCallDocumentAudit' => '\\ServiceCallDocumentAudit',
        'ReturnMaterialAuthorizationStatusCodeKey' => '\\ReturnMaterialAuthorizationStatusCodeKey',
        'ServiceLineDetailKey' => '\\ServiceLineDetailKey',
        'ArrayOfReturnMaterialAuthorizationLine' => '\\ArrayOfReturnMaterialAuthorizationLine',
        'ReturnMaterialAuthorizationLine' => '\\ReturnMaterialAuthorizationLine',
        'ArrayOfReturnMaterialAuthorizationDistribution' => '\\ArrayOfReturnMaterialAuthorizationDistribution',
        'ReturnMaterialAuthorizationDistribution' => '\\ReturnMaterialAuthorizationDistribution',
        'Distribution' => '\\Distribution',
        'DistributionTypeKey' => '\\DistributionTypeKey',
        'ArrayOfReturnMaterialAuthorizationLineLot' => '\\ArrayOfReturnMaterialAuthorizationLineLot',
        'ReturnMaterialAuthorizationLineLot' => '\\ReturnMaterialAuthorizationLineLot',
        'ReturnMaterialAuthorizationReasonCodeKey' => '\\ReturnMaterialAuthorizationReasonCodeKey',
        'ReturnMaterialAuthorizationLineRepair' => '\\ReturnMaterialAuthorizationLineRepair',
        'ReturnMaterialAuthorizationLineReplacement' => '\\ReturnMaterialAuthorizationLineReplacement',
        'ReturnMaterialAuthorizationReturnToAddress' => '\\ReturnMaterialAuthorizationReturnToAddress',
        'ServiceAddress' => '\\ServiceAddress',
        'ReturnMaterialAuthorizationShipToAddress' => '\\ReturnMaterialAuthorizationShipToAddress',
        'ReturnMaterialAuthorizationTypeKey' => '\\ReturnMaterialAuthorizationTypeKey',
        'ArrayOfReturnMaterialAuthorizationLineSerial' => '\\ArrayOfReturnMaterialAuthorizationLineSerial',
        'ReturnMaterialAuthorizationLineSerial' => '\\ReturnMaterialAuthorizationLineSerial',
        'ArrayOfServiceCallDocumentAudit' => '\\ArrayOfServiceCallDocumentAudit',
        'ArrayOfServiceDistribution' => '\\ArrayOfServiceDistribution',
        'ServiceDistribution' => '\\ServiceDistribution',
        'ServiceCharge' => '\\ServiceCharge',
        'ServiceTypeKey' => '\\ServiceTypeKey',
        'ServiceCallShipToAddress' => '\\ServiceCallShipToAddress',
        'ArrayOfServiceQuoteAdditionalChargeLine' => '\\ArrayOfServiceQuoteAdditionalChargeLine',
        'ServiceQuoteAdditionalChargeLine' => '\\ServiceQuoteAdditionalChargeLine',
        'ArrayOfServiceEquipmentCode' => '\\ArrayOfServiceEquipmentCode',
        'ArrayOfServiceQuoteExpenseLine' => '\\ArrayOfServiceQuoteExpenseLine',
        'ServiceQuoteExpenseLine' => '\\ServiceQuoteExpenseLine',
        'ArrayOfServiceQuoteLaborLine' => '\\ArrayOfServiceQuoteLaborLine',
        'ServiceQuoteLaborLine' => '\\ServiceQuoteLaborLine',
        'ArrayOfServiceQuotePartLine' => '\\ArrayOfServiceQuotePartLine',
        'ServiceQuotePartLine' => '\\ServiceQuotePartLine',
        'ServiceQuoteCriteria' => '\\ServiceQuoteCriteria',
        'ServiceCallDocumentCriteria' => '\\ServiceCallDocumentCriteria',
        'ServiceDocumentCriteria' => '\\ServiceDocumentCriteria',
        'ReturnMaterialAuthorizationCriteria' => '\\ReturnMaterialAuthorizationCriteria',
        'ServiceCallCriteria' => '\\ServiceCallCriteria',
        'ArrayOfServiceQuoteSummary' => '\\ArrayOfServiceQuoteSummary',
        'ServiceQuoteSummary' => '\\ServiceQuoteSummary',
        'ServiceDocumentSummary' => '\\ServiceDocumentSummary',
        'ReturnMaterialAuthorizationSummary' => '\\ReturnMaterialAuthorizationSummary',
        'ServiceCallSummary' => '\\ServiceCallSummary',
        'ArrayOfServiceCallSummary' => '\\ArrayOfServiceCallSummary',
        'ArrayOfReturnMaterialAuthorizationSummary' => '\\ArrayOfReturnMaterialAuthorizationSummary',
        'GLTransaction' => '\\GLTransaction',
        'GLIntercompany' => '\\GLIntercompany',
        'GLTransactionKey' => '\\GLTransactionKey',
        'GLTransactionPostedKey' => '\\GLTransactionPostedKey',
        'ArrayOfGLTransactionLine' => '\\ArrayOfGLTransactionLine',
        'GLTransactionLine' => '\\GLTransactionLine',
        'GLTransactionLineKey' => '\\GLTransactionLineKey',
        'GLOriginatingDocumentLine' => '\\GLOriginatingDocumentLine',
        'GLTax' => '\\GLTax',
        'GLOriginatingDocument' => '\\GLOriginatingDocument',
        'SourceDocumentKey' => '\\SourceDocumentKey',
        'GLFixedAllocationAccount' => '\\GLFixedAllocationAccount',
        'GLFinancialAccount' => '\\GLFinancialAccount',
        'GLAccount' => '\\GLAccount',
        'GLUnitAccount' => '\\GLUnitAccount',
        'GLPostingAccount' => '\\GLPostingAccount',
        'ArrayOfGLAccountCurrency' => '\\ArrayOfGLAccountCurrency',
        'GLAccountCurrency' => '\\GLAccountCurrency',
        'GLAccountCurrencyKey' => '\\GLAccountCurrencyKey',
        'GLAccountCategoryKey' => '\\GLAccountCategoryKey',
        'GLVariableAllocationAccount' => '\\GLVariableAllocationAccount',
        'ArrayOfGLVariableAllocationDistributionAccount' => '\\ArrayOfGLVariableAllocationDistributionAccount',
        'GLVariableAllocationDistributionAccount' => '\\GLVariableAllocationDistributionAccount',
        'ArrayOfGLVariableAllocationBreakdownAccount' => '\\ArrayOfGLVariableAllocationBreakdownAccount',
        'GLVariableAllocationBreakdownAccount' => '\\GLVariableAllocationBreakdownAccount',
        'GLVariableAllocationBreakdownAccountKey' => '\\GLVariableAllocationBreakdownAccountKey',
        'GLAllocationDistributionAccountKey' => '\\GLAllocationDistributionAccountKey',
        'ArrayOfGLFixedAllocationDistributionAccount' => '\\ArrayOfGLFixedAllocationDistributionAccount',
        'GLFixedAllocationDistributionAccount' => '\\GLFixedAllocationDistributionAccount',
        'GLTransactionCriteria' => '\\GLTransactionCriteria',
        'ArrayOfGLTransactionSummary' => '\\ArrayOfGLTransactionSummary',
        'GLTransactionSummary' => '\\GLTransactionSummary',
        'ArrayOfGLAccountCategory' => '\\ArrayOfGLAccountCategory',
        'GLAccountCategory' => '\\GLAccountCategory',
        'GLPostingAccountCriteria' => '\\GLPostingAccountCriteria',
        'GLAccountCriteriaBase' => '\\GLAccountCriteriaBase',
        'GLAccountCriteria' => '\\GLAccountCriteria',
        'GLFixedAllocationAccountCriteria' => '\\GLFixedAllocationAccountCriteria',
        'GLUnitAccountCriteria' => '\\GLUnitAccountCriteria',
        'GLVariableAllocationAccountCriteria' => '\\GLVariableAllocationAccountCriteria',
        'ArrayOfGLPostingAccountSummary' => '\\ArrayOfGLPostingAccountSummary',
        'GLPostingAccountSummary' => '\\GLPostingAccountSummary',
        'GLAccountSummaryBase' => '\\GLAccountSummaryBase',
        'GLAccountSummary' => '\\GLAccountSummary',
        'GLVariableAllocationAccountSummary' => '\\GLVariableAllocationAccountSummary',
        'GLFixedAllocationAccountSummary' => '\\GLFixedAllocationAccountSummary',
        'GLUnitAccountSummary' => '\\GLUnitAccountSummary',
        'ArrayOfGLUnitAccountSummary' => '\\ArrayOfGLUnitAccountSummary',
        'ArrayOfGLAccountSummary' => '\\ArrayOfGLAccountSummary',
        'ArrayOfGLFixedAllocationAccountSummary' => '\\ArrayOfGLFixedAllocationAccountSummary',
        'ArrayOfGLVariableAllocationAccountSummary' => '\\ArrayOfGLVariableAllocationAccountSummary',
        'ApplicantKey' => '\\ApplicantKey',
        'Applicant' => '\\Applicant',
        'ApplicantAddress' => '\\ApplicantAddress',
        'ApplicationColor' => '\\ApplicationColor',
        'ArrayOfApplicantApplication' => '\\ArrayOfApplicantApplication',
        'ApplicantApplication' => '\\ApplicantApplication',
        'ApplicantSequenceKey' => '\\ApplicantSequenceKey',
        'SequenceKey' => '\\SequenceKey',
        'DepartmentKey' => '\\DepartmentKey',
        'DivisionKey' => '\\DivisionKey',
        'PositionKey' => '\\PositionKey',
        'ApplicationReferenceInformation' => '\\ApplicationReferenceInformation',
        'ApplicationRejectionInformation' => '\\ApplicationRejectionInformation',
        'HRRequisitionNumberKey' => '\\HRRequisitionNumberKey',
        'ArrayOfApplicantInterview' => '\\ArrayOfApplicantInterview',
        'ApplicantInterview' => '\\ApplicantInterview',
        'ApplicantInterviewTypeKey' => '\\ApplicantInterviewTypeKey',
        'ApplyDateKey' => '\\ApplyDateKey',
        'InterviewTypeKey' => '\\InterviewTypeKey',
        'ArrayOfApplicantInterviewItem' => '\\ArrayOfApplicantInterviewItem',
        'ApplicantInterviewItem' => '\\ApplicantInterviewItem',
        'ArrayOfApplicantWorkHistory' => '\\ArrayOfApplicantWorkHistory',
        'ApplicantWorkHistory' => '\\ApplicantWorkHistory',
        'ApplicantWorkHistoryKey' => '\\ApplicantWorkHistoryKey',
        'ArrayOfApplicantReference' => '\\ArrayOfApplicantReference',
        'ApplicantReference' => '\\ApplicantReference',
        'ApplicantReferenceKey' => '\\ApplicantReferenceKey',
        'ArrayOfApplicantEducation' => '\\ArrayOfApplicantEducation',
        'ApplicantEducation' => '\\ApplicantEducation',
        'ArrayOfApplicantSkill' => '\\ArrayOfApplicantSkill',
        'ApplicantSkill' => '\\ApplicantSkill',
        'ApplicantSkillKey' => '\\ApplicantSkillKey',
        'SkillKey' => '\\SkillKey',
        'ArrayOfApplicantTest' => '\\ArrayOfApplicantTest',
        'ApplicantTest' => '\\ApplicantTest',
        'ApplicantTestKey' => '\\ApplicantTestKey',
        'TestKey' => '\\TestKey',
        'ApplicantCriteria' => '\\ApplicantCriteria',
        'ArrayOfApplicantSummary' => '\\ArrayOfApplicantSummary',
        'ApplicantSummary' => '\\ApplicantSummary',
        'ApplicantApplicationCriteria' => '\\ApplicantApplicationCriteria',
        'ArrayOfApplicantApplicationSummary' => '\\ArrayOfApplicantApplicationSummary',
        'ApplicantApplicationSummary' => '\\ApplicantApplicationSummary',
        'ApplicantEducationCriteria' => '\\ApplicantEducationCriteria',
        'ApplicantReferenceCriteria' => '\\ApplicantReferenceCriteria',
        'ArrayOfApplicantReferenceSummary' => '\\ArrayOfApplicantReferenceSummary',
        'ApplicantReferenceSummary' => '\\ApplicantReferenceSummary',
        'ApplicantInterviewCriteria' => '\\ApplicantInterviewCriteria',
        'ArrayOfApplicantInterviewSummary' => '\\ArrayOfApplicantInterviewSummary',
        'ApplicantInterviewSummary' => '\\ApplicantInterviewSummary',
        'ApplicantTestCriteria' => '\\ApplicantTestCriteria',
        'ApplicantWorkHistoryCriteria' => '\\ApplicantWorkHistoryCriteria',
        'ApplicantSkillCriteria' => '\\ApplicantSkillCriteria',
        'HRRequisition' => '\\HRRequisition',
        'HRRequisitionAdvertisingList' => '\\HRRequisitionAdvertisingList',
        'ManagerKey' => '\\ManagerKey',
        'HRRequisitionCosts' => '\\HRRequisitionCosts',
        'SupervisorKey' => '\\SupervisorKey',
        'HRRequisitionCriteria' => '\\HRRequisitionCriteria',
        'ArrayOfHRRequisitionSummary' => '\\ArrayOfHRRequisitionSummary',
        'HRRequisitionSummary' => '\\HRRequisitionSummary',
        'Skill' => '\\Skill',
        'Compensation' => '\\Compensation',
        'SkillCriteria' => '\\SkillCriteria',
        'ArrayOfSkill' => '\\ArrayOfSkill',
        'SkillSetKey' => '\\SkillSetKey',
        'SkillSet' => '\\SkillSet',
        'SkillSetCriteria' => '\\SkillSetCriteria',
        'ArrayOfSkillSetSummary' => '\\ArrayOfSkillSetSummary',
        'SkillSetSummary' => '\\SkillSetSummary',
        'Employee' => '\\Employee',
        'ArrayOfEmployeeAddress' => '\\ArrayOfEmployeeAddress',
        'EmployeeAddress' => '\\EmployeeAddress',
        'EmployeeAddressKey' => '\\EmployeeAddressKey',
        'EmployeeClassKey' => '\\EmployeeClassKey',
        'Name' => '\\Name',
        'PrimaryPayCodeKey' => '\\PrimaryPayCodeKey',
        'Review' => '\\Review',
        'SUTAStateKey' => '\\SUTAStateKey',
        'SickTime' => '\\SickTime',
        'TimeAwayFromWork' => '\\TimeAwayFromWork',
        'Vacation' => '\\Vacation',
        'Spouse' => '\\Spouse',
        'UnionKey' => '\\UnionKey',
        'WorkersCompensationKey' => '\\WorkersCompensationKey',
        'EmployeeCriteria' => '\\EmployeeCriteria',
        'ArrayOfEmployeeSummary' => '\\ArrayOfEmployeeSummary',
        'EmployeeSummary' => '\\EmployeeSummary',
        'EmployeeAddressCriteria' => '\\EmployeeAddressCriteria',
        'ArrayOfEmployeeAddressSummary' => '\\ArrayOfEmployeeAddressSummary',
        'EmployeeAddressSummary' => '\\EmployeeAddressSummary',
        'EmployeePayCodeKey' => '\\EmployeePayCodeKey',
        'PayCodeKey' => '\\PayCodeKey',
        'EmployeePayCode' => '\\EmployeePayCode',
        'EmployeeApplicableTaxes' => '\\EmployeeApplicableTaxes',
        'EmployeeFlatTaxRates' => '\\EmployeeFlatTaxRates',
        'EmployeePayStep' => '\\EmployeePayStep',
        'PayStepKey' => '\\PayStepKey',
        'EmployeeW2Boxes' => '\\EmployeeW2Boxes',
        'EmployeePayCodeCriteria' => '\\EmployeePayCodeCriteria',
        'ArrayOfEmployeePayCodeSummary' => '\\ArrayOfEmployeePayCodeSummary',
        'EmployeePayCodeSummary' => '\\EmployeePayCodeSummary',
        'WarehouseCriteria' => '\\WarehouseCriteria',
        'ArrayOfWarehouseSummary' => '\\ArrayOfWarehouseSummary',
        'WarehouseSummary' => '\\WarehouseSummary',
        'ItemCriteria' => '\\ItemCriteria',
        'ItemCriteriaBase' => '\\ItemCriteriaBase',
        'ArrayOfItemSummary' => '\\ArrayOfItemSummary',
        'ItemSummary' => '\\ItemSummary',
        'ItemSummaryBase' => '\\ItemSummaryBase',
        'ItemClassKey' => '\\ItemClassKey',
        'InventoriedItemCriteria' => '\\InventoriedItemCriteria',
        'ArrayOfInventoriedItemSummary' => '\\ArrayOfInventoriedItemSummary',
        'InventoriedItemSummary' => '\\InventoriedItemSummary',
        'FeeCriteria' => '\\FeeCriteria',
        'ArrayOfFeeSummary' => '\\ArrayOfFeeSummary',
        'FeeSummary' => '\\FeeSummary',
        'ServiceCriteria' => '\\ServiceCriteria',
        'ArrayOfServiceSummary' => '\\ArrayOfServiceSummary',
        'ServiceSummary' => '\\ServiceSummary',
        'PricingCriteria' => '\\PricingCriteria',
        'ArrayOfPricingSummary' => '\\ArrayOfPricingSummary',
        'PricingSummary' => '\\PricingSummary',
        'PricingKey' => '\\PricingKey',
        'UofMScheduleCriteria' => '\\UofMScheduleCriteria',
        'ArrayOfUofMScheduleSummary' => '\\ArrayOfUofMScheduleSummary',
        'UofMScheduleSummary' => '\\UofMScheduleSummary',
        'UofMScheduleKey' => '\\UofMScheduleKey',
        'ItemVendorCriteria' => '\\ItemVendorCriteria',
        'ArrayOfItemVendorSummary' => '\\ArrayOfItemVendorSummary',
        'ItemVendorSummary' => '\\ItemVendorSummary',
        'ItemVendorKey' => '\\ItemVendorKey',
        'ItemWarehouseCriteria' => '\\ItemWarehouseCriteria',
        'ArrayOfItemWarehouseSummary' => '\\ArrayOfItemWarehouseSummary',
        'ItemWarehouseSummary' => '\\ItemWarehouseSummary',
        'BuyerKey' => '\\BuyerKey',
        'ItemWarehouseKey' => '\\ItemWarehouseKey',
        'PlannerKey' => '\\PlannerKey',
        'ItemCurrencyCriteria' => '\\ItemCurrencyCriteria',
        'ArrayOfItemCurrency' => '\\ArrayOfItemCurrency',
        'ItemCurrency' => '\\ItemCurrency',
        'ItemCurrencyKey' => '\\ItemCurrencyKey',
        'PriceLevelCriteria' => '\\PriceLevelCriteria',
        'ArrayOfPriceLevel' => '\\ArrayOfPriceLevel',
        'PriceLevel' => '\\PriceLevel',
        'ItemClassCriteria' => '\\ItemClassCriteria',
        'ArrayOfItemClass' => '\\ArrayOfItemClass',
        'ItemClass' => '\\ItemClass',
        'InventoryAdjustmentCriteria' => '\\InventoryAdjustmentCriteria',
        'InventoryCriteria' => '\\InventoryCriteria',
        'ArrayOfInventoryAdjustmentSummary' => '\\ArrayOfInventoryAdjustmentSummary',
        'InventoryAdjustmentSummary' => '\\InventoryAdjustmentSummary',
        'InventorySummary' => '\\InventorySummary',
        'InventoryKey' => '\\InventoryKey',
        'InventoryVarianceCriteria' => '\\InventoryVarianceCriteria',
        'ArrayOfInventoryVarianceSummary' => '\\ArrayOfInventoryVarianceSummary',
        'InventoryVarianceSummary' => '\\InventoryVarianceSummary',
        'InventoryTransferCriteria' => '\\InventoryTransferCriteria',
        'ArrayOfInventoryTransferSummary' => '\\ArrayOfInventoryTransferSummary',
        'InventoryTransferSummary' => '\\InventoryTransferSummary',
        'Warehouse' => '\\Warehouse',
        'ArrayOfWarehouseBin' => '\\ArrayOfWarehouseBin',
        'WarehouseBin' => '\\WarehouseBin',
        'WarehouseBinKey' => '\\WarehouseBinKey',
        'Item' => '\\Item',
        'Fee' => '\\Fee',
        'InventoriedItem' => '\\InventoriedItem',
        'SalesItem' => '\\SalesItem',
        'LotCategoryKey' => '\\LotCategoryKey',
        'ArrayOfSalesItemWarehouse' => '\\ArrayOfSalesItemWarehouse',
        'SalesItemWarehouse' => '\\SalesItemWarehouse',
        'ArrayOfSalesItemWarehouseBin' => '\\ArrayOfSalesItemWarehouseBin',
        'SalesItemWarehouseBin' => '\\SalesItemWarehouseBin',
        'ItemWarehouseBinKey' => '\\ItemWarehouseBinKey',
        'Kit' => '\\Kit',
        'ArrayOfKitComponent' => '\\ArrayOfKitComponent',
        'KitComponent' => '\\KitComponent',
        'KitComponentKey' => '\\KitComponentKey',
        'Service' => '\\Service',
        'Pricing' => '\\Pricing',
        'ArrayOfPricingDetail' => '\\ArrayOfPricingDetail',
        'PricingDetail' => '\\PricingDetail',
        'PricingDetailKey' => '\\PricingDetailKey',
        'PricingDetailPrice' => '\\PricingDetailPrice',
        'RoundingType' => '\\RoundingType',
        'UofMSchedule' => '\\UofMSchedule',
        'ArrayOfUofMScheduleDetail' => '\\ArrayOfUofMScheduleDetail',
        'UofMScheduleDetail' => '\\UofMScheduleDetail',
        'UofMScheduleDetailKey' => '\\UofMScheduleDetailKey',
        'ItemVendor' => '\\ItemVendor',
        'ItemWarehouse' => '\\ItemWarehouse',
        'LandedCostGroupKey' => '\\LandedCostGroupKey',
        'Planning' => '\\Planning',
        'InventoryAdjustment' => '\\InventoryAdjustment',
        'InventoryBase' => '\\InventoryBase',
        'ArrayOfInventoryAdjustmentLine' => '\\ArrayOfInventoryAdjustmentLine',
        'InventoryAdjustmentLine' => '\\InventoryAdjustmentLine',
        'InventoryLine' => '\\InventoryLine',
        'InventoryLineBase' => '\\InventoryLineBase',
        'InventoryLineKey' => '\\InventoryLineKey',
        'ArrayOfInventoryBin' => '\\ArrayOfInventoryBin',
        'InventoryBin' => '\\InventoryBin',
        'InventoryBinBase' => '\\InventoryBinBase',
        'InventoryBinKey' => '\\InventoryBinKey',
        'ArrayOfInventoryLot' => '\\ArrayOfInventoryLot',
        'InventoryLot' => '\\InventoryLot',
        'InventoryLotBase' => '\\InventoryLotBase',
        'InventoryLotKey' => '\\InventoryLotKey',
        'ArrayOfInventorySerial' => '\\ArrayOfInventorySerial',
        'InventorySerial' => '\\InventorySerial',
        'InventorySerialBase' => '\\InventorySerialBase',
        'InventorySerialKey' => '\\InventorySerialKey',
        'InventoryVariance' => '\\InventoryVariance',
        'ArrayOfInventoryVarianceLine' => '\\ArrayOfInventoryVarianceLine',
        'InventoryVarianceLine' => '\\InventoryVarianceLine',
        'InventoryTransfer' => '\\InventoryTransfer',
        'ArrayOfInventoryTransferLine' => '\\ArrayOfInventoryTransferLine',
        'InventoryTransferLine' => '\\InventoryTransferLine',
        'ArrayOfInventoryTransferBin' => '\\ArrayOfInventoryTransferBin',
        'InventoryTransferBin' => '\\InventoryTransferBin',
        'ArrayOfInventoryTransferLot' => '\\ArrayOfInventoryTransferLot',
        'InventoryTransferLot' => '\\InventoryTransferLot',
        'ArrayOfInventoryTransferSerial' => '\\ArrayOfInventoryTransferSerial',
        'InventoryTransferSerial' => '\\InventoryTransferSerial',
        'UofMScheduleChangedKeyCriteria' => '\\UofMScheduleChangedKeyCriteria',
        'ArrayOfChangedUofMScheduleKey' => '\\ArrayOfChangedUofMScheduleKey',
        'ChangedUofMScheduleKey' => '\\ChangedUofMScheduleKey',
        'PriceLevelChangedKeyCriteria' => '\\PriceLevelChangedKeyCriteria',
        'ArrayOfChangedPriceLevelKey' => '\\ArrayOfChangedPriceLevelKey',
        'ChangedPriceLevelKey' => '\\ChangedPriceLevelKey',
        'PricingChangedKeyCriteria' => '\\PricingChangedKeyCriteria',
        'ArrayOfChangedPricingKey' => '\\ArrayOfChangedPricingKey',
        'ChangedPricingKey' => '\\ChangedPricingKey',
        'ItemChangedKeyCriteria' => '\\ItemChangedKeyCriteria',
        'ArrayOfChangedItemKey' => '\\ArrayOfChangedItemKey',
        'ChangedItemKey' => '\\ChangedItemKey',
        'PlannedOrderKey' => '\\PlannedOrderKey',
        'PlannedOrder' => '\\PlannedOrder',
        'ArrayOfPlannedOrderItem' => '\\ArrayOfPlannedOrderItem',
        'PlannedOrderItem' => '\\PlannedOrderItem',
        'PlannedOrderItemExceptions' => '\\PlannedOrderItemExceptions',
        'PlannedOrderCriteria' => '\\PlannedOrderCriteria',
        'PlannedOrderCriteriaBase' => '\\PlannedOrderCriteriaBase',
        'ArrayOfPlannedOrderSummary' => '\\ArrayOfPlannedOrderSummary',
        'PlannedOrderSummary' => '\\PlannedOrderSummary',
        'VendorPlannedOrder' => '\\VendorPlannedOrder',
        'VendorPlannedOrderCriteria' => '\\VendorPlannedOrderCriteria',
        'ArrayOfVendorPlannedOrderSummary' => '\\ArrayOfVendorPlannedOrderSummary',
        'VendorPlannedOrderSummary' => '\\VendorPlannedOrderSummary',
        'ManufacturingOrderDocumentKey' => '\\ManufacturingOrderDocumentKey',
        'ManufacturingOrder' => '\\ManufacturingOrder',
        'ManufacturingOrderDocument' => '\\ManufacturingOrderDocument',
        'ArrayOfManufacturingOrderPickListItem' => '\\ArrayOfManufacturingOrderPickListItem',
        'ManufacturingOrderPickListItem' => '\\ManufacturingOrderPickListItem',
        'ArrayOfManufacturingOrderRouteStep' => '\\ArrayOfManufacturingOrderRouteStep',
        'ManufacturingOrderRouteStep' => '\\ManufacturingOrderRouteStep',
        'ManufacturingOrderServiceItem' => '\\ManufacturingOrderServiceItem',
        'ManufacturingOrderCriteria' => '\\ManufacturingOrderCriteria',
        'ManufacturingOrderDocumentCriteria' => '\\ManufacturingOrderDocumentCriteria',
        'ArrayOfManufacturingOrderSummary' => '\\ArrayOfManufacturingOrderSummary',
        'ManufacturingOrderSummary' => '\\ManufacturingOrderSummary',
        'ManufacturingOrderDocumentSummary' => '\\ManufacturingOrderDocumentSummary',
        'VendorManufacturingOrder' => '\\VendorManufacturingOrder',
        'VendorManufacturingOrderCriteria' => '\\VendorManufacturingOrderCriteria',
        'ArrayOfVendorManufacturingOrderSummary' => '\\ArrayOfVendorManufacturingOrderSummary',
        'VendorManufacturingOrderSummary' => '\\VendorManufacturingOrderSummary',
        'ProjectMiscellaneousLogCriteria' => '\\ProjectMiscellaneousLogCriteria',
        'ArrayOfProjectMiscellaneousLogSummary' => '\\ArrayOfProjectMiscellaneousLogSummary',
        'ProjectMiscellaneousLogSummary' => '\\ProjectMiscellaneousLogSummary',
        'ProjectMiscellaneousLogKey' => '\\ProjectMiscellaneousLogKey',
        'MiscellaneousKey' => '\\MiscellaneousKey',
        'ProjectBudgetCriteria' => '\\ProjectBudgetCriteria',
        'ArrayOfProjectBudgetSummary' => '\\ArrayOfProjectBudgetSummary',
        'ProjectBudgetSummary' => '\\ProjectBudgetSummary',
        'ProjectBudgetKey' => '\\ProjectBudgetKey',
        'CostCategoryKey' => '\\CostCategoryKey',
        'ProjectKey' => '\\ProjectKey',
        'ProjectChangeOrderCriteria' => '\\ProjectChangeOrderCriteria',
        'ArrayOfProjectChangeOrderSummary' => '\\ArrayOfProjectChangeOrderSummary',
        'ProjectChangeOrderSummary' => '\\ProjectChangeOrderSummary',
        'ProjectChangeOrderKey' => '\\ProjectChangeOrderKey',
        'ProjectContractKey' => '\\ProjectContractKey',
        'ProjectContractCriteria' => '\\ProjectContractCriteria',
        'ArrayOfProjectContractSummary' => '\\ArrayOfProjectContractSummary',
        'ProjectContractSummary' => '\\ProjectContractSummary',
        'ProjectClassKey' => '\\ProjectClassKey',
        'ProjectCriteria' => '\\ProjectCriteria',
        'ArrayOfProjectSummary' => '\\ArrayOfProjectSummary',
        'ProjectSummary' => '\\ProjectSummary',
        'ProjectTimesheetCriteria' => '\\ProjectTimesheetCriteria',
        'ArrayOfProjectTimesheetSummary' => '\\ArrayOfProjectTimesheetSummary',
        'ProjectTimesheetSummary' => '\\ProjectTimesheetSummary',
        'ProjectTimesheetKey' => '\\ProjectTimesheetKey',
        'ProjectEmployeeExpenseCriteria' => '\\ProjectEmployeeExpenseCriteria',
        'ArrayOfProjectEmployeeExpenseSummary' => '\\ArrayOfProjectEmployeeExpenseSummary',
        'ProjectEmployeeExpenseSummary' => '\\ProjectEmployeeExpenseSummary',
        'ProjectEmployeeExpenseKey' => '\\ProjectEmployeeExpenseKey',
        'ProjectMiscellaneousLog' => '\\ProjectMiscellaneousLog',
        'ProjectHeaderBase' => '\\ProjectHeaderBase',
        'ProjectTimesheet' => '\\ProjectTimesheet',
        'ArrayOfProjectTimesheetDistribution' => '\\ArrayOfProjectTimesheetDistribution',
        'ProjectTimesheetDistribution' => '\\ProjectTimesheetDistribution',
        'ProjectDistributionBase' => '\\ProjectDistributionBase',
        'ProjectMiscellaneousLogDistribution' => '\\ProjectMiscellaneousLogDistribution',
        'ProjectMiscellaneousLogDistributionKey' => '\\ProjectMiscellaneousLogDistributionKey',
        'ProjectEmployeeExpenseDistribution' => '\\ProjectEmployeeExpenseDistribution',
        'ProjectEmployeeExpenseDistributionKey' => '\\ProjectEmployeeExpenseDistributionKey',
        'ProjectTimesheetDistributionKey' => '\\ProjectTimesheetDistributionKey',
        'ArrayOfProjectTimesheetLine' => '\\ArrayOfProjectTimesheetLine',
        'ProjectTimesheetLine' => '\\ProjectTimesheetLine',
        'ProjectLineBase' => '\\ProjectLineBase',
        'ProjectMiscellaneousLogLine' => '\\ProjectMiscellaneousLogLine',
        'ProjectBillingFull' => '\\ProjectBillingFull',
        'ProjectBilling' => '\\ProjectBilling',
        'ProjectMiscellaneousLogLineKey' => '\\ProjectMiscellaneousLogLineKey',
        'ProjectEmployeeExpenseLine' => '\\ProjectEmployeeExpenseLine',
        'ProjectEmployeeExpenseLineKey' => '\\ProjectEmployeeExpenseLineKey',
        'ArrayOfProjectEmployeeExpenseLineTax' => '\\ArrayOfProjectEmployeeExpenseLineTax',
        'ProjectEmployeeExpenseLineTax' => '\\ProjectEmployeeExpenseLineTax',
        'ProjectEmployeeExpenseLineTaxKey' => '\\ProjectEmployeeExpenseLineTaxKey',
        'PayrollDepartmentKey' => '\\PayrollDepartmentKey',
        'JobTitleKey' => '\\JobTitleKey',
        'ProjectTimesheetLineKey' => '\\ProjectTimesheetLineKey',
        'ProjectEmployeeExpense' => '\\ProjectEmployeeExpense',
        'ArrayOfProjectEmployeeExpenseDistribution' => '\\ArrayOfProjectEmployeeExpenseDistribution',
        'ArrayOfProjectEmployeeExpenseLine' => '\\ArrayOfProjectEmployeeExpenseLine',
        'ProjectPayment' => '\\ProjectPayment',
        'ProjectCashDetail' => '\\ProjectCashDetail',
        'CashDetail' => '\\CashDetail',
        'CheckDetail' => '\\CheckDetail',
        'PaymentCardDetail' => '\\PaymentCardDetail',
        'ArrayOfProjectMiscellaneousLogDistribution' => '\\ArrayOfProjectMiscellaneousLogDistribution',
        'ArrayOfProjectMiscellaneousLogLine' => '\\ArrayOfProjectMiscellaneousLogLine',
        'ProjectBudget' => '\\ProjectBudget',
        'ProjectBudgetActual' => '\\ProjectBudgetActual',
        'ProjectBudgetBaseline' => '\\ProjectBudgetBaseline',
        'ProjectBudgetBase' => '\\ProjectBudgetBase',
        'ProjectForecast' => '\\ProjectForecast',
        'ProjectContractBaseline' => '\\ProjectContractBaseline',
        'ProjectContractForecast' => '\\ProjectContractForecast',
        'ProjectBudgetForecast' => '\\ProjectBudgetForecast',
        'ProjectBudgetBilled' => '\\ProjectBudgetBilled',
        'ProjectBilledBase' => '\\ProjectBilledBase',
        'ProjectContractBilled' => '\\ProjectContractBilled',
        'ProjectBilled' => '\\ProjectBilled',
        'ProjectEquipmentRateTableKey' => '\\ProjectEquipmentRateTableKey',
        'ProjectLaborRateTableKey' => '\\ProjectLaborRateTableKey',
        'ProjectBudgetPosted' => '\\ProjectBudgetPosted',
        'ProjectPostedBase' => '\\ProjectPostedBase',
        'ProjectAmount' => '\\ProjectAmount',
        'ProjectPosted' => '\\ProjectPosted',
        'ProjectPostedAmount' => '\\ProjectPostedAmount',
        'ProjectUnpostedBase' => '\\ProjectUnpostedBase',
        'ProjectContractUnposted' => '\\ProjectContractUnposted',
        'ProjectUnposted' => '\\ProjectUnposted',
        'ProjectContractActual' => '\\ProjectContractActual',
        'ProjectBudgetUncommitted' => '\\ProjectBudgetUncommitted',
        'ProjectBudgetUnposted' => '\\ProjectBudgetUnposted',
        'ProjectChangeOrder' => '\\ProjectChangeOrder',
        'ArrayOfProjectChangeOrderBudget' => '\\ArrayOfProjectChangeOrderBudget',
        'ProjectChangeOrderBudget' => '\\ProjectChangeOrderBudget',
        'ProjectChangeOrderBudgetKey' => '\\ProjectChangeOrderBudgetKey',
        'ProjectChangeOrderPayCodeHourlyKey' => '\\ProjectChangeOrderPayCodeHourlyKey',
        'ProjectChangeOrderPayCodeSalaryKey' => '\\ProjectChangeOrderPayCodeSalaryKey',
        'ArrayOfProjectChangeOrderFee' => '\\ArrayOfProjectChangeOrderFee',
        'ProjectChangeOrderFee' => '\\ProjectChangeOrderFee',
        'ProjectChangeOrderFeeKey' => '\\ProjectChangeOrderFeeKey',
        'ArrayOfProjectChangeOrderFeeLine' => '\\ArrayOfProjectChangeOrderFeeLine',
        'ProjectChangeOrderFeeLine' => '\\ProjectChangeOrderFeeLine',
        'ProjectFeeKey' => '\\ProjectFeeKey',
        'ProjectChangeOrderFeeLineKey' => '\\ProjectChangeOrderFeeLineKey',
        'ArrayOfProjectChangeOrderFeeLineSchedule' => '\\ArrayOfProjectChangeOrderFeeLineSchedule',
        'ProjectChangeOrderFeeLineSchedule' => '\\ProjectChangeOrderFeeLineSchedule',
        'ProjectChangeOrderFeeLineScheduleKey' => '\\ProjectChangeOrderFeeLineScheduleKey',
        'ProjectContract' => '\\ProjectContract',
        'ArrayOfProjectContractAccountType' => '\\ArrayOfProjectContractAccountType',
        'ProjectContractAccountType' => '\\ProjectContractAccountType',
        'ProjectContractAccountTypeKey' => '\\ProjectContractAccountTypeKey',
        'ArrayOfProjectContractBillingCycle' => '\\ArrayOfProjectContractBillingCycle',
        'ProjectContractBillingCycle' => '\\ProjectContractBillingCycle',
        'ProjectContractBillingCycleKey' => '\\ProjectContractBillingCycleKey',
        'Project' => '\\Project',
        'ArrayOfProjectAccountType' => '\\ArrayOfProjectAccountType',
        'ProjectAccountType' => '\\ProjectAccountType',
        'ProjectAccountTypeKey' => '\\ProjectAccountTypeKey',
        'ProjectActual' => '\\ProjectActual',
        'ProjectBaseline' => '\\ProjectBaseline',
        'ArrayOfProjectBillingCycle' => '\\ArrayOfProjectBillingCycle',
        'ProjectBillingCycle' => '\\ProjectBillingCycle',
        'ProjectBillingCycleKey' => '\\ProjectBillingCycleKey',
        'ArrayOfProjectBudget' => '\\ArrayOfProjectBudget',
        'ProjectDepartmentKey' => '\\ProjectDepartmentKey',
        'ArrayOfProjectEquipmentItem' => '\\ArrayOfProjectEquipmentItem',
        'ProjectEquipmentItem' => '\\ProjectEquipmentItem',
        'ProjectEquipmentItemKey' => '\\ProjectEquipmentItemKey',
        'ProjectEquipmentKey' => '\\ProjectEquipmentKey',
        'ArrayOfProjectFee' => '\\ArrayOfProjectFee',
        'ProjectFee' => '\\ProjectFee',
        'ProjectFeeItemKey' => '\\ProjectFeeItemKey',
        'ArrayOfProjectFeeSchedule' => '\\ArrayOfProjectFeeSchedule',
        'ProjectFeeSchedule' => '\\ProjectFeeSchedule',
        'ProjectFeeScheduleKey' => '\\ProjectFeeScheduleKey',
        'Vendor' => '\\Vendor',
        'ArrayOfVendorAddress' => '\\ArrayOfVendorAddress',
        'VendorAddress' => '\\VendorAddress',
        'ConstituentAddress' => '\\ConstituentAddress',
        'VendorAddressKey' => '\\VendorAddressKey',
        'VendorClassKey' => '\\VendorClassKey',
        'VendorCreditLimit' => '\\VendorCreditLimit',
        'CreditLimit' => '\\CreditLimit',
        'HistoryOptions' => '\\HistoryOptions',
        'MaximumInvoice' => '\\MaximumInvoice',
        'MaximumWriteoff' => '\\MaximumWriteoff',
        'ProjectAccountingOptions' => '\\ProjectAccountingOptions',
        'CostPlus' => '\\CostPlus',
        'Profit' => '\\Profit',
        'ProfitCalculation' => '\\ProfitCalculation',
        'ProfitFixed' => '\\ProfitFixed',
        'MoneyProfitCalculation' => '\\MoneyProfitCalculation',
        'NoProfit' => '\\NoProfit',
        'ProfitVariable' => '\\ProfitVariable',
        'TotalProfit' => '\\TotalProfit',
        'PercentOfBaseline' => '\\PercentOfBaseline',
        'PercentProfitCalculation' => '\\PercentProfitCalculation',
        'PercentOfActual' => '\\PercentOfActual',
        'FixedPrice' => '\\FixedPrice',
        'TimeAndMaterial' => '\\TimeAndMaterial',
        'MarkupPercentage' => '\\MarkupPercentage',
        'BillingRate' => '\\BillingRate',
        'LanguageKey' => '\\LanguageKey',
        'VendorCriteria' => '\\VendorCriteria',
        'ArrayOfVendorSummary' => '\\ArrayOfVendorSummary',
        'VendorSummary' => '\\VendorSummary',
        'VendorAddressCriteria' => '\\VendorAddressCriteria',
        'ArrayOfVendorAddressSummary' => '\\ArrayOfVendorAddressSummary',
        'VendorAddressSummary' => '\\VendorAddressSummary',
        'PayablesInvoice' => '\\PayablesInvoice',
        'PayablesDebitDocument' => '\\PayablesDebitDocument',
        'PayablesDocument' => '\\PayablesDocument',
        'ArrayOfPayablesDistribution' => '\\ArrayOfPayablesDistribution',
        'PayablesDistribution' => '\\PayablesDistribution',
        'PayablesDistributionKey' => '\\PayablesDistributionKey',
        'PayablesDocumentKey' => '\\PayablesDocumentKey',
        'ArrayOfPayablesTax' => '\\ArrayOfPayablesTax',
        'PayablesTax' => '\\PayablesTax',
        'Tax' => '\\Tax',
        'PayablesTaxKey' => '\\PayablesTaxKey',
        'PayablesMiscellaneousCharge' => '\\PayablesMiscellaneousCharge',
        'PayablesFinanceCharge' => '\\PayablesFinanceCharge',
        'PayablesCreditDocument' => '\\PayablesCreditDocument',
        'PayablesReturn' => '\\PayablesReturn',
        'PayablesPayment' => '\\PayablesPayment',
        'PayablesCashDetail' => '\\PayablesCashDetail',
        'PayablesCreditMemo' => '\\PayablesCreditMemo',
        'PayablesTerms' => '\\PayablesTerms',
        'Terms' => '\\Terms',
        'PayablesDocumentCriteria' => '\\PayablesDocumentCriteria',
        'PayablesDocumentCriteriaBase' => '\\PayablesDocumentCriteriaBase',
        'PayablesMiscellaneousChargeCriteria' => '\\PayablesMiscellaneousChargeCriteria',
        'PayablesFinanceChargeCriteria' => '\\PayablesFinanceChargeCriteria',
        'PayablesCreditMemoCriteria' => '\\PayablesCreditMemoCriteria',
        'PayablesInvoiceCriteria' => '\\PayablesInvoiceCriteria',
        'PayablesReturnCriteria' => '\\PayablesReturnCriteria',
        'ArrayOfPayablesDocumentSummary' => '\\ArrayOfPayablesDocumentSummary',
        'PayablesDocumentSummary' => '\\PayablesDocumentSummary',
        'PayablesDocumentSummaryBase' => '\\PayablesDocumentSummaryBase',
        'PayablesFinanceChargeSummary' => '\\PayablesFinanceChargeSummary',
        'PayablesCreditMemoSummary' => '\\PayablesCreditMemoSummary',
        'PayablesInvoiceSummary' => '\\PayablesInvoiceSummary',
        'PayablesMiscellaneousChargeSummary' => '\\PayablesMiscellaneousChargeSummary',
        'PayablesReturnSummary' => '\\PayablesReturnSummary',
        'ArrayOfPayablesInvoiceSummary' => '\\ArrayOfPayablesInvoiceSummary',
        'ArrayOfPayablesFinanceChargeSummary' => '\\ArrayOfPayablesFinanceChargeSummary',
        'ArrayOfPayablesMiscellaneousChargeSummary' => '\\ArrayOfPayablesMiscellaneousChargeSummary',
        'ArrayOfPayablesReturnSummary' => '\\ArrayOfPayablesReturnSummary',
        'ArrayOfPayablesCreditMemoSummary' => '\\ArrayOfPayablesCreditMemoSummary',
        'PurchaseOrder' => '\\PurchaseOrder',
        'CommentKey' => '\\CommentKey',
        'ArrayOfPurchaseTax' => '\\ArrayOfPurchaseTax',
        'PurchaseTax' => '\\PurchaseTax',
        'PurchaseTaxKey' => '\\PurchaseTaxKey',
        'ArrayOfPurchaseOrderLine' => '\\ArrayOfPurchaseOrderLine',
        'PurchaseOrderLine' => '\\PurchaseOrderLine',
        'ItemTaxScheduleKey' => '\\ItemTaxScheduleKey',
        'PurchaseReceipt' => '\\PurchaseReceipt',
        'ArrayOfPurchaseDistribution' => '\\ArrayOfPurchaseDistribution',
        'PurchaseDistribution' => '\\PurchaseDistribution',
        'PurchaseDistributionKey' => '\\PurchaseDistributionKey',
        'ArrayOfPurchaseReceiptLine' => '\\ArrayOfPurchaseReceiptLine',
        'PurchaseReceiptLine' => '\\PurchaseReceiptLine',
        'ArrayOfPurchaseBinDetail' => '\\ArrayOfPurchaseBinDetail',
        'PurchaseBinDetail' => '\\PurchaseBinDetail',
        'PurchaseBinDetailKey' => '\\PurchaseBinDetailKey',
        'ArrayOfPurchaseLotDetail' => '\\ArrayOfPurchaseLotDetail',
        'PurchaseLotDetail' => '\\PurchaseLotDetail',
        'PurchaseLotDetailKey' => '\\PurchaseLotDetailKey',
        'ArrayOfPurchaseSerialDetail' => '\\ArrayOfPurchaseSerialDetail',
        'PurchaseSerialDetail' => '\\PurchaseSerialDetail',
        'PurchaseSerialDetailKey' => '\\PurchaseSerialDetailKey',
        'ArrayOfPurchaseUserDefined' => '\\ArrayOfPurchaseUserDefined',
        'PurchaseUserDefined' => '\\PurchaseUserDefined',
        'PurchaseUserDefinedKey' => '\\PurchaseUserDefinedKey',
        'PurchaseInvoice' => '\\PurchaseInvoice',
        'ArrayOfPurchaseInvoiceTax' => '\\ArrayOfPurchaseInvoiceTax',
        'PurchaseInvoiceTax' => '\\PurchaseInvoiceTax',
        'ArrayOfPurchaseInvoiceLine' => '\\ArrayOfPurchaseInvoiceLine',
        'PurchaseInvoiceLine' => '\\PurchaseInvoiceLine',
        'ArrayOfPurchaseInvoiceApplyReceipt' => '\\ArrayOfPurchaseInvoiceApplyReceipt',
        'PurchaseInvoiceApplyReceipt' => '\\PurchaseInvoiceApplyReceipt',
        'PurchaseInvoiceApplyReceiptKey' => '\\PurchaseInvoiceApplyReceiptKey',
        'PurchaseOrderCriteria' => '\\PurchaseOrderCriteria',
        'ArrayOfPurchaseOrderSummary' => '\\ArrayOfPurchaseOrderSummary',
        'PurchaseOrderSummary' => '\\PurchaseOrderSummary',
        'PurchaseReceiptCriteria' => '\\PurchaseReceiptCriteria',
        'ArrayOfPurchaseReceiptSummary' => '\\ArrayOfPurchaseReceiptSummary',
        'PurchaseReceiptSummary' => '\\PurchaseReceiptSummary',
        'PurchaseInvoiceCriteria' => '\\PurchaseInvoiceCriteria',
        'ArrayOfPurchaseInvoiceSummary' => '\\ArrayOfPurchaseInvoiceSummary',
        'PurchaseInvoiceSummary' => '\\PurchaseInvoiceSummary',
        'SalespersonChangedKeyCriteria' => '\\SalespersonChangedKeyCriteria',
        'ArrayOfChangedSalespersonKey' => '\\ArrayOfChangedSalespersonKey',
        'ChangedSalespersonKey' => '\\ChangedSalespersonKey',
        'CustomerAddressChangedKeyCriteria' => '\\CustomerAddressChangedKeyCriteria',
        'ArrayOfChangedCustomerAddressKey' => '\\ArrayOfChangedCustomerAddressKey',
        'CustomerChangedKeyCriteria' => '\\CustomerChangedKeyCriteria',
        'ArrayOfChangedCustomerKey' => '\\ArrayOfChangedCustomerKey',
        'CorporateAccount' => '\\CorporateAccount',
        'ArrayOfCorporateAccountMember' => '\\ArrayOfCorporateAccountMember',
        'CorporateAccountMember' => '\\CorporateAccountMember',
        'CorporateAccountMemberKey' => '\\CorporateAccountMemberKey',
        'Customer' => '\\Customer',
        'ArrayOfCustomerAddress' => '\\ArrayOfCustomerAddress',
        'CustomerAddress' => '\\CustomerAddress',
        'CustomerAddressKey' => '\\CustomerAddressKey',
        'CustomerClassKey' => '\\CustomerClassKey',
        'CustomerCreditLimit' => '\\CustomerCreditLimit',
        'PaymentCardAccount' => '\\PaymentCardAccount',
        'PaymentCardAccountKey' => '\\PaymentCardAccountKey',
        'EmailRecipients' => '\\EmailRecipients',
        'CustomerCriteria' => '\\CustomerCriteria',
        'ArrayOfCustomerSummary' => '\\ArrayOfCustomerSummary',
        'CustomerSummary' => '\\CustomerSummary',
        'CustomerAddressCriteria' => '\\CustomerAddressCriteria',
        'ArrayOfCustomerAddressSummary' => '\\ArrayOfCustomerAddressSummary',
        'CustomerAddressSummary' => '\\CustomerAddressSummary',
        'ReceivablesInvoice' => '\\ReceivablesInvoice',
        'ReceivablesDebitDocument' => '\\ReceivablesDebitDocument',
        'ReceivablesDocument' => '\\ReceivablesDocument',
        'ArrayOfReceivablesDistribution' => '\\ArrayOfReceivablesDistribution',
        'ReceivablesDistribution' => '\\ReceivablesDistribution',
        'ReceivablesDistributionKey' => '\\ReceivablesDistributionKey',
        'ReceivablesDocumentKey' => '\\ReceivablesDocumentKey',
        'ArrayOfReceivablesTax' => '\\ArrayOfReceivablesTax',
        'ReceivablesTax' => '\\ReceivablesTax',
        'ReceivablesTaxKey' => '\\ReceivablesTaxKey',
        'ReceivablesDebitMemo' => '\\ReceivablesDebitMemo',
        'ArrayOfReceivablesCommission' => '\\ArrayOfReceivablesCommission',
        'ReceivablesCommission' => '\\ReceivablesCommission',
        'ReceivablesCommissionKey' => '\\ReceivablesCommissionKey',
        'ReceivablesServiceRepair' => '\\ReceivablesServiceRepair',
        'ReceivablesWarranty' => '\\ReceivablesWarranty',
        'ReceivablesCreditDocument' => '\\ReceivablesCreditDocument',
        'ReceivablesCreditMemo' => '\\ReceivablesCreditMemo',
        'ReceivablesReturn' => '\\ReceivablesReturn',
        'ReceivablesPayment' => '\\ReceivablesPayment',
        'ReceivablesPaymentCardDetail' => '\\ReceivablesPaymentCardDetail',
        'ReceivablesTerms' => '\\ReceivablesTerms',
        'ReceivablesFinanceCharge' => '\\ReceivablesFinanceCharge',
        'CashReceipt' => '\\CashReceipt',
        'ArrayOfCashReceiptDistribution' => '\\ArrayOfCashReceiptDistribution',
        'CashReceiptDistribution' => '\\CashReceiptDistribution',
        'CustomerReceivablesSummary' => '\\CustomerReceivablesSummary',
        'AgingAmounts' => '\\AgingAmounts',
        'SalesAmounts' => '\\SalesAmounts',
        'PostedPayablesVendorPayment' => '\\PostedPayablesVendorPayment',
        'PayablesVendorPayment' => '\\PayablesVendorPayment',
        'ReceivablesDocumentCriteria' => '\\ReceivablesDocumentCriteria',
        'ReceivablesDocumentCriteriaBase' => '\\ReceivablesDocumentCriteriaBase',
        'ReceivablesInvoiceCriteria' => '\\ReceivablesInvoiceCriteria',
        'ReceivablesDebitMemoCriteria' => '\\ReceivablesDebitMemoCriteria',
        'ReceivablesServiceRepairCriteria' => '\\ReceivablesServiceRepairCriteria',
        'ReceivablesFinanceChargeCriteria' => '\\ReceivablesFinanceChargeCriteria',
        'ReceivablesWarrantyCriteria' => '\\ReceivablesWarrantyCriteria',
        'ReceivablesCreditMemoCriteria' => '\\ReceivablesCreditMemoCriteria',
        'ReceivablesReturnCriteria' => '\\ReceivablesReturnCriteria',
        'ArrayOfReceivablesDocumentSummary' => '\\ArrayOfReceivablesDocumentSummary',
        'ReceivablesDocumentSummary' => '\\ReceivablesDocumentSummary',
        'ReceivablesDocumentSummaryBase' => '\\ReceivablesDocumentSummaryBase',
        'ReceivablesReturnSummary' => '\\ReceivablesReturnSummary',
        'ReceivablesCreditMemoSummary' => '\\ReceivablesCreditMemoSummary',
        'ReceivablesWarrantySummary' => '\\ReceivablesWarrantySummary',
        'ReceivablesInvoiceSummary' => '\\ReceivablesInvoiceSummary',
        'ReceivablesDebitMemoSummary' => '\\ReceivablesDebitMemoSummary',
        'ReceivablesServiceRepairSummary' => '\\ReceivablesServiceRepairSummary',
        'ReceivablesFinanceChargeSummary' => '\\ReceivablesFinanceChargeSummary',
        'ArrayOfReceivablesInvoiceSummary' => '\\ArrayOfReceivablesInvoiceSummary',
        'ArrayOfReceivablesDebitMemoSummary' => '\\ArrayOfReceivablesDebitMemoSummary',
        'ArrayOfReceivablesServiceRepairSummary' => '\\ArrayOfReceivablesServiceRepairSummary',
        'ArrayOfReceivablesFinanceChargeSummary' => '\\ArrayOfReceivablesFinanceChargeSummary',
        'ArrayOfReceivablesWarrantySummary' => '\\ArrayOfReceivablesWarrantySummary',
        'ArrayOfReceivablesCreditMemoSummary' => '\\ArrayOfReceivablesCreditMemoSummary',
        'ArrayOfReceivablesReturnSummary' => '\\ArrayOfReceivablesReturnSummary',
        'CashReceiptCriteria' => '\\CashReceiptCriteria',
        'ArrayOfCashReceiptSummary' => '\\ArrayOfCashReceiptSummary',
        'CashReceiptSummary' => '\\CashReceiptSummary',
        'CustomerReceivablesSummaryCriteria' => '\\CustomerReceivablesSummaryCriteria',
        'ArrayOfCustomerReceivablesSummary' => '\\ArrayOfCustomerReceivablesSummary',
        'PostedPayablesVendorPaymentCriteria' => '\\PostedPayablesVendorPaymentCriteria',
        'PayablesVendorPaymentCriteria' => '\\PayablesVendorPaymentCriteria',
        'ArrayOfPostedPayablesVendorPaymentSummary' => '\\ArrayOfPostedPayablesVendorPaymentSummary',
        'PostedPayablesVendorPaymentSummary' => '\\PostedPayablesVendorPaymentSummary',
        'SalesOrder' => '\\SalesOrder',
        'SalesDocument' => '\\SalesDocument',
        'ArrayOfSalesCommission' => '\\ArrayOfSalesCommission',
        'SalesCommission' => '\\SalesCommission',
        'SalesCommissionKey' => '\\SalesCommissionKey',
        'SalesDocumentTypeKey' => '\\SalesDocumentTypeKey',
        'ArrayOfSalesDocumentTax' => '\\ArrayOfSalesDocumentTax',
        'SalesDocumentTax' => '\\SalesDocumentTax',
        'SalesTax' => '\\SalesTax',
        'SalesLineTax' => '\\SalesLineTax',
        'SalesLineTaxKey' => '\\SalesLineTaxKey',
        'SalesDocumentTaxKey' => '\\SalesDocumentTaxKey',
        'ArrayOfSalesProcessHold' => '\\ArrayOfSalesProcessHold',
        'SalesProcessHold' => '\\SalesProcessHold',
        'SalesProcessHoldKey' => '\\SalesProcessHoldKey',
        'SalesProcessHoldSetupKey' => '\\SalesProcessHoldSetupKey',
        'ArrayOfSalesTrackingNumber' => '\\ArrayOfSalesTrackingNumber',
        'SalesTrackingNumber' => '\\SalesTrackingNumber',
        'SalesTrackingNumberKey' => '\\SalesTrackingNumberKey',
        'SalesUserDefined' => '\\SalesUserDefined',
        'SalesInvoice' => '\\SalesInvoice',
        'ArrayOfSalesDistribution' => '\\ArrayOfSalesDistribution',
        'SalesDistribution' => '\\SalesDistribution',
        'SalesDistributionKey' => '\\SalesDistributionKey',
        'ArrayOfSalesInvoiceLine' => '\\ArrayOfSalesInvoiceLine',
        'SalesInvoiceLine' => '\\SalesInvoiceLine',
        'SalesLine' => '\\SalesLine',
        'ArrayOfSalesLineTax' => '\\ArrayOfSalesLineTax',
        'SalesOrderLine' => '\\SalesOrderLine',
        'ArrayOfSalesLineBin' => '\\ArrayOfSalesLineBin',
        'SalesLineBin' => '\\SalesLineBin',
        'SalesBin' => '\\SalesBin',
        'SalesComponentBin' => '\\SalesComponentBin',
        'SalesComponentBinKey' => '\\SalesComponentBinKey',
        'SalesLineBinKey' => '\\SalesLineBinKey',
        'ArrayOfSalesOrderComponent' => '\\ArrayOfSalesOrderComponent',
        'SalesOrderComponent' => '\\SalesOrderComponent',
        'SalesComponent' => '\\SalesComponent',
        'SalesInvoiceComponent' => '\\SalesInvoiceComponent',
        'ArrayOfSalesComponentBin' => '\\ArrayOfSalesComponentBin',
        'ArrayOfSalesComponentLot' => '\\ArrayOfSalesComponentLot',
        'ArrayOfSalesComponentSerial' => '\\ArrayOfSalesComponentSerial',
        'SalesReturnComponent' => '\\SalesReturnComponent',
        'SalesReturnQuantities' => '\\SalesReturnQuantities',
        'SalesBackorderComponent' => '\\SalesBackorderComponent',
        'SalesQuoteComponent' => '\\SalesQuoteComponent',
        'SalesFulfillmentOrderComponent' => '\\SalesFulfillmentOrderComponent',
        'ArrayOfSalesLineLot' => '\\ArrayOfSalesLineLot',
        'ArrayOfSalesLineSerial' => '\\ArrayOfSalesLineSerial',
        'SalesReturnLine' => '\\SalesReturnLine',
        'ArrayOfSalesReturnComponent' => '\\ArrayOfSalesReturnComponent',
        'SalesBackorderLine' => '\\SalesBackorderLine',
        'ArrayOfSalesBackorderComponent' => '\\ArrayOfSalesBackorderComponent',
        'SalesQuoteLine' => '\\SalesQuoteLine',
        'ArrayOfSalesQuoteComponent' => '\\ArrayOfSalesQuoteComponent',
        'SalesFulfillmentOrderLine' => '\\SalesFulfillmentOrderLine',
        'ArrayOfSalesFulfillmentOrderComponent' => '\\ArrayOfSalesFulfillmentOrderComponent',
        'ArrayOfSalesInvoiceComponent' => '\\ArrayOfSalesInvoiceComponent',
        'ArrayOfSalesPayment' => '\\ArrayOfSalesPayment',
        'SalesPayment' => '\\SalesPayment',
        'SalesPaymentKey' => '\\SalesPaymentKey',
        'SalesTerms' => '\\SalesTerms',
        'SalesReturn' => '\\SalesReturn',
        'ArrayOfSalesReturnLine' => '\\ArrayOfSalesReturnLine',
        'SalesBackorder' => '\\SalesBackorder',
        'ArrayOfSalesBackorderLine' => '\\ArrayOfSalesBackorderLine',
        'SalesQuote' => '\\SalesQuote',
        'ArrayOfSalesQuoteLine' => '\\ArrayOfSalesQuoteLine',
        'SalesFulfillmentOrder' => '\\SalesFulfillmentOrder',
        'ArrayOfSalesFulfillmentOrderLine' => '\\ArrayOfSalesFulfillmentOrderLine',
        'ArrayOfSalesOrderLine' => '\\ArrayOfSalesOrderLine',
        'SalesProcessHoldSetup' => '\\SalesProcessHoldSetup',
        'SalespersonCommissionsKey' => '\\SalespersonCommissionsKey',
        'SalespersonCommissions' => '\\SalespersonCommissions',
        'SalesDocumentCriteria' => '\\SalesDocumentCriteria',
        'SalesDocumentCriteriaBase' => '\\SalesDocumentCriteriaBase',
        'SalesOrderCriteria' => '\\SalesOrderCriteria',
        'SalesInvoiceCriteria' => '\\SalesInvoiceCriteria',
        'SalesReturnCriteria' => '\\SalesReturnCriteria',
        'SalesBackorderCriteria' => '\\SalesBackorderCriteria',
        'SalesQuoteCriteria' => '\\SalesQuoteCriteria',
        'SalesFulfillmentOrderCriteria' => '\\SalesFulfillmentOrderCriteria',
        'ArrayOfSalesDocumentSummary' => '\\ArrayOfSalesDocumentSummary',
        'SalesDocumentSummary' => '\\SalesDocumentSummary',
        'SalesDocumentSummaryBase' => '\\SalesDocumentSummaryBase',
        'SalesFulfillmentOrderSummary' => '\\SalesFulfillmentOrderSummary',
        'SalesInvoiceSummary' => '\\SalesInvoiceSummary',
        'SalesQuoteSummary' => '\\SalesQuoteSummary',
        'SalesOrderSummary' => '\\SalesOrderSummary',
        'SalesReturnSummary' => '\\SalesReturnSummary',
        'SalesBackorderSummary' => '\\SalesBackorderSummary',
        'ArrayOfSalesOrderSummary' => '\\ArrayOfSalesOrderSummary',
        'ArrayOfSalesInvoiceSummary' => '\\ArrayOfSalesInvoiceSummary',
        'ArrayOfSalesReturnSummary' => '\\ArrayOfSalesReturnSummary',
        'ArrayOfSalesBackorderSummary' => '\\ArrayOfSalesBackorderSummary',
        'ArrayOfSalesFulfillmentOrderSummary' => '\\ArrayOfSalesFulfillmentOrderSummary',
        'ArrayOfSalesQuoteSummary' => '\\ArrayOfSalesQuoteSummary',
        'SalesProcessHoldSetupCriteria' => '\\SalesProcessHoldSetupCriteria',
        'ArrayOfSalesProcessHoldSetup' => '\\ArrayOfSalesProcessHoldSetup',
        'SalespersonCommissionsCriteria' => '\\SalespersonCommissionsCriteria',
        'ArrayOfSalespersonCommissionsSummary' => '\\ArrayOfSalespersonCommissionsSummary',
        'SalespersonCommissionsSummary' => '\\SalespersonCommissionsSummary',
        'SalesOrderChangedKeyCriteria' => '\\SalesOrderChangedKeyCriteria',
        'BaseChangedSalesDocumentKeyCriteria' => '\\BaseChangedSalesDocumentKeyCriteria',
        'ArrayOfChangedSalesOrderKey' => '\\ArrayOfChangedSalesOrderKey',
        'ChangedSalesOrderKey' => '\\ChangedSalesOrderKey',
        'BaseChangedSalesDocument' => '\\BaseChangedSalesDocument',
        'SalesInvoiceChangedKeyCriteria' => '\\SalesInvoiceChangedKeyCriteria',
        'ArrayOfChangedSalesInvoiceKey' => '\\ArrayOfChangedSalesInvoiceKey',
        'ChangedSalesInvoiceKey' => '\\ChangedSalesInvoiceKey',
        'DynamicsOnlineConfiguration' => '\\DynamicsOnlineConfiguration',
        'DynamicsOnlineConfigurationCriteria' => '\\DynamicsOnlineConfigurationCriteria',
        'ArrayOfDynamicsOnlineConfiguration' => '\\ArrayOfDynamicsOnlineConfiguration',
        'Criteria' => '\\Criteria',
        'ArrayOfRestriction' => '\\ArrayOfRestriction',
        'Restriction' => '\\Restriction',
        'RestrictionOfNullableOfDataModificationAction' => '\\RestrictionOfNullableOfDataModificationAction',
        'ListRestrictionOfNullableOfDataModificationAction' => '\\ListRestrictionOfNullableOfDataModificationAction',
        'BetweenRestrictionOfNullableOfDataModificationAction' => '\\BetweenRestrictionOfNullableOfDataModificationAction',
        'LikeRestrictionOfNullableOfDataModificationAction' => '\\LikeRestrictionOfNullableOfDataModificationAction',
        'BetweenRestrictionOfNullableOfdateTime' => '\\BetweenRestrictionOfNullableOfdateTime',
        'ListRestrictionOfNullableOfdateTime' => '\\ListRestrictionOfNullableOfdateTime',
        'RestrictionOfNullableOfdateTime' => '\\RestrictionOfNullableOfdateTime',
        'LikeRestrictionOfNullableOfdateTime' => '\\LikeRestrictionOfNullableOfdateTime',
        'BetweenRestrictionOfstring' => '\\BetweenRestrictionOfstring',
        'ListRestrictionOfstring' => '\\ListRestrictionOfstring',
        'RestrictionOfstring' => '\\RestrictionOfstring',
        'LikeRestrictionOfstring' => '\\LikeRestrictionOfstring',
        'Context' => '\\Context',
        'OrganizationKey' => '\\OrganizationKey',
        'Key' => '\\Key',
        'CompanyKey' => '\\CompanyKey',
        'AXCompanyKey' => '\\AXCompanyKey',
        'NAVCompanyKey' => '\\NAVCompanyKey',
        'ChangedBusinessObjectKey' => '\\ChangedBusinessObjectKey',
        'BusinessObject' => '\\BusinessObject',
        'ExtensionList' => '\\ExtensionList',
        'Extension' => '\\Extension',
        'DocExtension' => '\\DocExtension',
        'Policy' => '\\Policy',
        'ArrayOfBehavior' => '\\ArrayOfBehavior',
        'Behavior' => '\\Behavior',
        'BehaviorKey' => '\\BehaviorKey',
        'PolicyKey' => '\\PolicyKey',
        'ArrayOfBehaviorOption' => '\\ArrayOfBehaviorOption',
        'BehaviorOption' => '\\BehaviorOption',
        'BehaviorOptionKey' => '\\BehaviorOptionKey',
        'ArrayOfParameter' => '\\ArrayOfParameter',
        'Parameter' => '\\Parameter',
        'ParameterKey' => '\\ParameterKey',
        'PhoneNumber' => '\\PhoneNumber',
        'MoneyAmount' => '\\MoneyAmount',
        'Amount' => '\\Amount',
        'Quantity' => '\\Quantity',
        'ArrayOfBusinessObjectUserAssignment' => '\\ArrayOfBusinessObjectUserAssignment',
        'BusinessObjectUserAssignment' => '\\BusinessObjectUserAssignment',
        'ArrayOfUserAssignableBusinessObject' => '\\ArrayOfUserAssignableBusinessObject',
        'UserAssignableBusinessObject' => '\\UserAssignableBusinessObject',
        'BusinessObjectSummaryCriteria' => '\\BusinessObjectSummaryCriteria',
        'ArrayOfBusinessObjectSummary' => '\\ArrayOfBusinessObjectSummary',
        'BusinessObjectSummary' => '\\BusinessObjectSummary',
        'Percent' => '\\Percent',
        'BetweenRestrictionOfNullableOfint' => '\\BetweenRestrictionOfNullableOfint',
        'ListRestrictionOfNullableOfint' => '\\ListRestrictionOfNullableOfint',
        'RestrictionOfNullableOfint' => '\\RestrictionOfNullableOfint',
        'LikeRestrictionOfNullableOfint' => '\\LikeRestrictionOfNullableOfint',
        'ArrayOfLoggedExceptionDataSummary' => '\\ArrayOfLoggedExceptionDataSummary',
        'LoggedExceptionDataSummary' => '\\LoggedExceptionDataSummary',
        'LoggedExceptionData' => '\\LoggedExceptionData',
        'ExceptionInformation' => '\\ExceptionInformation',
        'ValidationResult' => '\\ValidationResult',
        'ArrayOfValidationError' => '\\ArrayOfValidationError',
        'ValidationError' => '\\ValidationError',
        'ValidationItem' => '\\ValidationItem',
        'ValidationWarning' => '\\ValidationWarning',
        'ArrayOfValidationWarning' => '\\ArrayOfValidationWarning',
        'ArrayOfPolicySummary' => '\\ArrayOfPolicySummary',
        'PolicySummary' => '\\PolicySummary',
        'RestrictionOfNullableOfboolean' => '\\RestrictionOfNullableOfboolean',
        'ListRestrictionOfNullableOfboolean' => '\\ListRestrictionOfNullableOfboolean',
        'BetweenRestrictionOfNullableOfboolean' => '\\BetweenRestrictionOfNullableOfboolean',
        'LikeRestrictionOfNullableOfboolean' => '\\LikeRestrictionOfNullableOfboolean',
        'ListRestrictionOfNullableOfTaxDetailBase' => '\\ListRestrictionOfNullableOfTaxDetailBase',
        'RestrictionOfNullableOfTaxDetailBase' => '\\RestrictionOfNullableOfTaxDetailBase',
        'BetweenRestrictionOfNullableOfTaxDetailBase' => '\\BetweenRestrictionOfNullableOfTaxDetailBase',
        'LikeRestrictionOfNullableOfTaxDetailBase' => '\\LikeRestrictionOfNullableOfTaxDetailBase',
        'ListRestrictionOfNullableOfTaxDetailType' => '\\ListRestrictionOfNullableOfTaxDetailType',
        'RestrictionOfNullableOfTaxDetailType' => '\\RestrictionOfNullableOfTaxDetailType',
        'BetweenRestrictionOfNullableOfTaxDetailType' => '\\BetweenRestrictionOfNullableOfTaxDetailType',
        'LikeRestrictionOfNullableOfTaxDetailType' => '\\LikeRestrictionOfNullableOfTaxDetailType',
        'ListRestrictionOfNullableOfServiceTransactionState' => '\\ListRestrictionOfNullableOfServiceTransactionState',
        'RestrictionOfNullableOfServiceTransactionState' => '\\RestrictionOfNullableOfServiceTransactionState',
        'BetweenRestrictionOfNullableOfServiceTransactionState' => '\\BetweenRestrictionOfNullableOfServiceTransactionState',
        'LikeRestrictionOfNullableOfServiceTransactionState' => '\\LikeRestrictionOfNullableOfServiceTransactionState',
        'ListRestrictionOfNullableOfReturnMaterialAuthorizationType' => '\\ListRestrictionOfNullableOfReturnMaterialAuthorizationType',
        'RestrictionOfNullableOfReturnMaterialAuthorizationType' => '\\RestrictionOfNullableOfReturnMaterialAuthorizationType',
        'BetweenRestrictionOfNullableOfReturnMaterialAuthorizationType' => '\\BetweenRestrictionOfNullableOfReturnMaterialAuthorizationType',
        'LikeRestrictionOfNullableOfReturnMaterialAuthorizationType' => '\\LikeRestrictionOfNullableOfReturnMaterialAuthorizationType',
        'LikeRestrictionOfNullableOfServiceCallType' => '\\LikeRestrictionOfNullableOfServiceCallType',
        'BetweenRestrictionOfNullableOfServiceCallType' => '\\BetweenRestrictionOfNullableOfServiceCallType',
        'ListRestrictionOfNullableOfServiceCallType' => '\\ListRestrictionOfNullableOfServiceCallType',
        'RestrictionOfNullableOfServiceCallType' => '\\RestrictionOfNullableOfServiceCallType',
        'ListRestrictionOfNullableOfGLLedgerType' => '\\ListRestrictionOfNullableOfGLLedgerType',
        'RestrictionOfNullableOfGLLedgerType' => '\\RestrictionOfNullableOfGLLedgerType',
        'BetweenRestrictionOfNullableOfGLLedgerType' => '\\BetweenRestrictionOfNullableOfGLLedgerType',
        'LikeRestrictionOfNullableOfGLLedgerType' => '\\LikeRestrictionOfNullableOfGLLedgerType',
        'ListRestrictionOfNullableOfGLTransactionState' => '\\ListRestrictionOfNullableOfGLTransactionState',
        'RestrictionOfNullableOfGLTransactionState' => '\\RestrictionOfNullableOfGLTransactionState',
        'BetweenRestrictionOfNullableOfGLTransactionState' => '\\BetweenRestrictionOfNullableOfGLTransactionState',
        'LikeRestrictionOfNullableOfGLTransactionState' => '\\LikeRestrictionOfNullableOfGLTransactionState',
        'ListRestrictionOfNullableOfGLAccountSummaryType' => '\\ListRestrictionOfNullableOfGLAccountSummaryType',
        'RestrictionOfNullableOfGLAccountSummaryType' => '\\RestrictionOfNullableOfGLAccountSummaryType',
        'BetweenRestrictionOfNullableOfGLAccountSummaryType' => '\\BetweenRestrictionOfNullableOfGLAccountSummaryType',
        'LikeRestrictionOfNullableOfGLAccountSummaryType' => '\\LikeRestrictionOfNullableOfGLAccountSummaryType',
        'ListRestrictionOfNullableOfApplicationStatus' => '\\ListRestrictionOfNullableOfApplicationStatus',
        'RestrictionOfNullableOfApplicationStatus' => '\\RestrictionOfNullableOfApplicationStatus',
        'BetweenRestrictionOfNullableOfApplicationStatus' => '\\BetweenRestrictionOfNullableOfApplicationStatus',
        'LikeRestrictionOfNullableOfApplicationStatus' => '\\LikeRestrictionOfNullableOfApplicationStatus',
        'BetweenRestrictionOfNullableOfdecimal' => '\\BetweenRestrictionOfNullableOfdecimal',
        'ListRestrictionOfNullableOfdecimal' => '\\ListRestrictionOfNullableOfdecimal',
        'RestrictionOfNullableOfdecimal' => '\\RestrictionOfNullableOfdecimal',
        'LikeRestrictionOfNullableOfdecimal' => '\\LikeRestrictionOfNullableOfdecimal',
        'ListRestrictionOfNullableOfHRRequisitionStatus' => '\\ListRestrictionOfNullableOfHRRequisitionStatus',
        'RestrictionOfNullableOfHRRequisitionStatus' => '\\RestrictionOfNullableOfHRRequisitionStatus',
        'BetweenRestrictionOfNullableOfHRRequisitionStatus' => '\\BetweenRestrictionOfNullableOfHRRequisitionStatus',
        'LikeRestrictionOfNullableOfHRRequisitionStatus' => '\\LikeRestrictionOfNullableOfHRRequisitionStatus',
        'ListRestrictionOfNullableOfCompensationPeriod' => '\\ListRestrictionOfNullableOfCompensationPeriod',
        'RestrictionOfNullableOfCompensationPeriod' => '\\RestrictionOfNullableOfCompensationPeriod',
        'BetweenRestrictionOfNullableOfCompensationPeriod' => '\\BetweenRestrictionOfNullableOfCompensationPeriod',
        'LikeRestrictionOfNullableOfCompensationPeriod' => '\\LikeRestrictionOfNullableOfCompensationPeriod',
        'ListRestrictionOfNullableOfEmployeePayTypes' => '\\ListRestrictionOfNullableOfEmployeePayTypes',
        'RestrictionOfNullableOfEmployeePayTypes' => '\\RestrictionOfNullableOfEmployeePayTypes',
        'BetweenRestrictionOfNullableOfEmployeePayTypes' => '\\BetweenRestrictionOfNullableOfEmployeePayTypes',
        'LikeRestrictionOfNullableOfEmployeePayTypes' => '\\LikeRestrictionOfNullableOfEmployeePayTypes',
        'ListRestrictionOfNullableOfItemType' => '\\ListRestrictionOfNullableOfItemType',
        'RestrictionOfNullableOfItemType' => '\\RestrictionOfNullableOfItemType',
        'BetweenRestrictionOfNullableOfItemType' => '\\BetweenRestrictionOfNullableOfItemType',
        'LikeRestrictionOfNullableOfItemType' => '\\LikeRestrictionOfNullableOfItemType',
        'ListRestrictionOfNullableOfInventoriedItemType' => '\\ListRestrictionOfNullableOfInventoriedItemType',
        'RestrictionOfNullableOfInventoriedItemType' => '\\RestrictionOfNullableOfInventoriedItemType',
        'BetweenRestrictionOfNullableOfInventoriedItemType' => '\\BetweenRestrictionOfNullableOfInventoriedItemType',
        'LikeRestrictionOfNullableOfInventoriedItemType' => '\\LikeRestrictionOfNullableOfInventoriedItemType',
        'ListRestrictionOfNullableOfFeeType' => '\\ListRestrictionOfNullableOfFeeType',
        'RestrictionOfNullableOfFeeType' => '\\RestrictionOfNullableOfFeeType',
        'BetweenRestrictionOfNullableOfFeeType' => '\\BetweenRestrictionOfNullableOfFeeType',
        'LikeRestrictionOfNullableOfFeeType' => '\\LikeRestrictionOfNullableOfFeeType',
        'ListRestrictionOfNullableOfInventoryTransactionState' => '\\ListRestrictionOfNullableOfInventoryTransactionState',
        'RestrictionOfNullableOfInventoryTransactionState' => '\\RestrictionOfNullableOfInventoryTransactionState',
        'BetweenRestrictionOfNullableOfInventoryTransactionState' => '\\BetweenRestrictionOfNullableOfInventoryTransactionState',
        'LikeRestrictionOfNullableOfInventoryTransactionState' => '\\LikeRestrictionOfNullableOfInventoryTransactionState',
        'ListRestrictionOfNullableOfPlannedOrderReplenishment' => '\\ListRestrictionOfNullableOfPlannedOrderReplenishment',
        'RestrictionOfNullableOfPlannedOrderReplenishment' => '\\RestrictionOfNullableOfPlannedOrderReplenishment',
        'BetweenRestrictionOfNullableOfPlannedOrderReplenishment' => '\\BetweenRestrictionOfNullableOfPlannedOrderReplenishment',
        'LikeRestrictionOfNullableOfPlannedOrderReplenishment' => '\\LikeRestrictionOfNullableOfPlannedOrderReplenishment',
        'ListRestrictionOfNullableOfManufacturingOrderStatus' => '\\ListRestrictionOfNullableOfManufacturingOrderStatus',
        'RestrictionOfNullableOfManufacturingOrderStatus' => '\\RestrictionOfNullableOfManufacturingOrderStatus',
        'BetweenRestrictionOfNullableOfManufacturingOrderStatus' => '\\BetweenRestrictionOfNullableOfManufacturingOrderStatus',
        'LikeRestrictionOfNullableOfManufacturingOrderStatus' => '\\LikeRestrictionOfNullableOfManufacturingOrderStatus',
        'ListRestrictionOfNullableOfManufacturingOrderOutSourced' => '\\ListRestrictionOfNullableOfManufacturingOrderOutSourced',
        'RestrictionOfNullableOfManufacturingOrderOutSourced' => '\\RestrictionOfNullableOfManufacturingOrderOutSourced',
        'BetweenRestrictionOfNullableOfManufacturingOrderOutSourced' => '\\BetweenRestrictionOfNullableOfManufacturingOrderOutSourced',
        'LikeRestrictionOfNullableOfManufacturingOrderOutSourced' => '\\LikeRestrictionOfNullableOfManufacturingOrderOutSourced',
        'ListRestrictionOfNullableOfManufacturingOrderPriority' => '\\ListRestrictionOfNullableOfManufacturingOrderPriority',
        'RestrictionOfNullableOfManufacturingOrderPriority' => '\\RestrictionOfNullableOfManufacturingOrderPriority',
        'BetweenRestrictionOfNullableOfManufacturingOrderPriority' => '\\BetweenRestrictionOfNullableOfManufacturingOrderPriority',
        'LikeRestrictionOfNullableOfManufacturingOrderPriority' => '\\LikeRestrictionOfNullableOfManufacturingOrderPriority',
        'ListRestrictionOfNullableOfProjectTransactionState' => '\\ListRestrictionOfNullableOfProjectTransactionState',
        'RestrictionOfNullableOfProjectTransactionState' => '\\RestrictionOfNullableOfProjectTransactionState',
        'BetweenRestrictionOfNullableOfProjectTransactionState' => '\\BetweenRestrictionOfNullableOfProjectTransactionState',
        'LikeRestrictionOfNullableOfProjectTransactionState' => '\\LikeRestrictionOfNullableOfProjectTransactionState',
        'ArrayOfPhoneNumber' => '\\ArrayOfPhoneNumber',
        'ListRestrictionOfNullableOfPayablesTransactionState' => '\\ListRestrictionOfNullableOfPayablesTransactionState',
        'RestrictionOfNullableOfPayablesTransactionState' => '\\RestrictionOfNullableOfPayablesTransactionState',
        'BetweenRestrictionOfNullableOfPayablesTransactionState' => '\\BetweenRestrictionOfNullableOfPayablesTransactionState',
        'LikeRestrictionOfNullableOfPayablesTransactionState' => '\\LikeRestrictionOfNullableOfPayablesTransactionState',
        'ListRestrictionOfNullableOfPayablesDocumentType' => '\\ListRestrictionOfNullableOfPayablesDocumentType',
        'RestrictionOfNullableOfPayablesDocumentType' => '\\RestrictionOfNullableOfPayablesDocumentType',
        'BetweenRestrictionOfNullableOfPayablesDocumentType' => '\\BetweenRestrictionOfNullableOfPayablesDocumentType',
        'LikeRestrictionOfNullableOfPayablesDocumentType' => '\\LikeRestrictionOfNullableOfPayablesDocumentType',
        'ListRestrictionOfNullableOfPurchaseOrderStatus' => '\\ListRestrictionOfNullableOfPurchaseOrderStatus',
        'RestrictionOfNullableOfPurchaseOrderStatus' => '\\RestrictionOfNullableOfPurchaseOrderStatus',
        'BetweenRestrictionOfNullableOfPurchaseOrderStatus' => '\\BetweenRestrictionOfNullableOfPurchaseOrderStatus',
        'LikeRestrictionOfNullableOfPurchaseOrderStatus' => '\\LikeRestrictionOfNullableOfPurchaseOrderStatus',
        'ListRestrictionOfNullableOfPurchaseTransactionState' => '\\ListRestrictionOfNullableOfPurchaseTransactionState',
        'RestrictionOfNullableOfPurchaseTransactionState' => '\\RestrictionOfNullableOfPurchaseTransactionState',
        'BetweenRestrictionOfNullableOfPurchaseTransactionState' => '\\BetweenRestrictionOfNullableOfPurchaseTransactionState',
        'LikeRestrictionOfNullableOfPurchaseTransactionState' => '\\LikeRestrictionOfNullableOfPurchaseTransactionState',
        'ListRestrictionOfNullableOfReceivablesTransactionState' => '\\ListRestrictionOfNullableOfReceivablesTransactionState',
        'RestrictionOfNullableOfReceivablesTransactionState' => '\\RestrictionOfNullableOfReceivablesTransactionState',
        'BetweenRestrictionOfNullableOfReceivablesTransactionState' => '\\BetweenRestrictionOfNullableOfReceivablesTransactionState',
        'LikeRestrictionOfNullableOfReceivablesTransactionState' => '\\LikeRestrictionOfNullableOfReceivablesTransactionState',
        'ListRestrictionOfNullableOfReceivablesDocumentType' => '\\ListRestrictionOfNullableOfReceivablesDocumentType',
        'RestrictionOfNullableOfReceivablesDocumentType' => '\\RestrictionOfNullableOfReceivablesDocumentType',
        'BetweenRestrictionOfNullableOfReceivablesDocumentType' => '\\BetweenRestrictionOfNullableOfReceivablesDocumentType',
        'LikeRestrictionOfNullableOfReceivablesDocumentType' => '\\LikeRestrictionOfNullableOfReceivablesDocumentType',
        'ListRestrictionOfNullableOfSalesTransactionState' => '\\ListRestrictionOfNullableOfSalesTransactionState',
        'RestrictionOfNullableOfSalesTransactionState' => '\\RestrictionOfNullableOfSalesTransactionState',
        'BetweenRestrictionOfNullableOfSalesTransactionState' => '\\BetweenRestrictionOfNullableOfSalesTransactionState',
        'LikeRestrictionOfNullableOfSalesTransactionState' => '\\LikeRestrictionOfNullableOfSalesTransactionState',
        'ListRestrictionOfNullableOfSalesDocumentType' => '\\ListRestrictionOfNullableOfSalesDocumentType',
        'RestrictionOfNullableOfSalesDocumentType' => '\\RestrictionOfNullableOfSalesDocumentType',
        'BetweenRestrictionOfNullableOfSalesDocumentType' => '\\BetweenRestrictionOfNullableOfSalesDocumentType',
        'LikeRestrictionOfNullableOfSalesDocumentType' => '\\LikeRestrictionOfNullableOfSalesDocumentType',
        'ListRestrictionOfNullableOfSalespersonCommissionsDocumentType' => '\\ListRestrictionOfNullableOfSalespersonCommissionsDocumentType',
        'RestrictionOfNullableOfSalespersonCommissionsDocumentType' => '\\RestrictionOfNullableOfSalespersonCommissionsDocumentType',
        'BetweenRestrictionOfNullableOfSalespersonCommissionsDocumentType' => '\\BetweenRestrictionOfNullableOfSalespersonCommissionsDocumentType',
        'LikeRestrictionOfNullableOfSalespersonCommissionsDocumentType' => '\\LikeRestrictionOfNullableOfSalespersonCommissionsDocumentType',
        'ListRestrictionOfNullableOfSalesCommissionTransactionState' => '\\ListRestrictionOfNullableOfSalesCommissionTransactionState',
        'RestrictionOfNullableOfSalesCommissionTransactionState' => '\\RestrictionOfNullableOfSalesCommissionTransactionState',
        'BetweenRestrictionOfNullableOfSalesCommissionTransactionState' => '\\BetweenRestrictionOfNullableOfSalesCommissionTransactionState',
        'LikeRestrictionOfNullableOfSalesCommissionTransactionState' => '\\LikeRestrictionOfNullableOfSalesCommissionTransactionState',
        'ArrayOfstring' => '\\ArrayOfstring',
        'ArrayOfNullableOfDataModificationAction9Rw_PZyuZ' => '\\ArrayOfNullableOfDataModificationAction9Rw_PZyuZ',
        'ArrayOfNullableOfdateTime' => '\\ArrayOfNullableOfdateTime',
        'ArrayOfNullableOfint' => '\\ArrayOfNullableOfint',
        'ArrayOfNullableOfboolean' => '\\ArrayOfNullableOfboolean',
        'ArrayOfNullableOfTaxDetailBasefo2IbYCo' => '\\ArrayOfNullableOfTaxDetailBasefo2IbYCo',
        'ArrayOfNullableOfTaxDetailTypefo2IbYCo' => '\\ArrayOfNullableOfTaxDetailTypefo2IbYCo',
        'ArrayOfNullableOfServiceTransactionStatefo2IbYCo' => '\\ArrayOfNullableOfServiceTransactionStatefo2IbYCo',
        'ArrayOfNullableOfReturnMaterialAuthorizationTypefo2IbYCo' => '\\ArrayOfNullableOfReturnMaterialAuthorizationTypefo2IbYCo',
        'ArrayOfNullableOfServiceCallTypefo2IbYCo' => '\\ArrayOfNullableOfServiceCallTypefo2IbYCo',
        'ArrayOfNullableOfGLLedgerTypefo2IbYCo' => '\\ArrayOfNullableOfGLLedgerTypefo2IbYCo',
        'ArrayOfNullableOfGLTransactionStatefo2IbYCo' => '\\ArrayOfNullableOfGLTransactionStatefo2IbYCo',
        'ArrayOfNullableOfGLAccountSummaryTypefo2IbYCo' => '\\ArrayOfNullableOfGLAccountSummaryTypefo2IbYCo',
        'ArrayOfNullableOfApplicationStatusfo2IbYCo' => '\\ArrayOfNullableOfApplicationStatusfo2IbYCo',
        'ArrayOfNullableOfdecimal' => '\\ArrayOfNullableOfdecimal',
        'ArrayOfNullableOfHRRequisitionStatusfo2IbYCo' => '\\ArrayOfNullableOfHRRequisitionStatusfo2IbYCo',
        'ArrayOfNullableOfCompensationPeriodfo2IbYCo' => '\\ArrayOfNullableOfCompensationPeriodfo2IbYCo',
        'ArrayOfNullableOfEmployeePayTypesfo2IbYCo' => '\\ArrayOfNullableOfEmployeePayTypesfo2IbYCo',
        'ArrayOfNullableOfItemTypefo2IbYCo' => '\\ArrayOfNullableOfItemTypefo2IbYCo',
        'ArrayOfNullableOfInventoriedItemTypefo2IbYCo' => '\\ArrayOfNullableOfInventoriedItemTypefo2IbYCo',
        'ArrayOfNullableOfFeeTypefo2IbYCo' => '\\ArrayOfNullableOfFeeTypefo2IbYCo',
        'ArrayOfNullableOfInventoryTransactionStatefo2IbYCo' => '\\ArrayOfNullableOfInventoryTransactionStatefo2IbYCo',
        'ArrayOfNullableOfPlannedOrderReplenishmentfo2IbYCo' => '\\ArrayOfNullableOfPlannedOrderReplenishmentfo2IbYCo',
        'ArrayOfNullableOfManufacturingOrderStatusfo2IbYCo' => '\\ArrayOfNullableOfManufacturingOrderStatusfo2IbYCo',
        'ArrayOfNullableOfManufacturingOrderOutSourcedfo2IbYCo' => '\\ArrayOfNullableOfManufacturingOrderOutSourcedfo2IbYCo',
        'ArrayOfNullableOfManufacturingOrderPriorityfo2IbYCo' => '\\ArrayOfNullableOfManufacturingOrderPriorityfo2IbYCo',
        'ArrayOfNullableOfProjectTransactionStatefo2IbYCo' => '\\ArrayOfNullableOfProjectTransactionStatefo2IbYCo',
        'ArrayOfNullableOfPayablesTransactionStatefo2IbYCo' => '\\ArrayOfNullableOfPayablesTransactionStatefo2IbYCo',
        'ArrayOfNullableOfPayablesDocumentTypefo2IbYCo' => '\\ArrayOfNullableOfPayablesDocumentTypefo2IbYCo',
        'ArrayOfNullableOfPurchaseOrderStatusfo2IbYCo' => '\\ArrayOfNullableOfPurchaseOrderStatusfo2IbYCo',
        'ArrayOfNullableOfPurchaseTransactionStatefo2IbYCo' => '\\ArrayOfNullableOfPurchaseTransactionStatefo2IbYCo',
        'ArrayOfNullableOfReceivablesTransactionStatefo2IbYCo' => '\\ArrayOfNullableOfReceivablesTransactionStatefo2IbYCo',
        'ArrayOfNullableOfReceivablesDocumentTypefo2IbYCo' => '\\ArrayOfNullableOfReceivablesDocumentTypefo2IbYCo',
        'ArrayOfNullableOfSalesTransactionStatefo2IbYCo' => '\\ArrayOfNullableOfSalesTransactionStatefo2IbYCo',
        'ArrayOfNullableOfSalesDocumentTypefo2IbYCo' => '\\ArrayOfNullableOfSalesDocumentTypefo2IbYCo',
        'ArrayOfNullableOfSalespersonCommissionsDocumentTypefo2IbYCo' => '\\ArrayOfNullableOfSalespersonCommissionsDocumentTypefo2IbYCo',
        'ArrayOfNullableOfSalesCommissionTransactionStatefo2IbYCo' => '\\ArrayOfNullableOfSalesCommissionTransactionStatefo2IbYCo',
        'RoleKey' => '\\RoleKey',
        'ArrayOfRoleKey' => '\\ArrayOfRoleKey',
        'SecurityKey' => '\\SecurityKey',
        'ArrayOfTenant' => '\\ArrayOfTenant',
        'Tenant' => '\\Tenant',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
            'features' => 1,
        ), $options);
        if (!$wsdl) {
            $wsdl = 'schemas.microsoft.com.dynamics.gp.2010.01.wsdl';
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * @param GetChangedCurrencyKeyList $parameters
     * @return GetChangedCurrencyKeyListResponse
     */
    public function GetChangedCurrencyKeyList(GetChangedCurrencyKeyList $parameters)
    {
        return $this->__soapCall('GetChangedCurrencyKeyList', array($parameters));
    }

    /**
     * @param GetChangedInternetAddressKeyList $parameters
     * @return GetChangedInternetAddressKeyListResponse
     */
    public function GetChangedInternetAddressKeyList(GetChangedInternetAddressKeyList $parameters)
    {
        return $this->__soapCall('GetChangedInternetAddressKeyList', array($parameters));
    }

    /**
     * @param GetChangedTaxScheduleDetailKeyList $parameters
     * @return GetChangedTaxScheduleDetailKeyListResponse
     */
    public function GetChangedTaxScheduleDetailKeyList(GetChangedTaxScheduleDetailKeyList $parameters)
    {
        return $this->__soapCall('GetChangedTaxScheduleDetailKeyList', array($parameters));
    }

    /**
     * @param GetChangedTaxDetailKeyList $parameters
     * @return GetChangedTaxDetailKeyListResponse
     */
    public function GetChangedTaxDetailKeyList(GetChangedTaxDetailKeyList $parameters)
    {
        return $this->__soapCall('GetChangedTaxDetailKeyList', array($parameters));
    }

    /**
     * @param GetChangedShippingMethodKeyList $parameters
     * @return GetChangedShippingMethodKeyListResponse
     */
    public function GetChangedShippingMethodKeyList(GetChangedShippingMethodKeyList $parameters)
    {
        return $this->__soapCall('GetChangedShippingMethodKeyList', array($parameters));
    }

    /**
     * @param GetBackOfficeRoleAssignmentList $parameters
     * @return GetBackOfficeRoleAssignmentListResponse
     */
    public function GetBackOfficeRoleAssignmentList(GetBackOfficeRoleAssignmentList $parameters)
    {
        return $this->__soapCall('GetBackOfficeRoleAssignmentList', array($parameters));
    }

    /**
     * @param GetBackOfficeRoleList $parameters
     * @return GetBackOfficeRoleListResponse
     */
    public function GetBackOfficeRoleList(GetBackOfficeRoleList $parameters)
    {
        return $this->__soapCall('GetBackOfficeRoleList', array($parameters));
    }

    /**
     * @param GetBackOfficeRoleByKey $parameters
     * @return GetBackOfficeRoleByKeyResponse
     */
    public function GetBackOfficeRoleByKey(GetBackOfficeRoleByKey $parameters)
    {
        return $this->__soapCall('GetBackOfficeRoleByKey', array($parameters));
    }

    /**
     * @param CreateBackOfficeRoleAssignment $parameters
     * @return CreateBackOfficeRoleAssignmentResponse
     */
    public function CreateBackOfficeRoleAssignment(CreateBackOfficeRoleAssignment $parameters)
    {
        return $this->__soapCall('CreateBackOfficeRoleAssignment', array($parameters));
    }

    /**
     * @param GetBankByKey $parameters
     * @return GetBankByKeyResponse
     */
    public function GetBankByKey(GetBankByKey $parameters)
    {
        return $this->__soapCall('GetBankByKey', array($parameters));
    }

    /**
     * @param GetBankList $parameters
     * @return GetBankListResponse
     */
    public function GetBankList(GetBankList $parameters)
    {
        return $this->__soapCall('GetBankList', array($parameters));
    }

    /**
     * @param GetBatchByKey $parameters
     * @return GetBatchByKeyResponse
     */
    public function GetBatchByKey(GetBatchByKey $parameters)
    {
        return $this->__soapCall('GetBatchByKey', array($parameters));
    }

    /**
     * @param GetBatchList $parameters
     * @return GetBatchListResponse
     */
    public function GetBatchList(GetBatchList $parameters)
    {
        return $this->__soapCall('GetBatchList', array($parameters));
    }

    /**
     * @param GetBusinessObjectUserAssignmentList $parameters
     * @return GetBusinessObjectUserAssignmentListResponse
     */
    public function GetBusinessObjectUserAssignmentList(GetBusinessObjectUserAssignmentList $parameters)
    {
        return $this->__soapCall('GetBusinessObjectUserAssignmentList', array($parameters));
    }

    /**
     * @param GetUserAssignableBusinessObjectList $parameters
     * @return GetUserAssignableBusinessObjectListResponse
     */
    public function GetUserAssignableBusinessObjectList(GetUserAssignableBusinessObjectList $parameters)
    {
        return $this->__soapCall('GetUserAssignableBusinessObjectList', array($parameters));
    }

    /**
     * @param GetBusinessObjectSummaryList $parameters
     * @return GetBusinessObjectSummaryListResponse
     */
    public function GetBusinessObjectSummaryList(GetBusinessObjectSummaryList $parameters)
    {
        return $this->__soapCall('GetBusinessObjectSummaryList', array($parameters));
    }

    /**
     * @param CreateBusinessObjectUserAssignment $parameters
     * @return CreateBusinessObjectUserAssignmentResponse
     */
    public function CreateBusinessObjectUserAssignment(CreateBusinessObjectUserAssignment $parameters)
    {
        return $this->__soapCall('CreateBusinessObjectUserAssignment', array($parameters));
    }

    /**
     * @param DeleteBusinessObjectUserAssignment $parameters
     * @return DeleteBusinessObjectUserAssignmentResponse
     */
    public function DeleteBusinessObjectUserAssignment(DeleteBusinessObjectUserAssignment $parameters)
    {
        return $this->__soapCall('DeleteBusinessObjectUserAssignment', array($parameters));
    }

    /**
     * @param GetCountryRegionCodeByKey $parameters
     * @return GetCountryRegionCodeByKeyResponse
     */
    public function GetCountryRegionCodeByKey(GetCountryRegionCodeByKey $parameters)
    {
        return $this->__soapCall('GetCountryRegionCodeByKey', array($parameters));
    }

    /**
     * @param GetCountryRegionCodeList $parameters
     * @return GetCountryRegionCodeListResponse
     */
    public function GetCountryRegionCodeList(GetCountryRegionCodeList $parameters)
    {
        return $this->__soapCall('GetCountryRegionCodeList', array($parameters));
    }

    /**
     * @param GetGLAccountFormatList $parameters
     * @return GetGLAccountFormatListResponse
     */
    public function GetGLAccountFormatList(GetGLAccountFormatList $parameters)
    {
        return $this->__soapCall('GetGLAccountFormatList', array($parameters));
    }

    /**
     * @param GetPaymentCardTypeByKey $parameters
     * @return GetPaymentCardTypeByKeyResponse
     */
    public function GetPaymentCardTypeByKey(GetPaymentCardTypeByKey $parameters)
    {
        return $this->__soapCall('GetPaymentCardTypeByKey', array($parameters));
    }

    /**
     * @param GetPaymentCardTypeList $parameters
     * @return GetPaymentCardTypeListResponse
     */
    public function GetPaymentCardTypeList(GetPaymentCardTypeList $parameters)
    {
        return $this->__soapCall('GetPaymentCardTypeList', array($parameters));
    }

    /**
     * @param GetPaymentTermsByKey $parameters
     * @return GetPaymentTermsByKeyResponse
     */
    public function GetPaymentTermsByKey(GetPaymentTermsByKey $parameters)
    {
        return $this->__soapCall('GetPaymentTermsByKey', array($parameters));
    }

    /**
     * @param GetPaymentTermsList $parameters
     * @return GetPaymentTermsListResponse
     */
    public function GetPaymentTermsList(GetPaymentTermsList $parameters)
    {
        return $this->__soapCall('GetPaymentTermsList', array($parameters));
    }

    /**
     * @param GetCompanyByKey $parameters
     * @return GetCompanyByKeyResponse
     */
    public function GetCompanyByKey(GetCompanyByKey $parameters)
    {
        return $this->__soapCall('GetCompanyByKey', array($parameters));
    }

    /**
     * @param GetCompanyAddressByKey $parameters
     * @return GetCompanyAddressByKeyResponse
     */
    public function GetCompanyAddressByKey(GetCompanyAddressByKey $parameters)
    {
        return $this->__soapCall('GetCompanyAddressByKey', array($parameters));
    }

    /**
     * @param GetCompanyList $parameters
     * @return GetCompanyListResponse
     */
    public function GetCompanyList(GetCompanyList $parameters)
    {
        return $this->__soapCall('GetCompanyList', array($parameters));
    }

    /**
     * @param GetWSEnabledCompanyList $parameters
     * @return GetWSEnabledCompanyListResponse
     */
    public function GetWSEnabledCompanyList(GetWSEnabledCompanyList $parameters)
    {
        return $this->__soapCall('GetWSEnabledCompanyList', array($parameters));
    }

    /**
     * @param GetWSEnabledCompanyForUserList $parameters
     * @return GetWSEnabledCompanyForUserListResponse
     */
    public function GetWSEnabledCompanyForUserList(GetWSEnabledCompanyForUserList $parameters)
    {
        return $this->__soapCall('GetWSEnabledCompanyForUserList', array($parameters));
    }

    /**
     * @param GetCompanyAddressList $parameters
     * @return GetCompanyAddressListResponse
     */
    public function GetCompanyAddressList(GetCompanyAddressList $parameters)
    {
        return $this->__soapCall('GetCompanyAddressList', array($parameters));
    }

    /**
     * @param GetLoggedExceptionDataList $parameters
     * @return GetLoggedExceptionDataListResponse
     */
    public function GetLoggedExceptionDataList(GetLoggedExceptionDataList $parameters)
    {
        return $this->__soapCall('GetLoggedExceptionDataList', array($parameters));
    }

    /**
     * @param GetLoggedExceptionDataByKey $parameters
     * @return GetLoggedExceptionDataByKeyResponse
     */
    public function GetLoggedExceptionDataByKey(GetLoggedExceptionDataByKey $parameters)
    {
        return $this->__soapCall('GetLoggedExceptionDataByKey', array($parameters));
    }

    /**
     * @param GetLoggedValidationResultByKey $parameters
     * @return GetLoggedValidationResultByKeyResponse
     */
    public function GetLoggedValidationResultByKey(GetLoggedValidationResultByKey $parameters)
    {
        return $this->__soapCall('GetLoggedValidationResultByKey', array($parameters));
    }

    /**
     * @param DeleteLoggedExceptionDataByKey $parameters
     * @return DeleteLoggedExceptionDataByKeyResponse
     */
    public function DeleteLoggedExceptionDataByKey(DeleteLoggedExceptionDataByKey $parameters)
    {
        return $this->__soapCall('DeleteLoggedExceptionDataByKey', array($parameters));
    }

    /**
     * @param DeleteAllLoggedExceptionData $parameters
     * @return DeleteAllLoggedExceptionDataResponse
     */
    public function DeleteAllLoggedExceptionData(DeleteAllLoggedExceptionData $parameters)
    {
        return $this->__soapCall('DeleteAllLoggedExceptionData', array($parameters));
    }

    /**
     * @param GetCurrencyByKey $parameters
     * @return GetCurrencyByKeyResponse
     */
    public function GetCurrencyByKey(GetCurrencyByKey $parameters)
    {
        return $this->__soapCall('GetCurrencyByKey', array($parameters));
    }

    /**
     * @param GetCurrencyPostingAccountByKey $parameters
     * @return GetCurrencyPostingAccountByKeyResponse
     */
    public function GetCurrencyPostingAccountByKey(GetCurrencyPostingAccountByKey $parameters)
    {
        return $this->__soapCall('GetCurrencyPostingAccountByKey', array($parameters));
    }

    /**
     * @param GetCurrencyAccessByKey $parameters
     * @return GetCurrencyAccessByKeyResponse
     */
    public function GetCurrencyAccessByKey(GetCurrencyAccessByKey $parameters)
    {
        return $this->__soapCall('GetCurrencyAccessByKey', array($parameters));
    }

    /**
     * @param GetMulticurrencySetupByKey $parameters
     * @return GetMulticurrencySetupByKeyResponse
     */
    public function GetMulticurrencySetupByKey(GetMulticurrencySetupByKey $parameters)
    {
        return $this->__soapCall('GetMulticurrencySetupByKey', array($parameters));
    }

    /**
     * @param GetCurrencyList $parameters
     * @return GetCurrencyListResponse
     */
    public function GetCurrencyList(GetCurrencyList $parameters)
    {
        return $this->__soapCall('GetCurrencyList', array($parameters));
    }

    /**
     * @param GetCurrencyAccessList $parameters
     * @return GetCurrencyAccessListResponse
     */
    public function GetCurrencyAccessList(GetCurrencyAccessList $parameters)
    {
        return $this->__soapCall('GetCurrencyAccessList', array($parameters));
    }

    /**
     * @param GetCurrencyPostingAccountList $parameters
     * @return GetCurrencyPostingAccountListResponse
     */
    public function GetCurrencyPostingAccountList(GetCurrencyPostingAccountList $parameters)
    {
        return $this->__soapCall('GetCurrencyPostingAccountList', array($parameters));
    }

    /**
     * @param GetMulticurrencySetupList $parameters
     * @return GetMulticurrencySetupListResponse
     */
    public function GetMulticurrencySetupList(GetMulticurrencySetupList $parameters)
    {
        return $this->__soapCall('GetMulticurrencySetupList', array($parameters));
    }

    /**
     * @param GetPolicyList $parameters
     * @return GetPolicyListResponse
     */
    public function GetPolicyList(GetPolicyList $parameters)
    {
        return $this->__soapCall('GetPolicyList', array($parameters));
    }

    /**
     * @param GetPolicyListByRoleKey $parameters
     * @return GetPolicyListByRoleKeyResponse
     */
    public function GetPolicyListByRoleKey(GetPolicyListByRoleKey $parameters)
    {
        return $this->__soapCall('GetPolicyListByRoleKey', array($parameters));
    }

    /**
     * @param GetPolicyRoles $parameters
     * @return GetPolicyRolesResponse
     */
    public function GetPolicyRoles(GetPolicyRoles $parameters)
    {
        return $this->__soapCall('GetPolicyRoles', array($parameters));
    }

    /**
     * @param GetPolicyByOperation $parameters
     * @return GetPolicyByOperationResponse
     */
    public function GetPolicyByOperation(GetPolicyByOperation $parameters)
    {
        return $this->__soapCall('GetPolicyByOperation', array($parameters));
    }

    /**
     * @param GetPolicyByKey $parameters
     * @return GetPolicyByKeyResponse
     */
    public function GetPolicyByKey(GetPolicyByKey $parameters)
    {
        return $this->__soapCall('GetPolicyByKey', array($parameters));
    }

    /**
     * @param GetCompletePolicyByKey $parameters
     * @return GetCompletePolicyByKeyResponse
     */
    public function GetCompletePolicyByKey(GetCompletePolicyByKey $parameters)
    {
        return $this->__soapCall('GetCompletePolicyByKey', array($parameters));
    }

    /**
     * @param CreatePolicy $parameters
     * @return CreatePolicyResponse
     */
    public function CreatePolicy(CreatePolicy $parameters)
    {
        return $this->__soapCall('CreatePolicy', array($parameters));
    }

    /**
     * @param UpdatePolicy $parameters
     * @return UpdatePolicyResponse
     */
    public function UpdatePolicy(UpdatePolicy $parameters)
    {
        return $this->__soapCall('UpdatePolicy', array($parameters));
    }

    /**
     * @param DeletePolicy $parameters
     * @return DeletePolicyResponse
     */
    public function DeletePolicy(DeletePolicy $parameters)
    {
        return $this->__soapCall('DeletePolicy', array($parameters));
    }

    /**
     * @param GetSalespersonByKey $parameters
     * @return GetSalespersonByKeyResponse
     */
    public function GetSalespersonByKey(GetSalespersonByKey $parameters)
    {
        return $this->__soapCall('GetSalespersonByKey', array($parameters));
    }

    /**
     * @param GetSalespersonList $parameters
     * @return GetSalespersonListResponse
     */
    public function GetSalespersonList(GetSalespersonList $parameters)
    {
        return $this->__soapCall('GetSalespersonList', array($parameters));
    }

    /**
     * @param GetSalesTerritoryByKey $parameters
     * @return GetSalesTerritoryByKeyResponse
     */
    public function GetSalesTerritoryByKey(GetSalesTerritoryByKey $parameters)
    {
        return $this->__soapCall('GetSalesTerritoryByKey', array($parameters));
    }

    /**
     * @param GetSalesTerritoryList $parameters
     * @return GetSalesTerritoryListResponse
     */
    public function GetSalesTerritoryList(GetSalesTerritoryList $parameters)
    {
        return $this->__soapCall('GetSalesTerritoryList', array($parameters));
    }

    /**
     * @param GetShippingMethodByKey $parameters
     * @return GetShippingMethodByKeyResponse
     */
    public function GetShippingMethodByKey(GetShippingMethodByKey $parameters)
    {
        return $this->__soapCall('GetShippingMethodByKey', array($parameters));
    }

    /**
     * @param GetShippingMethodList $parameters
     * @return GetShippingMethodListResponse
     */
    public function GetShippingMethodList(GetShippingMethodList $parameters)
    {
        return $this->__soapCall('GetShippingMethodList', array($parameters));
    }

    /**
     * @param GetTaxScheduleByKey $parameters
     * @return GetTaxScheduleByKeyResponse
     */
    public function GetTaxScheduleByKey(GetTaxScheduleByKey $parameters)
    {
        return $this->__soapCall('GetTaxScheduleByKey', array($parameters));
    }

    /**
     * @param GetTaxScheduleList $parameters
     * @return GetTaxScheduleListResponse
     */
    public function GetTaxScheduleList(GetTaxScheduleList $parameters)
    {
        return $this->__soapCall('GetTaxScheduleList', array($parameters));
    }

    /**
     * @param GetTaxScheduleDetailList $parameters
     * @return GetTaxScheduleDetailListResponse
     */
    public function GetTaxScheduleDetailList(GetTaxScheduleDetailList $parameters)
    {
        return $this->__soapCall('GetTaxScheduleDetailList', array($parameters));
    }

    /**
     * @param GetTaxScheduleDetailByKey $parameters
     * @return GetTaxScheduleDetailByKeyResponse
     */
    public function GetTaxScheduleDetailByKey(GetTaxScheduleDetailByKey $parameters)
    {
        return $this->__soapCall('GetTaxScheduleDetailByKey', array($parameters));
    }

    /**
     * @param GetTaxDetailByKey $parameters
     * @return GetTaxDetailByKeyResponse
     */
    public function GetTaxDetailByKey(GetTaxDetailByKey $parameters)
    {
        return $this->__soapCall('GetTaxDetailByKey', array($parameters));
    }

    /**
     * @param GetTaxDetailList $parameters
     * @return GetTaxDetailListResponse
     */
    public function GetTaxDetailList(GetTaxDetailList $parameters)
    {
        return $this->__soapCall('GetTaxDetailList', array($parameters));
    }

    /**
     * @param GetTenantList $parameters
     * @return GetTenantListResponse
     */
    public function GetTenantList(GetTenantList $parameters)
    {
        return $this->__soapCall('GetTenantList', array($parameters));
    }

    /**
     * @param MultitenantEnabled $parameters
     * @return MultitenantEnabledResponse
     */
    public function MultitenantEnabled(MultitenantEnabled $parameters)
    {
        return $this->__soapCall('MultitenantEnabled', array($parameters));
    }

    /**
     * @param CreateServiceEquipment $parameters
     * @return CreateServiceEquipmentResponse
     */
    public function CreateServiceEquipment(CreateServiceEquipment $parameters)
    {
        return $this->__soapCall('CreateServiceEquipment', array($parameters));
    }

    /**
     * @param UpdateServiceEquipment $parameters
     * @return UpdateServiceEquipmentResponse
     */
    public function UpdateServiceEquipment(UpdateServiceEquipment $parameters)
    {
        return $this->__soapCall('UpdateServiceEquipment', array($parameters));
    }

    /**
     * @param GetServiceEquipmentByKey $parameters
     * @return GetServiceEquipmentByKeyResponse
     */
    public function GetServiceEquipmentByKey(GetServiceEquipmentByKey $parameters)
    {
        return $this->__soapCall('GetServiceEquipmentByKey', array($parameters));
    }

    /**
     * @param GetServiceEquipmentList $parameters
     * @return GetServiceEquipmentListResponse
     */
    public function GetServiceEquipmentList(GetServiceEquipmentList $parameters)
    {
        return $this->__soapCall('GetServiceEquipmentList', array($parameters));
    }

    /**
     * @param CreateServiceQuote $parameters
     * @return CreateServiceQuoteResponse
     */
    public function CreateServiceQuote(CreateServiceQuote $parameters)
    {
        return $this->__soapCall('CreateServiceQuote', array($parameters));
    }

    /**
     * @param UpdateServiceQuote $parameters
     * @return UpdateServiceQuoteResponse
     */
    public function UpdateServiceQuote(UpdateServiceQuote $parameters)
    {
        return $this->__soapCall('UpdateServiceQuote', array($parameters));
    }

    /**
     * @param GetServiceQuoteByKey $parameters
     * @return GetServiceQuoteByKeyResponse
     */
    public function GetServiceQuoteByKey(GetServiceQuoteByKey $parameters)
    {
        return $this->__soapCall('GetServiceQuoteByKey', array($parameters));
    }

    /**
     * @param GetServiceQuoteList $parameters
     * @return GetServiceQuoteListResponse
     */
    public function GetServiceQuoteList(GetServiceQuoteList $parameters)
    {
        return $this->__soapCall('GetServiceQuoteList', array($parameters));
    }

    /**
     * @param CreateServiceCall $parameters
     * @return CreateServiceCallResponse
     */
    public function CreateServiceCall(CreateServiceCall $parameters)
    {
        return $this->__soapCall('CreateServiceCall', array($parameters));
    }

    /**
     * @param UpdateServiceCall $parameters
     * @return UpdateServiceCallResponse
     */
    public function UpdateServiceCall(UpdateServiceCall $parameters)
    {
        return $this->__soapCall('UpdateServiceCall', array($parameters));
    }

    /**
     * @param GetServiceCallByKey $parameters
     * @return GetServiceCallByKeyResponse
     */
    public function GetServiceCallByKey(GetServiceCallByKey $parameters)
    {
        return $this->__soapCall('GetServiceCallByKey', array($parameters));
    }

    /**
     * @param GetServiceCallList $parameters
     * @return GetServiceCallListResponse
     */
    public function GetServiceCallList(GetServiceCallList $parameters)
    {
        return $this->__soapCall('GetServiceCallList', array($parameters));
    }

    /**
     * @param CreateReturnMaterialAuthorization $parameters
     * @return CreateReturnMaterialAuthorizationResponse
     */
    public function CreateReturnMaterialAuthorization(CreateReturnMaterialAuthorization $parameters)
    {
        return $this->__soapCall('CreateReturnMaterialAuthorization', array($parameters));
    }

    /**
     * @param UpdateReturnMaterialAuthorization $parameters
     * @return UpdateReturnMaterialAuthorizationResponse
     */
    public function UpdateReturnMaterialAuthorization(UpdateReturnMaterialAuthorization $parameters)
    {
        return $this->__soapCall('UpdateReturnMaterialAuthorization', array($parameters));
    }

    /**
     * @param GetReturnMaterialAuthorizationByKey $parameters
     * @return GetReturnMaterialAuthorizationByKeyResponse
     */
    public function GetReturnMaterialAuthorizationByKey(GetReturnMaterialAuthorizationByKey $parameters)
    {
        return $this->__soapCall('GetReturnMaterialAuthorizationByKey', array($parameters));
    }

    /**
     * @param GetReturnMaterialAuthorizationList $parameters
     * @return GetReturnMaterialAuthorizationListResponse
     */
    public function GetReturnMaterialAuthorizationList(GetReturnMaterialAuthorizationList $parameters)
    {
        return $this->__soapCall('GetReturnMaterialAuthorizationList', array($parameters));
    }

    /**
     * @param CreateGLTransaction $parameters
     * @return CreateGLTransactionResponse
     */
    public function CreateGLTransaction(CreateGLTransaction $parameters)
    {
        return $this->__soapCall('CreateGLTransaction', array($parameters));
    }

    /**
     * @param CreateGLFixedAllocationAccount $parameters
     * @return CreateGLFixedAllocationAccountResponse
     */
    public function CreateGLFixedAllocationAccount(CreateGLFixedAllocationAccount $parameters)
    {
        return $this->__soapCall('CreateGLFixedAllocationAccount', array($parameters));
    }

    /**
     * @param CreateGLPostingAccount $parameters
     * @return CreateGLPostingAccountResponse
     */
    public function CreateGLPostingAccount(CreateGLPostingAccount $parameters)
    {
        return $this->__soapCall('CreateGLPostingAccount', array($parameters));
    }

    /**
     * @param CreateGLUnitAccount $parameters
     * @return CreateGLUnitAccountResponse
     */
    public function CreateGLUnitAccount(CreateGLUnitAccount $parameters)
    {
        return $this->__soapCall('CreateGLUnitAccount', array($parameters));
    }

    /**
     * @param CreateGLVariableAllocationAccount $parameters
     * @return CreateGLVariableAllocationAccountResponse
     */
    public function CreateGLVariableAllocationAccount(CreateGLVariableAllocationAccount $parameters)
    {
        return $this->__soapCall('CreateGLVariableAllocationAccount', array($parameters));
    }

    /**
     * @param GetGLTransactionList $parameters
     * @return GetGLTransactionListResponse
     */
    public function GetGLTransactionList(GetGLTransactionList $parameters)
    {
        return $this->__soapCall('GetGLTransactionList', array($parameters));
    }

    /**
     * @param GetGLAccountCategoryList $parameters
     * @return GetGLAccountCategoryListResponse
     */
    public function GetGLAccountCategoryList(GetGLAccountCategoryList $parameters)
    {
        return $this->__soapCall('GetGLAccountCategoryList', array($parameters));
    }

    /**
     * @param GetGLPostingAccountList $parameters
     * @return GetGLPostingAccountListResponse
     */
    public function GetGLPostingAccountList(GetGLPostingAccountList $parameters)
    {
        return $this->__soapCall('GetGLPostingAccountList', array($parameters));
    }

    /**
     * @param GetGLUnitAccountList $parameters
     * @return GetGLUnitAccountListResponse
     */
    public function GetGLUnitAccountList(GetGLUnitAccountList $parameters)
    {
        return $this->__soapCall('GetGLUnitAccountList', array($parameters));
    }

    /**
     * @param GetGLAccountList $parameters
     * @return GetGLAccountListResponse
     */
    public function GetGLAccountList(GetGLAccountList $parameters)
    {
        return $this->__soapCall('GetGLAccountList', array($parameters));
    }

    /**
     * @param GetGLFixedAllocationAccountList $parameters
     * @return GetGLFixedAllocationAccountListResponse
     */
    public function GetGLFixedAllocationAccountList(GetGLFixedAllocationAccountList $parameters)
    {
        return $this->__soapCall('GetGLFixedAllocationAccountList', array($parameters));
    }

    /**
     * @param GetGLVariableAllocationAccountList $parameters
     * @return GetGLVariableAllocationAccountListResponse
     */
    public function GetGLVariableAllocationAccountList(GetGLVariableAllocationAccountList $parameters)
    {
        return $this->__soapCall('GetGLVariableAllocationAccountList', array($parameters));
    }

    /**
     * @param GetGLTransactionByKey $parameters
     * @return GetGLTransactionByKeyResponse
     */
    public function GetGLTransactionByKey(GetGLTransactionByKey $parameters)
    {
        return $this->__soapCall('GetGLTransactionByKey', array($parameters));
    }

    /**
     * @param GetGLPostedTransactionByKey $parameters
     * @return GetGLPostedTransactionByKeyResponse
     */
    public function GetGLPostedTransactionByKey(GetGLPostedTransactionByKey $parameters)
    {
        return $this->__soapCall('GetGLPostedTransactionByKey', array($parameters));
    }

    /**
     * @param GetGLPostingAccountByKey $parameters
     * @return GetGLPostingAccountByKeyResponse
     */
    public function GetGLPostingAccountByKey(GetGLPostingAccountByKey $parameters)
    {
        return $this->__soapCall('GetGLPostingAccountByKey', array($parameters));
    }

    /**
     * @param GetGLUnitAccountByKey $parameters
     * @return GetGLUnitAccountByKeyResponse
     */
    public function GetGLUnitAccountByKey(GetGLUnitAccountByKey $parameters)
    {
        return $this->__soapCall('GetGLUnitAccountByKey', array($parameters));
    }

    /**
     * @param GetGLAccountByKey $parameters
     * @return GetGLAccountByKeyResponse
     */
    public function GetGLAccountByKey(GetGLAccountByKey $parameters)
    {
        return $this->__soapCall('GetGLAccountByKey', array($parameters));
    }

    /**
     * @param GetGLFixedAllocationAccountByKey $parameters
     * @return GetGLFixedAllocationAccountByKeyResponse
     */
    public function GetGLFixedAllocationAccountByKey(GetGLFixedAllocationAccountByKey $parameters)
    {
        return $this->__soapCall('GetGLFixedAllocationAccountByKey', array($parameters));
    }

    /**
     * @param GetGLVariableAllocationAccountByKey $parameters
     * @return GetGLVariableAllocationAccountByKeyResponse
     */
    public function GetGLVariableAllocationAccountByKey(GetGLVariableAllocationAccountByKey $parameters)
    {
        return $this->__soapCall('GetGLVariableAllocationAccountByKey', array($parameters));
    }

    /**
     * @param GetApplicantByKey $parameters
     * @return GetApplicantByKeyResponse
     */
    public function GetApplicantByKey(GetApplicantByKey $parameters)
    {
        return $this->__soapCall('GetApplicantByKey', array($parameters));
    }

    /**
     * @param GetApplicantList $parameters
     * @return GetApplicantListResponse
     */
    public function GetApplicantList(GetApplicantList $parameters)
    {
        return $this->__soapCall('GetApplicantList', array($parameters));
    }

    /**
     * @param CreateApplicant $parameters
     * @return CreateApplicantResponse
     */
    public function CreateApplicant(CreateApplicant $parameters)
    {
        return $this->__soapCall('CreateApplicant', array($parameters));
    }

    /**
     * @param UpdateApplicant $parameters
     * @return UpdateApplicantResponse
     */
    public function UpdateApplicant(UpdateApplicant $parameters)
    {
        return $this->__soapCall('UpdateApplicant', array($parameters));
    }

    /**
     * @param DeleteApplicant $parameters
     * @return DeleteApplicantResponse
     */
    public function DeleteApplicant(DeleteApplicant $parameters)
    {
        return $this->__soapCall('DeleteApplicant', array($parameters));
    }

    /**
     * @param GetApplicantApplicationByKey $parameters
     * @return GetApplicantApplicationByKeyResponse
     */
    public function GetApplicantApplicationByKey(GetApplicantApplicationByKey $parameters)
    {
        return $this->__soapCall('GetApplicantApplicationByKey', array($parameters));
    }

    /**
     * @param GetApplicantApplicationList $parameters
     * @return GetApplicantApplicationListResponse
     */
    public function GetApplicantApplicationList(GetApplicantApplicationList $parameters)
    {
        return $this->__soapCall('GetApplicantApplicationList', array($parameters));
    }

    /**
     * @param DeleteApplicantApplication $parameters
     * @return DeleteApplicantApplicationResponse
     */
    public function DeleteApplicantApplication(DeleteApplicantApplication $parameters)
    {
        return $this->__soapCall('DeleteApplicantApplication', array($parameters));
    }

    /**
     * @param GetApplicantEducationByKey $parameters
     * @return GetApplicantEducationByKeyResponse
     */
    public function GetApplicantEducationByKey(GetApplicantEducationByKey $parameters)
    {
        return $this->__soapCall('GetApplicantEducationByKey', array($parameters));
    }

    /**
     * @param GetApplicantEducationList $parameters
     * @return GetApplicantEducationListResponse
     */
    public function GetApplicantEducationList(GetApplicantEducationList $parameters)
    {
        return $this->__soapCall('GetApplicantEducationList', array($parameters));
    }

    /**
     * @param CreateApplicantEducation $parameters
     * @return CreateApplicantEducationResponse
     */
    public function CreateApplicantEducation(CreateApplicantEducation $parameters)
    {
        return $this->__soapCall('CreateApplicantEducation', array($parameters));
    }

    /**
     * @param UpdateApplicantEducation $parameters
     * @return UpdateApplicantEducationResponse
     */
    public function UpdateApplicantEducation(UpdateApplicantEducation $parameters)
    {
        return $this->__soapCall('UpdateApplicantEducation', array($parameters));
    }

    /**
     * @param DeleteApplicantEducation $parameters
     * @return DeleteApplicantEducationResponse
     */
    public function DeleteApplicantEducation(DeleteApplicantEducation $parameters)
    {
        return $this->__soapCall('DeleteApplicantEducation', array($parameters));
    }

    /**
     * @param GetApplicantReferenceByKey $parameters
     * @return GetApplicantReferenceByKeyResponse
     */
    public function GetApplicantReferenceByKey(GetApplicantReferenceByKey $parameters)
    {
        return $this->__soapCall('GetApplicantReferenceByKey', array($parameters));
    }

    /**
     * @param GetApplicantReferenceList $parameters
     * @return GetApplicantReferenceListResponse
     */
    public function GetApplicantReferenceList(GetApplicantReferenceList $parameters)
    {
        return $this->__soapCall('GetApplicantReferenceList', array($parameters));
    }

    /**
     * @param CreateApplicantReference $parameters
     * @return CreateApplicantReferenceResponse
     */
    public function CreateApplicantReference(CreateApplicantReference $parameters)
    {
        return $this->__soapCall('CreateApplicantReference', array($parameters));
    }

    /**
     * @param UpdateApplicantReference $parameters
     * @return UpdateApplicantReferenceResponse
     */
    public function UpdateApplicantReference(UpdateApplicantReference $parameters)
    {
        return $this->__soapCall('UpdateApplicantReference', array($parameters));
    }

    /**
     * @param DeleteApplicantReference $parameters
     * @return DeleteApplicantReferenceResponse
     */
    public function DeleteApplicantReference(DeleteApplicantReference $parameters)
    {
        return $this->__soapCall('DeleteApplicantReference', array($parameters));
    }

    /**
     * @param GetApplicantInterviewByKey $parameters
     * @return GetApplicantInterviewByKeyResponse
     */
    public function GetApplicantInterviewByKey(GetApplicantInterviewByKey $parameters)
    {
        return $this->__soapCall('GetApplicantInterviewByKey', array($parameters));
    }

    /**
     * @param GetApplicantInterviewList $parameters
     * @return GetApplicantInterviewListResponse
     */
    public function GetApplicantInterviewList(GetApplicantInterviewList $parameters)
    {
        return $this->__soapCall('GetApplicantInterviewList', array($parameters));
    }

    /**
     * @param CreateApplicantInterview $parameters
     * @return CreateApplicantInterviewResponse
     */
    public function CreateApplicantInterview(CreateApplicantInterview $parameters)
    {
        return $this->__soapCall('CreateApplicantInterview', array($parameters));
    }

    /**
     * @param UpdateApplicantInterview $parameters
     * @return UpdateApplicantInterviewResponse
     */
    public function UpdateApplicantInterview(UpdateApplicantInterview $parameters)
    {
        return $this->__soapCall('UpdateApplicantInterview', array($parameters));
    }

    /**
     * @param DeleteApplicantInterview $parameters
     * @return DeleteApplicantInterviewResponse
     */
    public function DeleteApplicantInterview(DeleteApplicantInterview $parameters)
    {
        return $this->__soapCall('DeleteApplicantInterview', array($parameters));
    }

    /**
     * @param GetApplicantTestByKey $parameters
     * @return GetApplicantTestByKeyResponse
     */
    public function GetApplicantTestByKey(GetApplicantTestByKey $parameters)
    {
        return $this->__soapCall('GetApplicantTestByKey', array($parameters));
    }

    /**
     * @param GetApplicantTestList $parameters
     * @return GetApplicantTestListResponse
     */
    public function GetApplicantTestList(GetApplicantTestList $parameters)
    {
        return $this->__soapCall('GetApplicantTestList', array($parameters));
    }

    /**
     * @param CreateApplicantTest $parameters
     * @return CreateApplicantTestResponse
     */
    public function CreateApplicantTest(CreateApplicantTest $parameters)
    {
        return $this->__soapCall('CreateApplicantTest', array($parameters));
    }

    /**
     * @param UpdateApplicantTest $parameters
     * @return UpdateApplicantTestResponse
     */
    public function UpdateApplicantTest(UpdateApplicantTest $parameters)
    {
        return $this->__soapCall('UpdateApplicantTest', array($parameters));
    }

    /**
     * @param DeleteApplicantTest $parameters
     * @return DeleteApplicantTestResponse
     */
    public function DeleteApplicantTest(DeleteApplicantTest $parameters)
    {
        return $this->__soapCall('DeleteApplicantTest', array($parameters));
    }

    /**
     * @param GetApplicantWorkHistoryByKey $parameters
     * @return GetApplicantWorkHistoryByKeyResponse
     */
    public function GetApplicantWorkHistoryByKey(GetApplicantWorkHistoryByKey $parameters)
    {
        return $this->__soapCall('GetApplicantWorkHistoryByKey', array($parameters));
    }

    /**
     * @param GetApplicantWorkHistoryList $parameters
     * @return GetApplicantWorkHistoryListResponse
     */
    public function GetApplicantWorkHistoryList(GetApplicantWorkHistoryList $parameters)
    {
        return $this->__soapCall('GetApplicantWorkHistoryList', array($parameters));
    }

    /**
     * @param CreateApplicantWorkHistory $parameters
     * @return CreateApplicantWorkHistoryResponse
     */
    public function CreateApplicantWorkHistory(CreateApplicantWorkHistory $parameters)
    {
        return $this->__soapCall('CreateApplicantWorkHistory', array($parameters));
    }

    /**
     * @param UpdateApplicantWorkHistory $parameters
     * @return UpdateApplicantWorkHistoryResponse
     */
    public function UpdateApplicantWorkHistory(UpdateApplicantWorkHistory $parameters)
    {
        return $this->__soapCall('UpdateApplicantWorkHistory', array($parameters));
    }

    /**
     * @param DeleteApplicantWorkHistory $parameters
     * @return DeleteApplicantWorkHistoryResponse
     */
    public function DeleteApplicantWorkHistory(DeleteApplicantWorkHistory $parameters)
    {
        return $this->__soapCall('DeleteApplicantWorkHistory', array($parameters));
    }

    /**
     * @param GetApplicantSkillByKey $parameters
     * @return GetApplicantSkillByKeyResponse
     */
    public function GetApplicantSkillByKey(GetApplicantSkillByKey $parameters)
    {
        return $this->__soapCall('GetApplicantSkillByKey', array($parameters));
    }

    /**
     * @param GetApplicantSkillList $parameters
     * @return GetApplicantSkillListResponse
     */
    public function GetApplicantSkillList(GetApplicantSkillList $parameters)
    {
        return $this->__soapCall('GetApplicantSkillList', array($parameters));
    }

    /**
     * @param CreateApplicantSkill $parameters
     * @return CreateApplicantSkillResponse
     */
    public function CreateApplicantSkill(CreateApplicantSkill $parameters)
    {
        return $this->__soapCall('CreateApplicantSkill', array($parameters));
    }

    /**
     * @param UpdateApplicantSkill $parameters
     * @return UpdateApplicantSkillResponse
     */
    public function UpdateApplicantSkill(UpdateApplicantSkill $parameters)
    {
        return $this->__soapCall('UpdateApplicantSkill', array($parameters));
    }

    /**
     * @param DeleteApplicantSkill $parameters
     * @return DeleteApplicantSkillResponse
     */
    public function DeleteApplicantSkill(DeleteApplicantSkill $parameters)
    {
        return $this->__soapCall('DeleteApplicantSkill', array($parameters));
    }

    /**
     * @param GetHRRequisitionByKey $parameters
     * @return GetHRRequisitionByKeyResponse
     */
    public function GetHRRequisitionByKey(GetHRRequisitionByKey $parameters)
    {
        return $this->__soapCall('GetHRRequisitionByKey', array($parameters));
    }

    /**
     * @param GetHRRequisitionList $parameters
     * @return GetHRRequisitionListResponse
     */
    public function GetHRRequisitionList(GetHRRequisitionList $parameters)
    {
        return $this->__soapCall('GetHRRequisitionList', array($parameters));
    }

    /**
     * @param CreateHRRequisition $parameters
     * @return CreateHRRequisitionResponse
     */
    public function CreateHRRequisition(CreateHRRequisition $parameters)
    {
        return $this->__soapCall('CreateHRRequisition', array($parameters));
    }

    /**
     * @param UpdateHRRequisition $parameters
     * @return UpdateHRRequisitionResponse
     */
    public function UpdateHRRequisition(UpdateHRRequisition $parameters)
    {
        return $this->__soapCall('UpdateHRRequisition', array($parameters));
    }

    /**
     * @param GetSkillByKey $parameters
     * @return GetSkillByKeyResponse
     */
    public function GetSkillByKey(GetSkillByKey $parameters)
    {
        return $this->__soapCall('GetSkillByKey', array($parameters));
    }

    /**
     * @param GetSkillList $parameters
     * @return GetSkillListResponse
     */
    public function GetSkillList(GetSkillList $parameters)
    {
        return $this->__soapCall('GetSkillList', array($parameters));
    }

    /**
     * @param CreateSkill $parameters
     * @return CreateSkillResponse
     */
    public function CreateSkill(CreateSkill $parameters)
    {
        return $this->__soapCall('CreateSkill', array($parameters));
    }

    /**
     * @param UpdateSkill $parameters
     * @return UpdateSkillResponse
     */
    public function UpdateSkill(UpdateSkill $parameters)
    {
        return $this->__soapCall('UpdateSkill', array($parameters));
    }

    /**
     * @param DeleteSkill $parameters
     * @return DeleteSkillResponse
     */
    public function DeleteSkill(DeleteSkill $parameters)
    {
        return $this->__soapCall('DeleteSkill', array($parameters));
    }

    /**
     * @param GetSkillSetByKey $parameters
     * @return GetSkillSetByKeyResponse
     */
    public function GetSkillSetByKey(GetSkillSetByKey $parameters)
    {
        return $this->__soapCall('GetSkillSetByKey', array($parameters));
    }

    /**
     * @param GetSkillSetList $parameters
     * @return GetSkillSetListResponse
     */
    public function GetSkillSetList(GetSkillSetList $parameters)
    {
        return $this->__soapCall('GetSkillSetList', array($parameters));
    }

    /**
     * @param CreateSkillSet $parameters
     * @return CreateSkillSetResponse
     */
    public function CreateSkillSet(CreateSkillSet $parameters)
    {
        return $this->__soapCall('CreateSkillSet', array($parameters));
    }

    /**
     * @param UpdateSkillSet $parameters
     * @return UpdateSkillSetResponse
     */
    public function UpdateSkillSet(UpdateSkillSet $parameters)
    {
        return $this->__soapCall('UpdateSkillSet', array($parameters));
    }

    /**
     * @param DeleteSkillSet $parameters
     * @return DeleteSkillSetResponse
     */
    public function DeleteSkillSet(DeleteSkillSet $parameters)
    {
        return $this->__soapCall('DeleteSkillSet', array($parameters));
    }

    /**
     * @param GetEmployeeByKey $parameters
     * @return GetEmployeeByKeyResponse
     */
    public function GetEmployeeByKey(GetEmployeeByKey $parameters)
    {
        return $this->__soapCall('GetEmployeeByKey', array($parameters));
    }

    /**
     * @param GetEmployeeList $parameters
     * @return GetEmployeeListResponse
     */
    public function GetEmployeeList(GetEmployeeList $parameters)
    {
        return $this->__soapCall('GetEmployeeList', array($parameters));
    }

    /**
     * @param CreateEmployee $parameters
     * @return CreateEmployeeResponse
     */
    public function CreateEmployee(CreateEmployee $parameters)
    {
        return $this->__soapCall('CreateEmployee', array($parameters));
    }

    /**
     * @param UpdateEmployee $parameters
     * @return UpdateEmployeeResponse
     */
    public function UpdateEmployee(UpdateEmployee $parameters)
    {
        return $this->__soapCall('UpdateEmployee', array($parameters));
    }

    /**
     * @param GetEmployeeAddressByKey $parameters
     * @return GetEmployeeAddressByKeyResponse
     */
    public function GetEmployeeAddressByKey(GetEmployeeAddressByKey $parameters)
    {
        return $this->__soapCall('GetEmployeeAddressByKey', array($parameters));
    }

    /**
     * @param GetEmployeeAddressList $parameters
     * @return GetEmployeeAddressListResponse
     */
    public function GetEmployeeAddressList(GetEmployeeAddressList $parameters)
    {
        return $this->__soapCall('GetEmployeeAddressList', array($parameters));
    }

    /**
     * @param CreateEmployeeAddress $parameters
     * @return CreateEmployeeAddressResponse
     */
    public function CreateEmployeeAddress(CreateEmployeeAddress $parameters)
    {
        return $this->__soapCall('CreateEmployeeAddress', array($parameters));
    }

    /**
     * @param UpdateEmployeeAddress $parameters
     * @return UpdateEmployeeAddressResponse
     */
    public function UpdateEmployeeAddress(UpdateEmployeeAddress $parameters)
    {
        return $this->__soapCall('UpdateEmployeeAddress', array($parameters));
    }

    /**
     * @param DeleteEmployeeAddress $parameters
     * @return DeleteEmployeeAddressResponse
     */
    public function DeleteEmployeeAddress(DeleteEmployeeAddress $parameters)
    {
        return $this->__soapCall('DeleteEmployeeAddress', array($parameters));
    }

    /**
     * @param GetEmployeePayCodeByKey $parameters
     * @return GetEmployeePayCodeByKeyResponse
     */
    public function GetEmployeePayCodeByKey(GetEmployeePayCodeByKey $parameters)
    {
        return $this->__soapCall('GetEmployeePayCodeByKey', array($parameters));
    }

    /**
     * @param GetEmployeePayCodeList $parameters
     * @return GetEmployeePayCodeListResponse
     */
    public function GetEmployeePayCodeList(GetEmployeePayCodeList $parameters)
    {
        return $this->__soapCall('GetEmployeePayCodeList', array($parameters));
    }

    /**
     * @param CreateEmployeePayCode $parameters
     * @return CreateEmployeePayCodeResponse
     */
    public function CreateEmployeePayCode(CreateEmployeePayCode $parameters)
    {
        return $this->__soapCall('CreateEmployeePayCode', array($parameters));
    }

    /**
     * @param UpdateEmployeePayCode $parameters
     * @return UpdateEmployeePayCodeResponse
     */
    public function UpdateEmployeePayCode(UpdateEmployeePayCode $parameters)
    {
        return $this->__soapCall('UpdateEmployeePayCode', array($parameters));
    }

    /**
     * @param GetWarehouseList $parameters
     * @return GetWarehouseListResponse
     */
    public function GetWarehouseList(GetWarehouseList $parameters)
    {
        return $this->__soapCall('GetWarehouseList', array($parameters));
    }

    /**
     * @param GetItemList $parameters
     * @return GetItemListResponse
     */
    public function GetItemList(GetItemList $parameters)
    {
        return $this->__soapCall('GetItemList', array($parameters));
    }

    /**
     * @param GetInventoriedItemList $parameters
     * @return GetInventoriedItemListResponse
     */
    public function GetInventoriedItemList(GetInventoriedItemList $parameters)
    {
        return $this->__soapCall('GetInventoriedItemList', array($parameters));
    }

    /**
     * @param GetFeeList $parameters
     * @return GetFeeListResponse
     */
    public function GetFeeList(GetFeeList $parameters)
    {
        return $this->__soapCall('GetFeeList', array($parameters));
    }

    /**
     * @param GetServiceList $parameters
     * @return GetServiceListResponse
     */
    public function GetServiceList(GetServiceList $parameters)
    {
        return $this->__soapCall('GetServiceList', array($parameters));
    }

    /**
     * @param GetPricingList $parameters
     * @return GetPricingListResponse
     */
    public function GetPricingList(GetPricingList $parameters)
    {
        return $this->__soapCall('GetPricingList', array($parameters));
    }

    /**
     * @param GetUofMScheduleList $parameters
     * @return GetUofMScheduleListResponse
     */
    public function GetUofMScheduleList(GetUofMScheduleList $parameters)
    {
        return $this->__soapCall('GetUofMScheduleList', array($parameters));
    }

    /**
     * @param GetItemVendorList $parameters
     * @return GetItemVendorListResponse
     */
    public function GetItemVendorList(GetItemVendorList $parameters)
    {
        return $this->__soapCall('GetItemVendorList', array($parameters));
    }

    /**
     * @param GetItemWarehouseList $parameters
     * @return GetItemWarehouseListResponse
     */
    public function GetItemWarehouseList(GetItemWarehouseList $parameters)
    {
        return $this->__soapCall('GetItemWarehouseList', array($parameters));
    }

    /**
     * @param GetItemCurrencyList $parameters
     * @return GetItemCurrencyListResponse
     */
    public function GetItemCurrencyList(GetItemCurrencyList $parameters)
    {
        return $this->__soapCall('GetItemCurrencyList', array($parameters));
    }

    /**
     * @param GetPriceLevelList $parameters
     * @return GetPriceLevelListResponse
     */
    public function GetPriceLevelList(GetPriceLevelList $parameters)
    {
        return $this->__soapCall('GetPriceLevelList', array($parameters));
    }

    /**
     * @param GetPriceLevelByKey $parameters
     * @return GetPriceLevelByKeyResponse
     */
    public function GetPriceLevelByKey(GetPriceLevelByKey $parameters)
    {
        return $this->__soapCall('GetPriceLevelByKey', array($parameters));
    }

    /**
     * @param GetItemClassList $parameters
     * @return GetItemClassListResponse
     */
    public function GetItemClassList(GetItemClassList $parameters)
    {
        return $this->__soapCall('GetItemClassList', array($parameters));
    }

    /**
     * @param GetInventoryAdjustmentList $parameters
     * @return GetInventoryAdjustmentListResponse
     */
    public function GetInventoryAdjustmentList(GetInventoryAdjustmentList $parameters)
    {
        return $this->__soapCall('GetInventoryAdjustmentList', array($parameters));
    }

    /**
     * @param GetInventoryVarianceList $parameters
     * @return GetInventoryVarianceListResponse
     */
    public function GetInventoryVarianceList(GetInventoryVarianceList $parameters)
    {
        return $this->__soapCall('GetInventoryVarianceList', array($parameters));
    }

    /**
     * @param GetInventoryTransferList $parameters
     * @return GetInventoryTransferListResponse
     */
    public function GetInventoryTransferList(GetInventoryTransferList $parameters)
    {
        return $this->__soapCall('GetInventoryTransferList', array($parameters));
    }

    /**
     * @param GetWarehouseByKey $parameters
     * @return GetWarehouseByKeyResponse
     */
    public function GetWarehouseByKey(GetWarehouseByKey $parameters)
    {
        return $this->__soapCall('GetWarehouseByKey', array($parameters));
    }

    /**
     * @param GetItemByKey $parameters
     * @return GetItemByKeyResponse
     */
    public function GetItemByKey(GetItemByKey $parameters)
    {
        return $this->__soapCall('GetItemByKey', array($parameters));
    }

    /**
     * @param GetInventoriedItemByKey $parameters
     * @return GetInventoriedItemByKeyResponse
     */
    public function GetInventoriedItemByKey(GetInventoriedItemByKey $parameters)
    {
        return $this->__soapCall('GetInventoriedItemByKey', array($parameters));
    }

    /**
     * @param GetFeeByKey $parameters
     * @return GetFeeByKeyResponse
     */
    public function GetFeeByKey(GetFeeByKey $parameters)
    {
        return $this->__soapCall('GetFeeByKey', array($parameters));
    }

    /**
     * @param GetServiceByKey $parameters
     * @return GetServiceByKeyResponse
     */
    public function GetServiceByKey(GetServiceByKey $parameters)
    {
        return $this->__soapCall('GetServiceByKey', array($parameters));
    }

    /**
     * @param GetPricingByKey $parameters
     * @return GetPricingByKeyResponse
     */
    public function GetPricingByKey(GetPricingByKey $parameters)
    {
        return $this->__soapCall('GetPricingByKey', array($parameters));
    }

    /**
     * @param GetUofMScheduleByKey $parameters
     * @return GetUofMScheduleByKeyResponse
     */
    public function GetUofMScheduleByKey(GetUofMScheduleByKey $parameters)
    {
        return $this->__soapCall('GetUofMScheduleByKey', array($parameters));
    }

    /**
     * @param GetItemVendorByKey $parameters
     * @return GetItemVendorByKeyResponse
     */
    public function GetItemVendorByKey(GetItemVendorByKey $parameters)
    {
        return $this->__soapCall('GetItemVendorByKey', array($parameters));
    }

    /**
     * @param GetItemWarehouseByKey $parameters
     * @return GetItemWarehouseByKeyResponse
     */
    public function GetItemWarehouseByKey(GetItemWarehouseByKey $parameters)
    {
        return $this->__soapCall('GetItemWarehouseByKey', array($parameters));
    }

    /**
     * @param GetItemCurrencyByKey $parameters
     * @return GetItemCurrencyByKeyResponse
     */
    public function GetItemCurrencyByKey(GetItemCurrencyByKey $parameters)
    {
        return $this->__soapCall('GetItemCurrencyByKey', array($parameters));
    }

    /**
     * @param GetInventoryAdjustmentByKey $parameters
     * @return GetInventoryAdjustmentByKeyResponse
     */
    public function GetInventoryAdjustmentByKey(GetInventoryAdjustmentByKey $parameters)
    {
        return $this->__soapCall('GetInventoryAdjustmentByKey', array($parameters));
    }

    /**
     * @param GetInventoryVarianceByKey $parameters
     * @return GetInventoryVarianceByKeyResponse
     */
    public function GetInventoryVarianceByKey(GetInventoryVarianceByKey $parameters)
    {
        return $this->__soapCall('GetInventoryVarianceByKey', array($parameters));
    }

    /**
     * @param GetInventoryTransferByKey $parameters
     * @return GetInventoryTransferByKeyResponse
     */
    public function GetInventoryTransferByKey(GetInventoryTransferByKey $parameters)
    {
        return $this->__soapCall('GetInventoryTransferByKey', array($parameters));
    }

    /**
     * @param DiscontinueSalesItem $parameters
     * @return DiscontinueSalesItemResponse
     */
    public function DiscontinueSalesItem(DiscontinueSalesItem $parameters)
    {
        return $this->__soapCall('DiscontinueSalesItem', array($parameters));
    }

    /**
     * @param CreateWarehouse $parameters
     * @return CreateWarehouseResponse
     */
    public function CreateWarehouse(CreateWarehouse $parameters)
    {
        return $this->__soapCall('CreateWarehouse', array($parameters));
    }

    /**
     * @param CreateSalesItem $parameters
     * @return CreateSalesItemResponse
     */
    public function CreateSalesItem(CreateSalesItem $parameters)
    {
        return $this->__soapCall('CreateSalesItem', array($parameters));
    }

    /**
     * @param CreateKit $parameters
     * @return CreateKitResponse
     */
    public function CreateKit(CreateKit $parameters)
    {
        return $this->__soapCall('CreateKit', array($parameters));
    }

    /**
     * @param CreateFee $parameters
     * @return CreateFeeResponse
     */
    public function CreateFee(CreateFee $parameters)
    {
        return $this->__soapCall('CreateFee', array($parameters));
    }

    /**
     * @param CreateService $parameters
     * @return CreateServiceResponse
     */
    public function CreateService(CreateService $parameters)
    {
        return $this->__soapCall('CreateService', array($parameters));
    }

    /**
     * @param CreatePricing $parameters
     * @return CreatePricingResponse
     */
    public function CreatePricing(CreatePricing $parameters)
    {
        return $this->__soapCall('CreatePricing', array($parameters));
    }

    /**
     * @param CreateItemVendor $parameters
     * @return CreateItemVendorResponse
     */
    public function CreateItemVendor(CreateItemVendor $parameters)
    {
        return $this->__soapCall('CreateItemVendor', array($parameters));
    }

    /**
     * @param CreateItemWarehouse $parameters
     * @return CreateItemWarehouseResponse
     */
    public function CreateItemWarehouse(CreateItemWarehouse $parameters)
    {
        return $this->__soapCall('CreateItemWarehouse', array($parameters));
    }

    /**
     * @param CreateItemCurrency $parameters
     * @return CreateItemCurrencyResponse
     */
    public function CreateItemCurrency(CreateItemCurrency $parameters)
    {
        return $this->__soapCall('CreateItemCurrency', array($parameters));
    }

    /**
     * @param CreateInventoryAdjustment $parameters
     * @return CreateInventoryAdjustmentResponse
     */
    public function CreateInventoryAdjustment(CreateInventoryAdjustment $parameters)
    {
        return $this->__soapCall('CreateInventoryAdjustment', array($parameters));
    }

    /**
     * @param CreateInventoryVariance $parameters
     * @return CreateInventoryVarianceResponse
     */
    public function CreateInventoryVariance(CreateInventoryVariance $parameters)
    {
        return $this->__soapCall('CreateInventoryVariance', array($parameters));
    }

    /**
     * @param CreateInventoryTransfer $parameters
     * @return CreateInventoryTransferResponse
     */
    public function CreateInventoryTransfer(CreateInventoryTransfer $parameters)
    {
        return $this->__soapCall('CreateInventoryTransfer', array($parameters));
    }

    /**
     * @param UpdateItemVendor $parameters
     * @return UpdateItemVendorResponse
     */
    public function UpdateItemVendor(UpdateItemVendor $parameters)
    {
        return $this->__soapCall('UpdateItemVendor', array($parameters));
    }

    /**
     * @param GetChangedUofMScheduleKeyList $parameters
     * @return GetChangedUofMScheduleKeyListResponse
     */
    public function GetChangedUofMScheduleKeyList(GetChangedUofMScheduleKeyList $parameters)
    {
        return $this->__soapCall('GetChangedUofMScheduleKeyList', array($parameters));
    }

    /**
     * @param GetChangedPriceLevelKeyList $parameters
     * @return GetChangedPriceLevelKeyListResponse
     */
    public function GetChangedPriceLevelKeyList(GetChangedPriceLevelKeyList $parameters)
    {
        return $this->__soapCall('GetChangedPriceLevelKeyList', array($parameters));
    }

    /**
     * @param GetChangedPricingKeyList $parameters
     * @return GetChangedPricingKeyListResponse
     */
    public function GetChangedPricingKeyList(GetChangedPricingKeyList $parameters)
    {
        return $this->__soapCall('GetChangedPricingKeyList', array($parameters));
    }

    /**
     * @param GetChangedItemKeyList $parameters
     * @return GetChangedItemKeyListResponse
     */
    public function GetChangedItemKeyList(GetChangedItemKeyList $parameters)
    {
        return $this->__soapCall('GetChangedItemKeyList', array($parameters));
    }

    /**
     * @param GetPlannedOrderByKey $parameters
     * @return GetPlannedOrderByKeyResponse
     */
    public function GetPlannedOrderByKey(GetPlannedOrderByKey $parameters)
    {
        return $this->__soapCall('GetPlannedOrderByKey', array($parameters));
    }

    /**
     * @param GetPlannedOrderList $parameters
     * @return GetPlannedOrderListResponse
     */
    public function GetPlannedOrderList(GetPlannedOrderList $parameters)
    {
        return $this->__soapCall('GetPlannedOrderList', array($parameters));
    }

    /**
     * @param GetVendorPlannedOrderByKey $parameters
     * @return GetVendorPlannedOrderByKeyResponse
     */
    public function GetVendorPlannedOrderByKey(GetVendorPlannedOrderByKey $parameters)
    {
        return $this->__soapCall('GetVendorPlannedOrderByKey', array($parameters));
    }

    /**
     * @param GetVendorPlannedOrderList $parameters
     * @return GetVendorPlannedOrderListResponse
     */
    public function GetVendorPlannedOrderList(GetVendorPlannedOrderList $parameters)
    {
        return $this->__soapCall('GetVendorPlannedOrderList', array($parameters));
    }

    /**
     * @param GetManufacturingOrderByKey $parameters
     * @return GetManufacturingOrderByKeyResponse
     */
    public function GetManufacturingOrderByKey(GetManufacturingOrderByKey $parameters)
    {
        return $this->__soapCall('GetManufacturingOrderByKey', array($parameters));
    }

    /**
     * @param GetManufacturingOrderList $parameters
     * @return GetManufacturingOrderListResponse
     */
    public function GetManufacturingOrderList(GetManufacturingOrderList $parameters)
    {
        return $this->__soapCall('GetManufacturingOrderList', array($parameters));
    }

    /**
     * @param GetVendorManufacturingOrderByKey $parameters
     * @return GetVendorManufacturingOrderByKeyResponse
     */
    public function GetVendorManufacturingOrderByKey(GetVendorManufacturingOrderByKey $parameters)
    {
        return $this->__soapCall('GetVendorManufacturingOrderByKey', array($parameters));
    }

    /**
     * @param GetVendorManufacturingOrderList $parameters
     * @return GetVendorManufacturingOrderListResponse
     */
    public function GetVendorManufacturingOrderList(GetVendorManufacturingOrderList $parameters)
    {
        return $this->__soapCall('GetVendorManufacturingOrderList', array($parameters));
    }

    /**
     * @param GetProjectMiscellaneousLogList $parameters
     * @return GetProjectMiscellaneousLogListResponse
     */
    public function GetProjectMiscellaneousLogList(GetProjectMiscellaneousLogList $parameters)
    {
        return $this->__soapCall('GetProjectMiscellaneousLogList', array($parameters));
    }

    /**
     * @param GetProjectBudgetList $parameters
     * @return GetProjectBudgetListResponse
     */
    public function GetProjectBudgetList(GetProjectBudgetList $parameters)
    {
        return $this->__soapCall('GetProjectBudgetList', array($parameters));
    }

    /**
     * @param GetProjectChangeOrderList $parameters
     * @return GetProjectChangeOrderListResponse
     */
    public function GetProjectChangeOrderList(GetProjectChangeOrderList $parameters)
    {
        return $this->__soapCall('GetProjectChangeOrderList', array($parameters));
    }

    /**
     * @param GetProjectContractList $parameters
     * @return GetProjectContractListResponse
     */
    public function GetProjectContractList(GetProjectContractList $parameters)
    {
        return $this->__soapCall('GetProjectContractList', array($parameters));
    }

    /**
     * @param GetProjectList $parameters
     * @return GetProjectListResponse
     */
    public function GetProjectList(GetProjectList $parameters)
    {
        return $this->__soapCall('GetProjectList', array($parameters));
    }

    /**
     * @param GetProjectTimesheetList $parameters
     * @return GetProjectTimesheetListResponse
     */
    public function GetProjectTimesheetList(GetProjectTimesheetList $parameters)
    {
        return $this->__soapCall('GetProjectTimesheetList', array($parameters));
    }

    /**
     * @param GetProjectEmployeeExpenseList $parameters
     * @return GetProjectEmployeeExpenseListResponse
     */
    public function GetProjectEmployeeExpenseList(GetProjectEmployeeExpenseList $parameters)
    {
        return $this->__soapCall('GetProjectEmployeeExpenseList', array($parameters));
    }

    /**
     * @param GetProjectMiscellaneousLogByKey $parameters
     * @return GetProjectMiscellaneousLogByKeyResponse
     */
    public function GetProjectMiscellaneousLogByKey(GetProjectMiscellaneousLogByKey $parameters)
    {
        return $this->__soapCall('GetProjectMiscellaneousLogByKey', array($parameters));
    }

    /**
     * @param GetProjectBudgetByKey $parameters
     * @return GetProjectBudgetByKeyResponse
     */
    public function GetProjectBudgetByKey(GetProjectBudgetByKey $parameters)
    {
        return $this->__soapCall('GetProjectBudgetByKey', array($parameters));
    }

    /**
     * @param GetProjectChangeOrderByKey $parameters
     * @return GetProjectChangeOrderByKeyResponse
     */
    public function GetProjectChangeOrderByKey(GetProjectChangeOrderByKey $parameters)
    {
        return $this->__soapCall('GetProjectChangeOrderByKey', array($parameters));
    }

    /**
     * @param GetProjectContractByKey $parameters
     * @return GetProjectContractByKeyResponse
     */
    public function GetProjectContractByKey(GetProjectContractByKey $parameters)
    {
        return $this->__soapCall('GetProjectContractByKey', array($parameters));
    }

    /**
     * @param GetProjectByKey $parameters
     * @return GetProjectByKeyResponse
     */
    public function GetProjectByKey(GetProjectByKey $parameters)
    {
        return $this->__soapCall('GetProjectByKey', array($parameters));
    }

    /**
     * @param GetProjectTimesheetByKey $parameters
     * @return GetProjectTimesheetByKeyResponse
     */
    public function GetProjectTimesheetByKey(GetProjectTimesheetByKey $parameters)
    {
        return $this->__soapCall('GetProjectTimesheetByKey', array($parameters));
    }

    /**
     * @param GetProjectEmployeeExpenseByKey $parameters
     * @return GetProjectEmployeeExpenseByKeyResponse
     */
    public function GetProjectEmployeeExpenseByKey(GetProjectEmployeeExpenseByKey $parameters)
    {
        return $this->__soapCall('GetProjectEmployeeExpenseByKey', array($parameters));
    }

    /**
     * @param CreateVendor $parameters
     * @return CreateVendorResponse
     */
    public function CreateVendor(CreateVendor $parameters)
    {
        return $this->__soapCall('CreateVendor', array($parameters));
    }

    /**
     * @param CreateVendorAddress $parameters
     * @return CreateVendorAddressResponse
     */
    public function CreateVendorAddress(CreateVendorAddress $parameters)
    {
        return $this->__soapCall('CreateVendorAddress', array($parameters));
    }

    /**
     * @param UpdateVendor $parameters
     * @return UpdateVendorResponse
     */
    public function UpdateVendor(UpdateVendor $parameters)
    {
        return $this->__soapCall('UpdateVendor', array($parameters));
    }

    /**
     * @param UpdateVendorAddress $parameters
     * @return UpdateVendorAddressResponse
     */
    public function UpdateVendorAddress(UpdateVendorAddress $parameters)
    {
        return $this->__soapCall('UpdateVendorAddress', array($parameters));
    }

    /**
     * @param DeleteVendorAddress $parameters
     * @return DeleteVendorAddressResponse
     */
    public function DeleteVendorAddress(DeleteVendorAddress $parameters)
    {
        return $this->__soapCall('DeleteVendorAddress', array($parameters));
    }

    /**
     * @param GetVendorByKey $parameters
     * @return GetVendorByKeyResponse
     */
    public function GetVendorByKey(GetVendorByKey $parameters)
    {
        return $this->__soapCall('GetVendorByKey', array($parameters));
    }

    /**
     * @param GetVendorAddressByKey $parameters
     * @return GetVendorAddressByKeyResponse
     */
    public function GetVendorAddressByKey(GetVendorAddressByKey $parameters)
    {
        return $this->__soapCall('GetVendorAddressByKey', array($parameters));
    }

    /**
     * @param GetVendorList $parameters
     * @return GetVendorListResponse
     */
    public function GetVendorList(GetVendorList $parameters)
    {
        return $this->__soapCall('GetVendorList', array($parameters));
    }

    /**
     * @param GetVendorAddressList $parameters
     * @return GetVendorAddressListResponse
     */
    public function GetVendorAddressList(GetVendorAddressList $parameters)
    {
        return $this->__soapCall('GetVendorAddressList', array($parameters));
    }

    /**
     * @param CreatePayablesInvoice $parameters
     * @return CreatePayablesInvoiceResponse
     */
    public function CreatePayablesInvoice(CreatePayablesInvoice $parameters)
    {
        return $this->__soapCall('CreatePayablesInvoice', array($parameters));
    }

    /**
     * @param CreatePayablesFinanceCharge $parameters
     * @return CreatePayablesFinanceChargeResponse
     */
    public function CreatePayablesFinanceCharge(CreatePayablesFinanceCharge $parameters)
    {
        return $this->__soapCall('CreatePayablesFinanceCharge', array($parameters));
    }

    /**
     * @param CreatePayablesMiscellaneousCharge $parameters
     * @return CreatePayablesMiscellaneousChargeResponse
     */
    public function CreatePayablesMiscellaneousCharge(CreatePayablesMiscellaneousCharge $parameters)
    {
        return $this->__soapCall('CreatePayablesMiscellaneousCharge', array($parameters));
    }

    /**
     * @param CreatePayablesReturn $parameters
     * @return CreatePayablesReturnResponse
     */
    public function CreatePayablesReturn(CreatePayablesReturn $parameters)
    {
        return $this->__soapCall('CreatePayablesReturn', array($parameters));
    }

    /**
     * @param CreatePayablesCreditMemo $parameters
     * @return CreatePayablesCreditMemoResponse
     */
    public function CreatePayablesCreditMemo(CreatePayablesCreditMemo $parameters)
    {
        return $this->__soapCall('CreatePayablesCreditMemo', array($parameters));
    }

    /**
     * @param GetPayablesInvoiceByKey $parameters
     * @return GetPayablesInvoiceByKeyResponse
     */
    public function GetPayablesInvoiceByKey(GetPayablesInvoiceByKey $parameters)
    {
        return $this->__soapCall('GetPayablesInvoiceByKey', array($parameters));
    }

    /**
     * @param GetPayablesFinanceChargeByKey $parameters
     * @return GetPayablesFinanceChargeByKeyResponse
     */
    public function GetPayablesFinanceChargeByKey(GetPayablesFinanceChargeByKey $parameters)
    {
        return $this->__soapCall('GetPayablesFinanceChargeByKey', array($parameters));
    }

    /**
     * @param GetPayablesMiscellaneousChargeByKey $parameters
     * @return GetPayablesMiscellaneousChargeByKeyResponse
     */
    public function GetPayablesMiscellaneousChargeByKey(GetPayablesMiscellaneousChargeByKey $parameters)
    {
        return $this->__soapCall('GetPayablesMiscellaneousChargeByKey', array($parameters));
    }

    /**
     * @param GetPayablesReturnByKey $parameters
     * @return GetPayablesReturnByKeyResponse
     */
    public function GetPayablesReturnByKey(GetPayablesReturnByKey $parameters)
    {
        return $this->__soapCall('GetPayablesReturnByKey', array($parameters));
    }

    /**
     * @param GetPayablesCreditMemoByKey $parameters
     * @return GetPayablesCreditMemoByKeyResponse
     */
    public function GetPayablesCreditMemoByKey(GetPayablesCreditMemoByKey $parameters)
    {
        return $this->__soapCall('GetPayablesCreditMemoByKey', array($parameters));
    }

    /**
     * @param GetPayablesDocumentList $parameters
     * @return GetPayablesDocumentListResponse
     */
    public function GetPayablesDocumentList(GetPayablesDocumentList $parameters)
    {
        return $this->__soapCall('GetPayablesDocumentList', array($parameters));
    }

    /**
     * @param GetPayablesInvoiceList $parameters
     * @return GetPayablesInvoiceListResponse
     */
    public function GetPayablesInvoiceList(GetPayablesInvoiceList $parameters)
    {
        return $this->__soapCall('GetPayablesInvoiceList', array($parameters));
    }

    /**
     * @param GetPayablesFinanceChargeList $parameters
     * @return GetPayablesFinanceChargeListResponse
     */
    public function GetPayablesFinanceChargeList(GetPayablesFinanceChargeList $parameters)
    {
        return $this->__soapCall('GetPayablesFinanceChargeList', array($parameters));
    }

    /**
     * @param GetPayablesMiscellaneousChargeList $parameters
     * @return GetPayablesMiscellaneousChargeListResponse
     */
    public function GetPayablesMiscellaneousChargeList(GetPayablesMiscellaneousChargeList $parameters)
    {
        return $this->__soapCall('GetPayablesMiscellaneousChargeList', array($parameters));
    }

    /**
     * @param GetPayablesReturnList $parameters
     * @return GetPayablesReturnListResponse
     */
    public function GetPayablesReturnList(GetPayablesReturnList $parameters)
    {
        return $this->__soapCall('GetPayablesReturnList', array($parameters));
    }

    /**
     * @param GetPayablesCreditMemoList $parameters
     * @return GetPayablesCreditMemoListResponse
     */
    public function GetPayablesCreditMemoList(GetPayablesCreditMemoList $parameters)
    {
        return $this->__soapCall('GetPayablesCreditMemoList', array($parameters));
    }

    /**
     * @param CreatePurchaseOrder $parameters
     * @return CreatePurchaseOrderResponse
     */
    public function CreatePurchaseOrder(CreatePurchaseOrder $parameters)
    {
        return $this->__soapCall('CreatePurchaseOrder', array($parameters));
    }

    /**
     * @param CreatePurchaseReceipt $parameters
     * @return CreatePurchaseReceiptResponse
     */
    public function CreatePurchaseReceipt(CreatePurchaseReceipt $parameters)
    {
        return $this->__soapCall('CreatePurchaseReceipt', array($parameters));
    }

    /**
     * @param CreatePurchaseInvoice $parameters
     * @return CreatePurchaseInvoiceResponse
     */
    public function CreatePurchaseInvoice(CreatePurchaseInvoice $parameters)
    {
        return $this->__soapCall('CreatePurchaseInvoice', array($parameters));
    }

    /**
     * @param UpdatePurchaseOrder $parameters
     * @return UpdatePurchaseOrderResponse
     */
    public function UpdatePurchaseOrder(UpdatePurchaseOrder $parameters)
    {
        return $this->__soapCall('UpdatePurchaseOrder', array($parameters));
    }

    /**
     * @param DeletePurchaseOrder $parameters
     * @return DeletePurchaseOrderResponse
     */
    public function DeletePurchaseOrder(DeletePurchaseOrder $parameters)
    {
        return $this->__soapCall('DeletePurchaseOrder', array($parameters));
    }

    /**
     * @param VoidPurchaseOrder $parameters
     * @return VoidPurchaseOrderResponse
     */
    public function VoidPurchaseOrder(VoidPurchaseOrder $parameters)
    {
        return $this->__soapCall('VoidPurchaseOrder', array($parameters));
    }

    /**
     * @param GetPurchaseOrderByKey $parameters
     * @return GetPurchaseOrderByKeyResponse
     */
    public function GetPurchaseOrderByKey(GetPurchaseOrderByKey $parameters)
    {
        return $this->__soapCall('GetPurchaseOrderByKey', array($parameters));
    }

    /**
     * @param GetPurchaseReceiptByKey $parameters
     * @return GetPurchaseReceiptByKeyResponse
     */
    public function GetPurchaseReceiptByKey(GetPurchaseReceiptByKey $parameters)
    {
        return $this->__soapCall('GetPurchaseReceiptByKey', array($parameters));
    }

    /**
     * @param GetPurchaseInvoiceByKey $parameters
     * @return GetPurchaseInvoiceByKeyResponse
     */
    public function GetPurchaseInvoiceByKey(GetPurchaseInvoiceByKey $parameters)
    {
        return $this->__soapCall('GetPurchaseInvoiceByKey', array($parameters));
    }

    /**
     * @param GetPurchaseOrderList $parameters
     * @return GetPurchaseOrderListResponse
     */
    public function GetPurchaseOrderList(GetPurchaseOrderList $parameters)
    {
        return $this->__soapCall('GetPurchaseOrderList', array($parameters));
    }

    /**
     * @param GetPurchaseReceiptList $parameters
     * @return GetPurchaseReceiptListResponse
     */
    public function GetPurchaseReceiptList(GetPurchaseReceiptList $parameters)
    {
        return $this->__soapCall('GetPurchaseReceiptList', array($parameters));
    }

    /**
     * @param GetPurchaseInvoiceList $parameters
     * @return GetPurchaseInvoiceListResponse
     */
    public function GetPurchaseInvoiceList(GetPurchaseInvoiceList $parameters)
    {
        return $this->__soapCall('GetPurchaseInvoiceList', array($parameters));
    }

    /**
     * @param GetChangedSalespersonKeyList $parameters
     * @return GetChangedSalespersonKeyListResponse
     */
    public function GetChangedSalespersonKeyList(GetChangedSalespersonKeyList $parameters)
    {
        return $this->__soapCall('GetChangedSalespersonKeyList', array($parameters));
    }

    /**
     * @param GetChangedCustomerAddressKeyList $parameters
     * @return GetChangedCustomerAddressKeyListResponse
     */
    public function GetChangedCustomerAddressKeyList(GetChangedCustomerAddressKeyList $parameters)
    {
        return $this->__soapCall('GetChangedCustomerAddressKeyList', array($parameters));
    }

    /**
     * @param GetChangedCustomerKeyList $parameters
     * @return GetChangedCustomerKeyListResponse
     */
    public function GetChangedCustomerKeyList(GetChangedCustomerKeyList $parameters)
    {
        return $this->__soapCall('GetChangedCustomerKeyList', array($parameters));
    }

    /**
     * @param CreateCorporateAccount $parameters
     * @return CreateCorporateAccountResponse
     */
    public function CreateCorporateAccount(CreateCorporateAccount $parameters)
    {
        return $this->__soapCall('CreateCorporateAccount', array($parameters));
    }

    /**
     * @param CreateCustomer $parameters
     * @return CreateCustomerResponse
     */
    public function CreateCustomer(CreateCustomer $parameters)
    {
        return $this->__soapCall('CreateCustomer', array($parameters));
    }

    /**
     * @param CreateCustomerAddress $parameters
     * @return CreateCustomerAddressResponse
     */
    public function CreateCustomerAddress(CreateCustomerAddress $parameters)
    {
        return $this->__soapCall('CreateCustomerAddress', array($parameters));
    }

    /**
     * @param UpdateCorporateAccount $parameters
     * @return UpdateCorporateAccountResponse
     */
    public function UpdateCorporateAccount(UpdateCorporateAccount $parameters)
    {
        return $this->__soapCall('UpdateCorporateAccount', array($parameters));
    }

    /**
     * @param UpdateCustomer $parameters
     * @return UpdateCustomerResponse
     */
    public function UpdateCustomer(UpdateCustomer $parameters)
    {
        return $this->__soapCall('UpdateCustomer', array($parameters));
    }

    /**
     * @param UpdateCustomerAddress $parameters
     * @return UpdateCustomerAddressResponse
     */
    public function UpdateCustomerAddress(UpdateCustomerAddress $parameters)
    {
        return $this->__soapCall('UpdateCustomerAddress', array($parameters));
    }

    /**
     * @param DeleteCustomer $parameters
     * @return DeleteCustomerResponse
     */
    public function DeleteCustomer(DeleteCustomer $parameters)
    {
        return $this->__soapCall('DeleteCustomer', array($parameters));
    }

    /**
     * @param DeleteCustomerAddress $parameters
     * @return DeleteCustomerAddressResponse
     */
    public function DeleteCustomerAddress(DeleteCustomerAddress $parameters)
    {
        return $this->__soapCall('DeleteCustomerAddress', array($parameters));
    }

    /**
     * @param GetCorporateAccountByKey $parameters
     * @return GetCorporateAccountByKeyResponse
     */
    public function GetCorporateAccountByKey(GetCorporateAccountByKey $parameters)
    {
        return $this->__soapCall('GetCorporateAccountByKey', array($parameters));
    }

    /**
     * @param GetCustomerByKey $parameters
     * @return GetCustomerByKeyResponse
     */
    public function GetCustomerByKey(GetCustomerByKey $parameters)
    {
        return $this->__soapCall('GetCustomerByKey', array($parameters));
    }

    /**
     * @param GetCustomerAddressByKey $parameters
     * @return GetCustomerAddressByKeyResponse
     */
    public function GetCustomerAddressByKey(GetCustomerAddressByKey $parameters)
    {
        return $this->__soapCall('GetCustomerAddressByKey', array($parameters));
    }

    /**
     * @param GetCustomerList $parameters
     * @return GetCustomerListResponse
     */
    public function GetCustomerList(GetCustomerList $parameters)
    {
        return $this->__soapCall('GetCustomerList', array($parameters));
    }

    /**
     * @param GetCustomerAddressList $parameters
     * @return GetCustomerAddressListResponse
     */
    public function GetCustomerAddressList(GetCustomerAddressList $parameters)
    {
        return $this->__soapCall('GetCustomerAddressList', array($parameters));
    }

    /**
     * @param CreateReceivablesInvoice $parameters
     * @return CreateReceivablesInvoiceResponse
     */
    public function CreateReceivablesInvoice(CreateReceivablesInvoice $parameters)
    {
        return $this->__soapCall('CreateReceivablesInvoice', array($parameters));
    }

    /**
     * @param CreateReceivablesDebitMemo $parameters
     * @return CreateReceivablesDebitMemoResponse
     */
    public function CreateReceivablesDebitMemo(CreateReceivablesDebitMemo $parameters)
    {
        return $this->__soapCall('CreateReceivablesDebitMemo', array($parameters));
    }

    /**
     * @param CreateReceivablesServiceRepair $parameters
     * @return CreateReceivablesServiceRepairResponse
     */
    public function CreateReceivablesServiceRepair(CreateReceivablesServiceRepair $parameters)
    {
        return $this->__soapCall('CreateReceivablesServiceRepair', array($parameters));
    }

    /**
     * @param CreateReceivablesFinanceCharge $parameters
     * @return CreateReceivablesFinanceChargeResponse
     */
    public function CreateReceivablesFinanceCharge(CreateReceivablesFinanceCharge $parameters)
    {
        return $this->__soapCall('CreateReceivablesFinanceCharge', array($parameters));
    }

    /**
     * @param CreateReceivablesWarranty $parameters
     * @return CreateReceivablesWarrantyResponse
     */
    public function CreateReceivablesWarranty(CreateReceivablesWarranty $parameters)
    {
        return $this->__soapCall('CreateReceivablesWarranty', array($parameters));
    }

    /**
     * @param CreateReceivablesCreditMemo $parameters
     * @return CreateReceivablesCreditMemoResponse
     */
    public function CreateReceivablesCreditMemo(CreateReceivablesCreditMemo $parameters)
    {
        return $this->__soapCall('CreateReceivablesCreditMemo', array($parameters));
    }

    /**
     * @param CreateReceivablesReturn $parameters
     * @return CreateReceivablesReturnResponse
     */
    public function CreateReceivablesReturn(CreateReceivablesReturn $parameters)
    {
        return $this->__soapCall('CreateReceivablesReturn', array($parameters));
    }

    /**
     * @param CreateCashReceipt $parameters
     * @return CreateCashReceiptResponse
     */
    public function CreateCashReceipt(CreateCashReceipt $parameters)
    {
        return $this->__soapCall('CreateCashReceipt', array($parameters));
    }

    /**
     * @param GetReceivablesInvoiceByKey $parameters
     * @return GetReceivablesInvoiceByKeyResponse
     */
    public function GetReceivablesInvoiceByKey(GetReceivablesInvoiceByKey $parameters)
    {
        return $this->__soapCall('GetReceivablesInvoiceByKey', array($parameters));
    }

    /**
     * @param GetReceivablesDebitMemoByKey $parameters
     * @return GetReceivablesDebitMemoByKeyResponse
     */
    public function GetReceivablesDebitMemoByKey(GetReceivablesDebitMemoByKey $parameters)
    {
        return $this->__soapCall('GetReceivablesDebitMemoByKey', array($parameters));
    }

    /**
     * @param GetReceivablesServiceRepairByKey $parameters
     * @return GetReceivablesServiceRepairByKeyResponse
     */
    public function GetReceivablesServiceRepairByKey(GetReceivablesServiceRepairByKey $parameters)
    {
        return $this->__soapCall('GetReceivablesServiceRepairByKey', array($parameters));
    }

    /**
     * @param GetReceivablesFinanceChargeByKey $parameters
     * @return GetReceivablesFinanceChargeByKeyResponse
     */
    public function GetReceivablesFinanceChargeByKey(GetReceivablesFinanceChargeByKey $parameters)
    {
        return $this->__soapCall('GetReceivablesFinanceChargeByKey', array($parameters));
    }

    /**
     * @param GetReceivablesWarrantyByKey $parameters
     * @return GetReceivablesWarrantyByKeyResponse
     */
    public function GetReceivablesWarrantyByKey(GetReceivablesWarrantyByKey $parameters)
    {
        return $this->__soapCall('GetReceivablesWarrantyByKey', array($parameters));
    }

    /**
     * @param GetReceivablesCreditMemoByKey $parameters
     * @return GetReceivablesCreditMemoByKeyResponse
     */
    public function GetReceivablesCreditMemoByKey(GetReceivablesCreditMemoByKey $parameters)
    {
        return $this->__soapCall('GetReceivablesCreditMemoByKey', array($parameters));
    }

    /**
     * @param GetReceivablesReturnByKey $parameters
     * @return GetReceivablesReturnByKeyResponse
     */
    public function GetReceivablesReturnByKey(GetReceivablesReturnByKey $parameters)
    {
        return $this->__soapCall('GetReceivablesReturnByKey', array($parameters));
    }

    /**
     * @param GetCashReceiptByKey $parameters
     * @return GetCashReceiptByKeyResponse
     */
    public function GetCashReceiptByKey(GetCashReceiptByKey $parameters)
    {
        return $this->__soapCall('GetCashReceiptByKey', array($parameters));
    }

    /**
     * @param GetCustomerReceivablesSummaryByKey $parameters
     * @return GetCustomerReceivablesSummaryByKeyResponse
     */
    public function GetCustomerReceivablesSummaryByKey(GetCustomerReceivablesSummaryByKey $parameters)
    {
        return $this->__soapCall('GetCustomerReceivablesSummaryByKey', array($parameters));
    }

    /**
     * @param GetPostedPayablesVendorPaymentsByKey $parameters
     * @return GetPostedPayablesVendorPaymentsByKeyResponse
     */
    public function GetPostedPayablesVendorPaymentsByKey(GetPostedPayablesVendorPaymentsByKey $parameters)
    {
        return $this->__soapCall('GetPostedPayablesVendorPaymentsByKey', array($parameters));
    }

    /**
     * @param GetReceivablesDocumentList $parameters
     * @return GetReceivablesDocumentListResponse
     */
    public function GetReceivablesDocumentList(GetReceivablesDocumentList $parameters)
    {
        return $this->__soapCall('GetReceivablesDocumentList', array($parameters));
    }

    /**
     * @param GetReceivablesInvoiceList $parameters
     * @return GetReceivablesInvoiceListResponse
     */
    public function GetReceivablesInvoiceList(GetReceivablesInvoiceList $parameters)
    {
        return $this->__soapCall('GetReceivablesInvoiceList', array($parameters));
    }

    /**
     * @param GetReceivablesDebitMemoList $parameters
     * @return GetReceivablesDebitMemoListResponse
     */
    public function GetReceivablesDebitMemoList(GetReceivablesDebitMemoList $parameters)
    {
        return $this->__soapCall('GetReceivablesDebitMemoList', array($parameters));
    }

    /**
     * @param GetReceivablesServiceRepairList $parameters
     * @return GetReceivablesServiceRepairListResponse
     */
    public function GetReceivablesServiceRepairList(GetReceivablesServiceRepairList $parameters)
    {
        return $this->__soapCall('GetReceivablesServiceRepairList', array($parameters));
    }

    /**
     * @param GetReceivablesFinanceChargeList $parameters
     * @return GetReceivablesFinanceChargeListResponse
     */
    public function GetReceivablesFinanceChargeList(GetReceivablesFinanceChargeList $parameters)
    {
        return $this->__soapCall('GetReceivablesFinanceChargeList', array($parameters));
    }

    /**
     * @param GetReceivablesWarrantyList $parameters
     * @return GetReceivablesWarrantyListResponse
     */
    public function GetReceivablesWarrantyList(GetReceivablesWarrantyList $parameters)
    {
        return $this->__soapCall('GetReceivablesWarrantyList', array($parameters));
    }

    /**
     * @param GetReceivablesCreditMemoList $parameters
     * @return GetReceivablesCreditMemoListResponse
     */
    public function GetReceivablesCreditMemoList(GetReceivablesCreditMemoList $parameters)
    {
        return $this->__soapCall('GetReceivablesCreditMemoList', array($parameters));
    }

    /**
     * @param GetReceivablesReturnList $parameters
     * @return GetReceivablesReturnListResponse
     */
    public function GetReceivablesReturnList(GetReceivablesReturnList $parameters)
    {
        return $this->__soapCall('GetReceivablesReturnList', array($parameters));
    }

    /**
     * @param GetCashReceiptList $parameters
     * @return GetCashReceiptListResponse
     */
    public function GetCashReceiptList(GetCashReceiptList $parameters)
    {
        return $this->__soapCall('GetCashReceiptList', array($parameters));
    }

    /**
     * @param GetCustomerReceivablesSummaryList $parameters
     * @return GetCustomerReceivablesSummaryListResponse
     */
    public function GetCustomerReceivablesSummaryList(GetCustomerReceivablesSummaryList $parameters)
    {
        return $this->__soapCall('GetCustomerReceivablesSummaryList', array($parameters));
    }

    /**
     * @param GetPostedPayablesVendorPaymentsList $parameters
     * @return GetPostedPayablesVendorPaymentsListResponse
     */
    public function GetPostedPayablesVendorPaymentsList(GetPostedPayablesVendorPaymentsList $parameters)
    {
        return $this->__soapCall('GetPostedPayablesVendorPaymentsList', array($parameters));
    }

    /**
     * @param VoidReceivablesCreditMemo $parameters
     * @return VoidReceivablesCreditMemoResponse
     */
    public function VoidReceivablesCreditMemo(VoidReceivablesCreditMemo $parameters)
    {
        return $this->__soapCall('VoidReceivablesCreditMemo', array($parameters));
    }

    /**
     * @param VoidReceivablesReturn $parameters
     * @return VoidReceivablesReturnResponse
     */
    public function VoidReceivablesReturn(VoidReceivablesReturn $parameters)
    {
        return $this->__soapCall('VoidReceivablesReturn', array($parameters));
    }

    /**
     * @param VoidCashReceipt $parameters
     * @return VoidCashReceiptResponse
     */
    public function VoidCashReceipt(VoidCashReceipt $parameters)
    {
        return $this->__soapCall('VoidCashReceipt', array($parameters));
    }

    /**
     * @param CreateSalesOrder $parameters
     * @return CreateSalesOrderResponse
     */
    public function CreateSalesOrder(CreateSalesOrder $parameters)
    {
        return $this->__soapCall('CreateSalesOrder', array($parameters));
    }

    /**
     * @param CreateSalesInvoice $parameters
     * @return CreateSalesInvoiceResponse
     */
    public function CreateSalesInvoice(CreateSalesInvoice $parameters)
    {
        return $this->__soapCall('CreateSalesInvoice', array($parameters));
    }

    /**
     * @param CreateSalesReturn $parameters
     * @return CreateSalesReturnResponse
     */
    public function CreateSalesReturn(CreateSalesReturn $parameters)
    {
        return $this->__soapCall('CreateSalesReturn', array($parameters));
    }

    /**
     * @param CreateSalesBackorder $parameters
     * @return CreateSalesBackorderResponse
     */
    public function CreateSalesBackorder(CreateSalesBackorder $parameters)
    {
        return $this->__soapCall('CreateSalesBackorder', array($parameters));
    }

    /**
     * @param CreateSalesFulfillmentOrder $parameters
     * @return CreateSalesFulfillmentOrderResponse
     */
    public function CreateSalesFulfillmentOrder(CreateSalesFulfillmentOrder $parameters)
    {
        return $this->__soapCall('CreateSalesFulfillmentOrder', array($parameters));
    }

    /**
     * @param CreateSalesQuote $parameters
     * @return CreateSalesQuoteResponse
     */
    public function CreateSalesQuote(CreateSalesQuote $parameters)
    {
        return $this->__soapCall('CreateSalesQuote', array($parameters));
    }

    /**
     * @param CreateSalesProcessHoldSetup $parameters
     * @return CreateSalesProcessHoldSetupResponse
     */
    public function CreateSalesProcessHoldSetup(CreateSalesProcessHoldSetup $parameters)
    {
        return $this->__soapCall('CreateSalesProcessHoldSetup', array($parameters));
    }

    /**
     * @param UpdateSalesOrder $parameters
     * @return UpdateSalesOrderResponse
     */
    public function UpdateSalesOrder(UpdateSalesOrder $parameters)
    {
        return $this->__soapCall('UpdateSalesOrder', array($parameters));
    }

    /**
     * @param UpdateSalesInvoice $parameters
     * @return UpdateSalesInvoiceResponse
     */
    public function UpdateSalesInvoice(UpdateSalesInvoice $parameters)
    {
        return $this->__soapCall('UpdateSalesInvoice', array($parameters));
    }

    /**
     * @param UpdateSalesReturn $parameters
     * @return UpdateSalesReturnResponse
     */
    public function UpdateSalesReturn(UpdateSalesReturn $parameters)
    {
        return $this->__soapCall('UpdateSalesReturn', array($parameters));
    }

    /**
     * @param UpdateSalesBackorder $parameters
     * @return UpdateSalesBackorderResponse
     */
    public function UpdateSalesBackorder(UpdateSalesBackorder $parameters)
    {
        return $this->__soapCall('UpdateSalesBackorder', array($parameters));
    }

    /**
     * @param UpdateSalesFulfillmentOrder $parameters
     * @return UpdateSalesFulfillmentOrderResponse
     */
    public function UpdateSalesFulfillmentOrder(UpdateSalesFulfillmentOrder $parameters)
    {
        return $this->__soapCall('UpdateSalesFulfillmentOrder', array($parameters));
    }

    /**
     * @param UpdateSalesQuote $parameters
     * @return UpdateSalesQuoteResponse
     */
    public function UpdateSalesQuote(UpdateSalesQuote $parameters)
    {
        return $this->__soapCall('UpdateSalesQuote', array($parameters));
    }

    /**
     * @param UpdateSalesProcessHoldSetup $parameters
     * @return UpdateSalesProcessHoldSetupResponse
     */
    public function UpdateSalesProcessHoldSetup(UpdateSalesProcessHoldSetup $parameters)
    {
        return $this->__soapCall('UpdateSalesProcessHoldSetup', array($parameters));
    }

    /**
     * @param DeleteSalesOrder $parameters
     * @return DeleteSalesOrderResponse
     */
    public function DeleteSalesOrder(DeleteSalesOrder $parameters)
    {
        return $this->__soapCall('DeleteSalesOrder', array($parameters));
    }

    /**
     * @param DeleteSalesInvoice $parameters
     * @return DeleteSalesInvoiceResponse
     */
    public function DeleteSalesInvoice(DeleteSalesInvoice $parameters)
    {
        return $this->__soapCall('DeleteSalesInvoice', array($parameters));
    }

    /**
     * @param DeleteSalesReturn $parameters
     * @return DeleteSalesReturnResponse
     */
    public function DeleteSalesReturn(DeleteSalesReturn $parameters)
    {
        return $this->__soapCall('DeleteSalesReturn', array($parameters));
    }

    /**
     * @param DeleteSalesBackorder $parameters
     * @return DeleteSalesBackorderResponse
     */
    public function DeleteSalesBackorder(DeleteSalesBackorder $parameters)
    {
        return $this->__soapCall('DeleteSalesBackorder', array($parameters));
    }

    /**
     * @param DeleteSalesFulfillmentOrder $parameters
     * @return DeleteSalesFulfillmentOrderResponse
     */
    public function DeleteSalesFulfillmentOrder(DeleteSalesFulfillmentOrder $parameters)
    {
        return $this->__soapCall('DeleteSalesFulfillmentOrder', array($parameters));
    }

    /**
     * @param DeleteSalesQuote $parameters
     * @return DeleteSalesQuoteResponse
     */
    public function DeleteSalesQuote(DeleteSalesQuote $parameters)
    {
        return $this->__soapCall('DeleteSalesQuote', array($parameters));
    }

    /**
     * @param VoidSalesOrder $parameters
     * @return VoidSalesOrderResponse
     */
    public function VoidSalesOrder(VoidSalesOrder $parameters)
    {
        return $this->__soapCall('VoidSalesOrder', array($parameters));
    }

    /**
     * @param VoidSalesInvoice $parameters
     * @return VoidSalesInvoiceResponse
     */
    public function VoidSalesInvoice(VoidSalesInvoice $parameters)
    {
        return $this->__soapCall('VoidSalesInvoice', array($parameters));
    }

    /**
     * @param VoidSalesReturn $parameters
     * @return VoidSalesReturnResponse
     */
    public function VoidSalesReturn(VoidSalesReturn $parameters)
    {
        return $this->__soapCall('VoidSalesReturn', array($parameters));
    }

    /**
     * @param VoidSalesBackorder $parameters
     * @return VoidSalesBackorderResponse
     */
    public function VoidSalesBackorder(VoidSalesBackorder $parameters)
    {
        return $this->__soapCall('VoidSalesBackorder', array($parameters));
    }

    /**
     * @param VoidSalesQuote $parameters
     * @return VoidSalesQuoteResponse
     */
    public function VoidSalesQuote(VoidSalesQuote $parameters)
    {
        return $this->__soapCall('VoidSalesQuote', array($parameters));
    }

    /**
     * @param GetSalesOrderByKey $parameters
     * @return GetSalesOrderByKeyResponse
     */
    public function GetSalesOrderByKey(GetSalesOrderByKey $parameters)
    {
        return $this->__soapCall('GetSalesOrderByKey', array($parameters));
    }

    /**
     * @param GetSalesInvoiceByKey $parameters
     * @return GetSalesInvoiceByKeyResponse
     */
    public function GetSalesInvoiceByKey(GetSalesInvoiceByKey $parameters)
    {
        return $this->__soapCall('GetSalesInvoiceByKey', array($parameters));
    }

    /**
     * @param GetSalesReturnByKey $parameters
     * @return GetSalesReturnByKeyResponse
     */
    public function GetSalesReturnByKey(GetSalesReturnByKey $parameters)
    {
        return $this->__soapCall('GetSalesReturnByKey', array($parameters));
    }

    /**
     * @param GetSalesBackorderByKey $parameters
     * @return GetSalesBackorderByKeyResponse
     */
    public function GetSalesBackorderByKey(GetSalesBackorderByKey $parameters)
    {
        return $this->__soapCall('GetSalesBackorderByKey', array($parameters));
    }

    /**
     * @param GetSalesFulfillmentOrderByKey $parameters
     * @return GetSalesFulfillmentOrderByKeyResponse
     */
    public function GetSalesFulfillmentOrderByKey(GetSalesFulfillmentOrderByKey $parameters)
    {
        return $this->__soapCall('GetSalesFulfillmentOrderByKey', array($parameters));
    }

    /**
     * @param GetSalesQuoteByKey $parameters
     * @return GetSalesQuoteByKeyResponse
     */
    public function GetSalesQuoteByKey(GetSalesQuoteByKey $parameters)
    {
        return $this->__soapCall('GetSalesQuoteByKey', array($parameters));
    }

    /**
     * @param GetSalesProcessHoldSetupByKey $parameters
     * @return GetSalesProcessHoldSetupByKeyResponse
     */
    public function GetSalesProcessHoldSetupByKey(GetSalesProcessHoldSetupByKey $parameters)
    {
        return $this->__soapCall('GetSalesProcessHoldSetupByKey', array($parameters));
    }

    /**
     * @param GetSalespersonCommissionsByKey $parameters
     * @return GetSalespersonCommissionsByKeyResponse
     */
    public function GetSalespersonCommissionsByKey(GetSalespersonCommissionsByKey $parameters)
    {
        return $this->__soapCall('GetSalespersonCommissionsByKey', array($parameters));
    }

    /**
     * @param GetSalesDocumentList $parameters
     * @return GetSalesDocumentListResponse
     */
    public function GetSalesDocumentList(GetSalesDocumentList $parameters)
    {
        return $this->__soapCall('GetSalesDocumentList', array($parameters));
    }

    /**
     * @param GetSalesOrderList $parameters
     * @return GetSalesOrderListResponse
     */
    public function GetSalesOrderList(GetSalesOrderList $parameters)
    {
        return $this->__soapCall('GetSalesOrderList', array($parameters));
    }

    /**
     * @param GetSalesInvoiceList $parameters
     * @return GetSalesInvoiceListResponse
     */
    public function GetSalesInvoiceList(GetSalesInvoiceList $parameters)
    {
        return $this->__soapCall('GetSalesInvoiceList', array($parameters));
    }

    /**
     * @param GetSalesReturnList $parameters
     * @return GetSalesReturnListResponse
     */
    public function GetSalesReturnList(GetSalesReturnList $parameters)
    {
        return $this->__soapCall('GetSalesReturnList', array($parameters));
    }

    /**
     * @param GetSalesBackorderList $parameters
     * @return GetSalesBackorderListResponse
     */
    public function GetSalesBackorderList(GetSalesBackorderList $parameters)
    {
        return $this->__soapCall('GetSalesBackorderList', array($parameters));
    }

    /**
     * @param GetSalesFulfillmentOrderList $parameters
     * @return GetSalesFulfillmentOrderListResponse
     */
    public function GetSalesFulfillmentOrderList(GetSalesFulfillmentOrderList $parameters)
    {
        return $this->__soapCall('GetSalesFulfillmentOrderList', array($parameters));
    }

    /**
     * @param GetSalesQuoteList $parameters
     * @return GetSalesQuoteListResponse
     */
    public function GetSalesQuoteList(GetSalesQuoteList $parameters)
    {
        return $this->__soapCall('GetSalesQuoteList', array($parameters));
    }

    /**
     * @param GetSalesProcessHoldSetupList $parameters
     * @return GetSalesProcessHoldSetupListResponse
     */
    public function GetSalesProcessHoldSetupList(GetSalesProcessHoldSetupList $parameters)
    {
        return $this->__soapCall('GetSalesProcessHoldSetupList', array($parameters));
    }

    /**
     * @param GetSalespersonCommissionsList $parameters
     * @return GetSalespersonCommissionsListResponse
     */
    public function GetSalespersonCommissionsList(GetSalespersonCommissionsList $parameters)
    {
        return $this->__soapCall('GetSalespersonCommissionsList', array($parameters));
    }

    /**
     * @param GetChangedSalesOrderKeyList $parameters
     * @return GetChangedSalesOrderKeyListResponse
     */
    public function GetChangedSalesOrderKeyList(GetChangedSalesOrderKeyList $parameters)
    {
        return $this->__soapCall('GetChangedSalesOrderKeyList', array($parameters));
    }

    /**
     * @param GetChangedSalesInvoiceKeyList $parameters
     * @return GetChangedSalesInvoiceKeyListResponse
     */
    public function GetChangedSalesInvoiceKeyList(GetChangedSalesInvoiceKeyList $parameters)
    {
        return $this->__soapCall('GetChangedSalesInvoiceKeyList', array($parameters));
    }

    /**
     * @param GetDynamicsOnlineConfigurationByKey $parameters
     * @return GetDynamicsOnlineConfigurationByKeyResponse
     */
    public function GetDynamicsOnlineConfigurationByKey(GetDynamicsOnlineConfigurationByKey $parameters)
    {
        return $this->__soapCall('GetDynamicsOnlineConfigurationByKey', array($parameters));
    }

    /**
     * @param GetDynamicsOnlineConfigurationList $parameters
     * @return GetDynamicsOnlineConfigurationListResponse
     */
    public function GetDynamicsOnlineConfigurationList(GetDynamicsOnlineConfigurationList $parameters)
    {
        return $this->__soapCall('GetDynamicsOnlineConfigurationList', array($parameters));
    }

}
