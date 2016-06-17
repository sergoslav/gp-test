<?php

class BetweenRestrictionOfNullableOfHRRequisitionStatus extends ListRestrictionOfNullableOfHRRequisitionStatus
{

    /**
     * @var HRRequisitionStatus $From
     */
    protected $From = null;

    /**
     * @var HRRequisitionStatus $GreaterThan
     */
    protected $GreaterThan = null;

    /**
     * @var HRRequisitionStatus $LessThan
     */
    protected $LessThan = null;

    /**
     * @var HRRequisitionStatus $To
     */
    protected $To = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return HRRequisitionStatus
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param HRRequisitionStatus $From
     * @return BetweenRestrictionOfNullableOfHRRequisitionStatus
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return HRRequisitionStatus
     */
    public function getGreaterThan()
    {
      return $this->GreaterThan;
    }

    /**
     * @param HRRequisitionStatus $GreaterThan
     * @return BetweenRestrictionOfNullableOfHRRequisitionStatus
     */
    public function setGreaterThan($GreaterThan)
    {
      $this->GreaterThan = $GreaterThan;
      return $this;
    }

    /**
     * @return HRRequisitionStatus
     */
    public function getLessThan()
    {
      return $this->LessThan;
    }

    /**
     * @param HRRequisitionStatus $LessThan
     * @return BetweenRestrictionOfNullableOfHRRequisitionStatus
     */
    public function setLessThan($LessThan)
    {
      $this->LessThan = $LessThan;
      return $this;
    }

    /**
     * @return HRRequisitionStatus
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param HRRequisitionStatus $To
     * @return BetweenRestrictionOfNullableOfHRRequisitionStatus
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
