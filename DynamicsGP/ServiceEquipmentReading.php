<?php

class ServiceEquipmentReading extends BusinessObject
{

    /**
     * @var ServiceEquipmentReadingKey $Key
     */
    protected $Key = null;

    /**
     * @var ServiceEquipmentMeter $Meter1
     */
    protected $Meter1 = null;

    /**
     * @var ServiceEquipmentMeter $Meter2
     */
    protected $Meter2 = null;

    /**
     * @var ServiceEquipmentMeter $Meter3
     */
    protected $Meter3 = null;

    /**
     * @var ServiceEquipmentMeter $Meter4
     */
    protected $Meter4 = null;

    /**
     * @var ServiceEquipmentMeter $Meter5
     */
    protected $Meter5 = null;

    /**
     * @var string $ModifiedBy
     */
    protected $ModifiedBy = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var string $ReadingEnteredFrom
     */
    protected $ReadingEnteredFrom = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ServiceEquipmentReadingKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ServiceEquipmentReadingKey $Key
     * @return ServiceEquipmentReading
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ServiceEquipmentMeter
     */
    public function getMeter1()
    {
      return $this->Meter1;
    }

    /**
     * @param ServiceEquipmentMeter $Meter1
     * @return ServiceEquipmentReading
     */
    public function setMeter1($Meter1)
    {
      $this->Meter1 = $Meter1;
      return $this;
    }

    /**
     * @return ServiceEquipmentMeter
     */
    public function getMeter2()
    {
      return $this->Meter2;
    }

    /**
     * @param ServiceEquipmentMeter $Meter2
     * @return ServiceEquipmentReading
     */
    public function setMeter2($Meter2)
    {
      $this->Meter2 = $Meter2;
      return $this;
    }

    /**
     * @return ServiceEquipmentMeter
     */
    public function getMeter3()
    {
      return $this->Meter3;
    }

    /**
     * @param ServiceEquipmentMeter $Meter3
     * @return ServiceEquipmentReading
     */
    public function setMeter3($Meter3)
    {
      $this->Meter3 = $Meter3;
      return $this;
    }

    /**
     * @return ServiceEquipmentMeter
     */
    public function getMeter4()
    {
      return $this->Meter4;
    }

    /**
     * @param ServiceEquipmentMeter $Meter4
     * @return ServiceEquipmentReading
     */
    public function setMeter4($Meter4)
    {
      $this->Meter4 = $Meter4;
      return $this;
    }

    /**
     * @return ServiceEquipmentMeter
     */
    public function getMeter5()
    {
      return $this->Meter5;
    }

    /**
     * @param ServiceEquipmentMeter $Meter5
     * @return ServiceEquipmentReading
     */
    public function setMeter5($Meter5)
    {
      $this->Meter5 = $Meter5;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
      return $this->ModifiedBy;
    }

    /**
     * @param string $ModifiedBy
     * @return ServiceEquipmentReading
     */
    public function setModifiedBy($ModifiedBy)
    {
      $this->ModifiedBy = $ModifiedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate()
    {
      if ($this->ModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDate
     * @return ServiceEquipmentReading
     */
    public function setModifiedDate(\DateTime $ModifiedDate = null)
    {
      if ($ModifiedDate == null) {
       $this->ModifiedDate = null;
      } else {
        $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getReadingEnteredFrom()
    {
      return $this->ReadingEnteredFrom;
    }

    /**
     * @param string $ReadingEnteredFrom
     * @return ServiceEquipmentReading
     */
    public function setReadingEnteredFrom($ReadingEnteredFrom)
    {
      $this->ReadingEnteredFrom = $ReadingEnteredFrom;
      return $this;
    }

}
