<?php

class HRRequisitionAdvertisingList
{

    /**
     * @var string $Line1
     */
    protected $Line1 = null;

    /**
     * @var string $Line2
     */
    protected $Line2 = null;

    /**
     * @var string $Line3
     */
    protected $Line3 = null;

    /**
     * @var string $Line4
     */
    protected $Line4 = null;

    /**
     * @var string $Line5
     */
    protected $Line5 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLine1()
    {
      return $this->Line1;
    }

    /**
     * @param string $Line1
     * @return HRRequisitionAdvertisingList
     */
    public function setLine1($Line1)
    {
      $this->Line1 = $Line1;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine2()
    {
      return $this->Line2;
    }

    /**
     * @param string $Line2
     * @return HRRequisitionAdvertisingList
     */
    public function setLine2($Line2)
    {
      $this->Line2 = $Line2;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine3()
    {
      return $this->Line3;
    }

    /**
     * @param string $Line3
     * @return HRRequisitionAdvertisingList
     */
    public function setLine3($Line3)
    {
      $this->Line3 = $Line3;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine4()
    {
      return $this->Line4;
    }

    /**
     * @param string $Line4
     * @return HRRequisitionAdvertisingList
     */
    public function setLine4($Line4)
    {
      $this->Line4 = $Line4;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine5()
    {
      return $this->Line5;
    }

    /**
     * @param string $Line5
     * @return HRRequisitionAdvertisingList
     */
    public function setLine5($Line5)
    {
      $this->Line5 = $Line5;
      return $this;
    }

}
