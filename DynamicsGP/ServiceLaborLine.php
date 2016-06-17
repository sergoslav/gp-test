<?php

class ServiceLaborLine extends ServiceLine
{

    /**
     * @var Percent $BillableLaborPercent
     */
    protected $BillableLaborPercent = null;

    /**
     * @var int $BillableTime
     */
    protected $BillableTime = null;

    /**
     * @var ServiceDistanceTraveled $DistanceTraveled
     */
    protected $DistanceTraveled = null;

    /**
     * @var \DateTime $EndDateTime
     */
    protected $EndDateTime = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var Quantity $QuantitySold
     */
    protected $QuantitySold = null;

    /**
     * @var \DateTime $StartDateTime
     */
    protected $StartDateTime = null;

    /**
     * @var MoneyAmount $TotalCost
     */
    protected $TotalCost = null;

    /**
     * @var int $TransactionTime
     */
    protected $TransactionTime = null;

    /**
     * @var ServiceLaborUseType $UseType
     */
    protected $UseType = null;

    /**
     * @var ServiceWorkTypeKey $WorkTypeKey
     */
    protected $WorkTypeKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Percent
     */
    public function getBillableLaborPercent()
    {
      return $this->BillableLaborPercent;
    }

    /**
     * @param Percent $BillableLaborPercent
     * @return ServiceLaborLine
     */
    public function setBillableLaborPercent($BillableLaborPercent)
    {
      $this->BillableLaborPercent = $BillableLaborPercent;
      return $this;
    }

    /**
     * @return int
     */
    public function getBillableTime()
    {
      return $this->BillableTime;
    }

    /**
     * @param int $BillableTime
     * @return ServiceLaborLine
     */
    public function setBillableTime($BillableTime)
    {
      $this->BillableTime = $BillableTime;
      return $this;
    }

    /**
     * @return ServiceDistanceTraveled
     */
    public function getDistanceTraveled()
    {
      return $this->DistanceTraveled;
    }

    /**
     * @param ServiceDistanceTraveled $DistanceTraveled
     * @return ServiceLaborLine
     */
    public function setDistanceTraveled($DistanceTraveled)
    {
      $this->DistanceTraveled = $DistanceTraveled;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDateTime()
    {
      if ($this->EndDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDateTime
     * @return ServiceLaborLine
     */
    public function setEndDateTime(\DateTime $EndDateTime = null)
    {
      if ($EndDateTime == null) {
       $this->EndDateTime = null;
      } else {
        $this->EndDateTime = $EndDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param Quantity $Quantity
     * @return ServiceLaborLine
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantitySold()
    {
      return $this->QuantitySold;
    }

    /**
     * @param Quantity $QuantitySold
     * @return ServiceLaborLine
     */
    public function setQuantitySold($QuantitySold)
    {
      $this->QuantitySold = $QuantitySold;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDateTime()
    {
      if ($this->StartDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDateTime
     * @return ServiceLaborLine
     */
    public function setStartDateTime(\DateTime $StartDateTime = null)
    {
      if ($StartDateTime == null) {
       $this->StartDateTime = null;
      } else {
        $this->StartDateTime = $StartDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalCost()
    {
      return $this->TotalCost;
    }

    /**
     * @param MoneyAmount $TotalCost
     * @return ServiceLaborLine
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransactionTime()
    {
      return $this->TransactionTime;
    }

    /**
     * @param int $TransactionTime
     * @return ServiceLaborLine
     */
    public function setTransactionTime($TransactionTime)
    {
      $this->TransactionTime = $TransactionTime;
      return $this;
    }

    /**
     * @return ServiceLaborUseType
     */
    public function getUseType()
    {
      return $this->UseType;
    }

    /**
     * @param ServiceLaborUseType $UseType
     * @return ServiceLaborLine
     */
    public function setUseType($UseType)
    {
      $this->UseType = $UseType;
      return $this;
    }

    /**
     * @return ServiceWorkTypeKey
     */
    public function getWorkTypeKey()
    {
      return $this->WorkTypeKey;
    }

    /**
     * @param ServiceWorkTypeKey $WorkTypeKey
     * @return ServiceLaborLine
     */
    public function setWorkTypeKey($WorkTypeKey)
    {
      $this->WorkTypeKey = $WorkTypeKey;
      return $this;
    }

}
