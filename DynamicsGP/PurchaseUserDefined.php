<?php

class PurchaseUserDefined extends BusinessObject
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
     * @var \DateTime $Date03
     */
    protected $Date03 = null;

    /**
     * @var \DateTime $Date04
     */
    protected $Date04 = null;

    /**
     * @var \DateTime $Date05
     */
    protected $Date05 = null;

    /**
     * @var \DateTime $Date06
     */
    protected $Date06 = null;

    /**
     * @var \DateTime $Date07
     */
    protected $Date07 = null;

    /**
     * @var \DateTime $Date08
     */
    protected $Date08 = null;

    /**
     * @var \DateTime $Date09
     */
    protected $Date09 = null;

    /**
     * @var \DateTime $Date10
     */
    protected $Date10 = null;

    /**
     * @var \DateTime $Date11
     */
    protected $Date11 = null;

    /**
     * @var \DateTime $Date12
     */
    protected $Date12 = null;

    /**
     * @var \DateTime $Date13
     */
    protected $Date13 = null;

    /**
     * @var \DateTime $Date14
     */
    protected $Date14 = null;

    /**
     * @var \DateTime $Date15
     */
    protected $Date15 = null;

    /**
     * @var \DateTime $Date16
     */
    protected $Date16 = null;

    /**
     * @var \DateTime $Date17
     */
    protected $Date17 = null;

    /**
     * @var \DateTime $Date18
     */
    protected $Date18 = null;

    /**
     * @var \DateTime $Date19
     */
    protected $Date19 = null;

    /**
     * @var \DateTime $Date20
     */
    protected $Date20 = null;

    /**
     * @var PurchaseUserDefinedKey $Key
     */
    protected $Key = null;

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
     * @var string $List04
     */
    protected $List04 = null;

    /**
     * @var string $List05
     */
    protected $List05 = null;

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

    /**
     * @var string $Text06
     */
    protected $Text06 = null;

    /**
     * @var string $Text07
     */
    protected $Text07 = null;

    /**
     * @var string $Text08
     */
    protected $Text08 = null;

    /**
     * @var string $Text09
     */
    protected $Text09 = null;

    /**
     * @var string $Text10
     */
    protected $Text10 = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return PurchaseUserDefined
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
     * @return PurchaseUserDefined
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
     * @return \DateTime
     */
    public function getDate03()
    {
      if ($this->Date03 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date03);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date03
     * @return PurchaseUserDefined
     */
    public function setDate03(\DateTime $Date03 = null)
    {
      if ($Date03 == null) {
       $this->Date03 = null;
      } else {
        $this->Date03 = $Date03->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate04()
    {
      if ($this->Date04 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date04);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date04
     * @return PurchaseUserDefined
     */
    public function setDate04(\DateTime $Date04 = null)
    {
      if ($Date04 == null) {
       $this->Date04 = null;
      } else {
        $this->Date04 = $Date04->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate05()
    {
      if ($this->Date05 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date05);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date05
     * @return PurchaseUserDefined
     */
    public function setDate05(\DateTime $Date05 = null)
    {
      if ($Date05 == null) {
       $this->Date05 = null;
      } else {
        $this->Date05 = $Date05->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate06()
    {
      if ($this->Date06 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date06);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date06
     * @return PurchaseUserDefined
     */
    public function setDate06(\DateTime $Date06 = null)
    {
      if ($Date06 == null) {
       $this->Date06 = null;
      } else {
        $this->Date06 = $Date06->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate07()
    {
      if ($this->Date07 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date07);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date07
     * @return PurchaseUserDefined
     */
    public function setDate07(\DateTime $Date07 = null)
    {
      if ($Date07 == null) {
       $this->Date07 = null;
      } else {
        $this->Date07 = $Date07->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate08()
    {
      if ($this->Date08 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date08);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date08
     * @return PurchaseUserDefined
     */
    public function setDate08(\DateTime $Date08 = null)
    {
      if ($Date08 == null) {
       $this->Date08 = null;
      } else {
        $this->Date08 = $Date08->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate09()
    {
      if ($this->Date09 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date09);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date09
     * @return PurchaseUserDefined
     */
    public function setDate09(\DateTime $Date09 = null)
    {
      if ($Date09 == null) {
       $this->Date09 = null;
      } else {
        $this->Date09 = $Date09->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate10()
    {
      if ($this->Date10 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date10);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date10
     * @return PurchaseUserDefined
     */
    public function setDate10(\DateTime $Date10 = null)
    {
      if ($Date10 == null) {
       $this->Date10 = null;
      } else {
        $this->Date10 = $Date10->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate11()
    {
      if ($this->Date11 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date11);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date11
     * @return PurchaseUserDefined
     */
    public function setDate11(\DateTime $Date11 = null)
    {
      if ($Date11 == null) {
       $this->Date11 = null;
      } else {
        $this->Date11 = $Date11->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate12()
    {
      if ($this->Date12 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date12);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date12
     * @return PurchaseUserDefined
     */
    public function setDate12(\DateTime $Date12 = null)
    {
      if ($Date12 == null) {
       $this->Date12 = null;
      } else {
        $this->Date12 = $Date12->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate13()
    {
      if ($this->Date13 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date13);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date13
     * @return PurchaseUserDefined
     */
    public function setDate13(\DateTime $Date13 = null)
    {
      if ($Date13 == null) {
       $this->Date13 = null;
      } else {
        $this->Date13 = $Date13->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate14()
    {
      if ($this->Date14 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date14);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date14
     * @return PurchaseUserDefined
     */
    public function setDate14(\DateTime $Date14 = null)
    {
      if ($Date14 == null) {
       $this->Date14 = null;
      } else {
        $this->Date14 = $Date14->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate15()
    {
      if ($this->Date15 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date15);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date15
     * @return PurchaseUserDefined
     */
    public function setDate15(\DateTime $Date15 = null)
    {
      if ($Date15 == null) {
       $this->Date15 = null;
      } else {
        $this->Date15 = $Date15->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate16()
    {
      if ($this->Date16 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date16);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date16
     * @return PurchaseUserDefined
     */
    public function setDate16(\DateTime $Date16 = null)
    {
      if ($Date16 == null) {
       $this->Date16 = null;
      } else {
        $this->Date16 = $Date16->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate17()
    {
      if ($this->Date17 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date17);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date17
     * @return PurchaseUserDefined
     */
    public function setDate17(\DateTime $Date17 = null)
    {
      if ($Date17 == null) {
       $this->Date17 = null;
      } else {
        $this->Date17 = $Date17->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate18()
    {
      if ($this->Date18 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date18);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date18
     * @return PurchaseUserDefined
     */
    public function setDate18(\DateTime $Date18 = null)
    {
      if ($Date18 == null) {
       $this->Date18 = null;
      } else {
        $this->Date18 = $Date18->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate19()
    {
      if ($this->Date19 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date19);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date19
     * @return PurchaseUserDefined
     */
    public function setDate19(\DateTime $Date19 = null)
    {
      if ($Date19 == null) {
       $this->Date19 = null;
      } else {
        $this->Date19 = $Date19->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate20()
    {
      if ($this->Date20 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date20);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date20
     * @return PurchaseUserDefined
     */
    public function setDate20(\DateTime $Date20 = null)
    {
      if ($Date20 == null) {
       $this->Date20 = null;
      } else {
        $this->Date20 = $Date20->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return PurchaseUserDefinedKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PurchaseUserDefinedKey $Key
     * @return PurchaseUserDefined
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return PurchaseUserDefined
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
     * @return PurchaseUserDefined
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
     * @return PurchaseUserDefined
     */
    public function setList03($List03)
    {
      $this->List03 = $List03;
      return $this;
    }

    /**
     * @return string
     */
    public function getList04()
    {
      return $this->List04;
    }

    /**
     * @param string $List04
     * @return PurchaseUserDefined
     */
    public function setList04($List04)
    {
      $this->List04 = $List04;
      return $this;
    }

    /**
     * @return string
     */
    public function getList05()
    {
      return $this->List05;
    }

    /**
     * @param string $List05
     * @return PurchaseUserDefined
     */
    public function setList05($List05)
    {
      $this->List05 = $List05;
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
     * @return PurchaseUserDefined
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
     * @return PurchaseUserDefined
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
     * @return PurchaseUserDefined
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
     * @return PurchaseUserDefined
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
     * @return PurchaseUserDefined
     */
    public function setText05($Text05)
    {
      $this->Text05 = $Text05;
      return $this;
    }

    /**
     * @return string
     */
    public function getText06()
    {
      return $this->Text06;
    }

    /**
     * @param string $Text06
     * @return PurchaseUserDefined
     */
    public function setText06($Text06)
    {
      $this->Text06 = $Text06;
      return $this;
    }

    /**
     * @return string
     */
    public function getText07()
    {
      return $this->Text07;
    }

    /**
     * @param string $Text07
     * @return PurchaseUserDefined
     */
    public function setText07($Text07)
    {
      $this->Text07 = $Text07;
      return $this;
    }

    /**
     * @return string
     */
    public function getText08()
    {
      return $this->Text08;
    }

    /**
     * @param string $Text08
     * @return PurchaseUserDefined
     */
    public function setText08($Text08)
    {
      $this->Text08 = $Text08;
      return $this;
    }

    /**
     * @return string
     */
    public function getText09()
    {
      return $this->Text09;
    }

    /**
     * @param string $Text09
     * @return PurchaseUserDefined
     */
    public function setText09($Text09)
    {
      $this->Text09 = $Text09;
      return $this;
    }

    /**
     * @return string
     */
    public function getText10()
    {
      return $this->Text10;
    }

    /**
     * @param string $Text10
     * @return PurchaseUserDefined
     */
    public function setText10($Text10)
    {
      $this->Text10 = $Text10;
      return $this;
    }

}
