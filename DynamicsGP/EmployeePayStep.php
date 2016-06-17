<?php

class EmployeePayStep
{

    /**
     * @var EmployeeBaseStepIncreasedOn $BasedOn
     */
    protected $BasedOn = null;

    /**
     * @var \DateTime $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var PayStepKey $PayStepKey
     */
    protected $PayStepKey = null;

    /**
     * @var int $Step
     */
    protected $Step = null;

    /**
     * @var float $StepFTE
     */
    protected $StepFTE = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmployeeBaseStepIncreasedOn
     */
    public function getBasedOn()
    {
      return $this->BasedOn;
    }

    /**
     * @param EmployeeBaseStepIncreasedOn $BasedOn
     * @return EmployeePayStep
     */
    public function setBasedOn($BasedOn)
    {
      $this->BasedOn = $BasedOn;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
      if ($this->EffectiveDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EffectiveDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EffectiveDate
     * @return EmployeePayStep
     */
    public function setEffectiveDate(\DateTime $EffectiveDate = null)
    {
      if ($EffectiveDate == null) {
       $this->EffectiveDate = null;
      } else {
        $this->EffectiveDate = $EffectiveDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return PayStepKey
     */
    public function getPayStepKey()
    {
      return $this->PayStepKey;
    }

    /**
     * @param PayStepKey $PayStepKey
     * @return EmployeePayStep
     */
    public function setPayStepKey($PayStepKey)
    {
      $this->PayStepKey = $PayStepKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getStep()
    {
      return $this->Step;
    }

    /**
     * @param int $Step
     * @return EmployeePayStep
     */
    public function setStep($Step)
    {
      $this->Step = $Step;
      return $this;
    }

    /**
     * @return float
     */
    public function getStepFTE()
    {
      return $this->StepFTE;
    }

    /**
     * @param float $StepFTE
     * @return EmployeePayStep
     */
    public function setStepFTE($StepFTE)
    {
      $this->StepFTE = $StepFTE;
      return $this;
    }

}
