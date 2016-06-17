<?php

class ServiceQuote extends ServiceCallDocument
{

    /**
     * @var ArrayOfServiceQuoteAdditionalChargeLine $AdditionalCharges
     */
    protected $AdditionalCharges = null;

    /**
     * @var ArrayOfServiceEquipmentCode $EquipmentCodes
     */
    protected $EquipmentCodes = null;

    /**
     * @var ArrayOfServiceQuoteExpenseLine $Expenses
     */
    protected $Expenses = null;

    /**
     * @var ArrayOfServiceQuoteLaborLine $Labor
     */
    protected $Labor = null;

    /**
     * @var ArrayOfServiceQuotePartLine $Parts
     */
    protected $Parts = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfServiceQuoteAdditionalChargeLine
     */
    public function getAdditionalCharges()
    {
      return $this->AdditionalCharges;
    }

    /**
     * @param ArrayOfServiceQuoteAdditionalChargeLine $AdditionalCharges
     * @return ServiceQuote
     */
    public function setAdditionalCharges($AdditionalCharges)
    {
      $this->AdditionalCharges = $AdditionalCharges;
      return $this;
    }

    /**
     * @return ArrayOfServiceEquipmentCode
     */
    public function getEquipmentCodes()
    {
      return $this->EquipmentCodes;
    }

    /**
     * @param ArrayOfServiceEquipmentCode $EquipmentCodes
     * @return ServiceQuote
     */
    public function setEquipmentCodes($EquipmentCodes)
    {
      $this->EquipmentCodes = $EquipmentCodes;
      return $this;
    }

    /**
     * @return ArrayOfServiceQuoteExpenseLine
     */
    public function getExpenses()
    {
      return $this->Expenses;
    }

    /**
     * @param ArrayOfServiceQuoteExpenseLine $Expenses
     * @return ServiceQuote
     */
    public function setExpenses($Expenses)
    {
      $this->Expenses = $Expenses;
      return $this;
    }

    /**
     * @return ArrayOfServiceQuoteLaborLine
     */
    public function getLabor()
    {
      return $this->Labor;
    }

    /**
     * @param ArrayOfServiceQuoteLaborLine $Labor
     * @return ServiceQuote
     */
    public function setLabor($Labor)
    {
      $this->Labor = $Labor;
      return $this;
    }

    /**
     * @return ArrayOfServiceQuotePartLine
     */
    public function getParts()
    {
      return $this->Parts;
    }

    /**
     * @param ArrayOfServiceQuotePartLine $Parts
     * @return ServiceQuote
     */
    public function setParts($Parts)
    {
      $this->Parts = $Parts;
      return $this;
    }

}
