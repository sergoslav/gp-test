<?php

class ServiceEquipmentCode extends BusinessObject
{

    /**
     * @var ServiceCallLineCauseCodeKey $CauseCodeKey
     */
    protected $CauseCodeKey = null;

    /**
     * @var int $EquipmentLineSequenceNumber
     */
    protected $EquipmentLineSequenceNumber = null;

    /**
     * @var ItemKey $ItemKey
     */
    protected $ItemKey = null;

    /**
     * @var ServiceLineKey $Key
     */
    protected $Key = null;

    /**
     * @var ServiceCallLineProblemCodeKey $ProblemCodeKey
     */
    protected $ProblemCodeKey = null;

    /**
     * @var ServiceCallLineRepairCodeKey $RepairCodeKey
     */
    protected $RepairCodeKey = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ServiceCallLineCauseCodeKey
     */
    public function getCauseCodeKey()
    {
      return $this->CauseCodeKey;
    }

    /**
     * @param ServiceCallLineCauseCodeKey $CauseCodeKey
     * @return ServiceEquipmentCode
     */
    public function setCauseCodeKey($CauseCodeKey)
    {
      $this->CauseCodeKey = $CauseCodeKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getEquipmentLineSequenceNumber()
    {
      return $this->EquipmentLineSequenceNumber;
    }

    /**
     * @param int $EquipmentLineSequenceNumber
     * @return ServiceEquipmentCode
     */
    public function setEquipmentLineSequenceNumber($EquipmentLineSequenceNumber)
    {
      $this->EquipmentLineSequenceNumber = $EquipmentLineSequenceNumber;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getItemKey()
    {
      return $this->ItemKey;
    }

    /**
     * @param ItemKey $ItemKey
     * @return ServiceEquipmentCode
     */
    public function setItemKey($ItemKey)
    {
      $this->ItemKey = $ItemKey;
      return $this;
    }

    /**
     * @return ServiceLineKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ServiceLineKey $Key
     * @return ServiceEquipmentCode
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ServiceCallLineProblemCodeKey
     */
    public function getProblemCodeKey()
    {
      return $this->ProblemCodeKey;
    }

    /**
     * @param ServiceCallLineProblemCodeKey $ProblemCodeKey
     * @return ServiceEquipmentCode
     */
    public function setProblemCodeKey($ProblemCodeKey)
    {
      $this->ProblemCodeKey = $ProblemCodeKey;
      return $this;
    }

    /**
     * @return ServiceCallLineRepairCodeKey
     */
    public function getRepairCodeKey()
    {
      return $this->RepairCodeKey;
    }

    /**
     * @param ServiceCallLineRepairCodeKey $RepairCodeKey
     * @return ServiceEquipmentCode
     */
    public function setRepairCodeKey($RepairCodeKey)
    {
      $this->RepairCodeKey = $RepairCodeKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
      return $this->SerialNumber;
    }

    /**
     * @param string $SerialNumber
     * @return ServiceEquipmentCode
     */
    public function setSerialNumber($SerialNumber)
    {
      $this->SerialNumber = $SerialNumber;
      return $this;
    }

}
