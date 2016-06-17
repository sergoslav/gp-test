<?php

class SalesUserDefined
{

    /**
     * @var \DateTime $Date01
     */
    protected $Date01 = null;

    /**
     * @var \DateTime $Date02
     */
    protected $Date02 = null;

    /**
     * @var string $List01
     */
    protected $List01 = null;

    /**
     * @var string $List02
     */
    protected $List02 = null;

    /**
     * @var string $List03
     */
    protected $List03 = null;

    /**
     * @var string $Text01
     */
    protected $Text01 = null;

    /**
     * @var string $Text02
     */
    protected $Text02 = null;

    /**
     * @var string $Text03
     */
    protected $Text03 = null;

    /**
     * @var string $Text04
     */
    protected $Text04 = null;

    /**
     * @var string $Text05
     */
    protected $Text05 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getDate01()
    {
      if ($this->Date01 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date01);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date01
     * @return SalesUserDefined
     */
    public function setDate01(\DateTime $Date01 = null)
    {
      if ($Date01 == null) {
       $this->Date01 = null;
      } else {
        $this->Date01 = $Date01->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate02()
    {
      if ($this->Date02 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date02);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date02
     * @return SalesUserDefined
     */
    public function setDate02(\DateTime $Date02 = null)
    {
      if ($Date02 == null) {
       $this->Date02 = null;
      } else {
        $this->Date02 = $Date02->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getList01()
    {
      return $this->List01;
    }

    /**
     * @param string $List01
     * @return SalesUserDefined
     */
    public function setList01($List01)
    {
      $this->List01 = $List01;
      return $this;
    }

    /**
     * @return string
     */
    public function getList02()
    {
      return $this->List02;
    }

    /**
     * @param string $List02
     * @return SalesUserDefined
     */
    public function setList02($List02)
    {
      $this->List02 = $List02;
      return $this;
    }

    /**
     * @return string
     */
    public function getList03()
    {
      return $this->List03;
    }

    /**
     * @param string $List03
     * @return SalesUserDefined
     */
    public function setList03($List03)
    {
      $this->List03 = $List03;
      return $this;
    }

    /**
     * @return string
     */
    public function getText01()
    {
      return $this->Text01;
    }

    /**
     * @param string $Text01
     * @return SalesUserDefined
     */
    public function setText01($Text01)
    {
      $this->Text01 = $Text01;
      return $this;
    }

    /**
     * @return string
     */
    public function getText02()
    {
      return $this->Text02;
    }

    /**
     * @param string $Text02
     * @return SalesUserDefined
     */
    public function setText02($Text02)
    {
      $this->Text02 = $Text02;
      return $this;
    }

    /**
     * @return string
     */
    public function getText03()
    {
      return $this->Text03;
    }

    /**
     * @param string $Text03
     * @return SalesUserDefined
     */
    public function setText03($Text03)
    {
      $this->Text03 = $Text03;
      return $this;
    }

    /**
     * @return string
     */
    public function getText04()
    {
      return $this->Text04;
    }

    /**
     * @param string $Text04
     * @return SalesUserDefined
     */
    public function setText04($Text04)
    {
      $this->Text04 = $Text04;
      return $this;
    }

    /**
     * @return string
     */
    public function getText05()
    {
      return $this->Text05;
    }

    /**
     * @param string $Text05
     * @return SalesUserDefined
     */
    public function setText05($Text05)
    {
      $this->Text05 = $Text05;
      return $this;
    }

}
