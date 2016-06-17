<?php

class BetweenRestrictionOfNullableOfEmployeePayTypes extends ListRestrictionOfNullableOfEmployeePayTypes
{

    /**
     * @var EmployeePayTypes $From
     */
    protected $From = null;

    /**
     * @var EmployeePayTypes $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var EmployeePayTypes $LessThan
     */
    protected $LessThan = null;

    /**
     * @var EmployeePayTypes $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return EmployeePayTypes
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param EmployeePayTypes $From
     * @return BetweenRestrictionOfNullableOfEmployeePayTypes
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return EmployeePayTypes
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param EmployeePayTypes $GreaterThan
     * @return BetweenRestrictionOfNullableOfEmployeePayTypes
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return EmployeePayTypes
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param EmployeePayTypes $LessThan
     * @return BetweenRestrictionOfNullableOfEmployeePayTypes
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return EmployeePayTypes
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param EmployeePayTypes $To
     * @return BetweenRestrictionOfNullableOfEmployeePayTypes
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
