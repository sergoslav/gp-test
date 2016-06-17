<?php

class Name
{

    /**
     * @var string $Alternate
     */
    protected $Alternate = null;

    /**
     * @var string $Family
     */
    protected $Family = null;

    /**
     * @var string $Given
     */
    protected $Given = null;

    /**
     * @var string $Middle
     */
    protected $Middle = null;

    /**
     * @var string $Preferred
     */
    protected $Preferred = null;

    /**
     * @var string $Suffix
     */
    protected $Suffix = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAlternate()
    {
      return $this->Alternate;
    }

    /**
     * @param string $Alternate
     * @return Name
     */
    public function setAlternate($Alternate)
    {
      $this->Alternate = $Alternate;
      return $this;
    }

    /**
     * @return string
     */
    public function getFamily()
    {
      return $this->Family;
    }

    /**
     * @param string $Family
     * @return Name
     */
    public function setFamily($Family)
    {
      $this->Family = $Family;
      return $this;
    }

    /**
     * @return string
     */
    public function getGiven()
    {
      return $this->Given;
    }

    /**
     * @param string $Given
     * @return Name
     */
    public function setGiven($Given)
    {
      $this->Given = $Given;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddle()
    {
      return $this->Middle;
    }

    /**
     * @param string $Middle
     * @return Name
     */
    public function setMiddle($Middle)
    {
      $this->Middle = $Middle;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferred()
    {
      return $this->Preferred;
    }

    /**
     * @param string $Preferred
     * @return Name
     */
    public function setPreferred($Preferred)
    {
      $this->Preferred = $Preferred;
      return $this;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
      return $this->Suffix;
    }

    /**
     * @param string $Suffix
     * @return Name
     */
    public function setSuffix($Suffix)
    {
      $this->Suffix = $Suffix;
      return $this;
    }

}
