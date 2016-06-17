<?php

class ApplicationColor
{

    /**
     * @var ApplicationColorCode $ColorCode
     */
    protected $ColorCode = null;

    /**
     * @var string $ColorName
     */
    protected $ColorName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicationColorCode
     */
    public function getColorCode()
    {
      return $this->ColorCode;
    }

    /**
     * @param ApplicationColorCode $ColorCode
     * @return ApplicationColor
     */
    public function setColorCode($ColorCode)
    {
      $this->ColorCode = $ColorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getColorName()
    {
      return $this->ColorName;
    }

    /**
     * @param string $ColorName
     * @return ApplicationColor
     */
    public function setColorName($ColorName)
    {
      $this->ColorName = $ColorName;
      return $this;
    }

}
