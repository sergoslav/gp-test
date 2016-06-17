<?php

class ReturnMaterialAuthorizationLineSerial extends ServiceSerial
{

    /**
     * @var boolean $IsForReplacement
     */
    protected $IsForReplacement = null;

    /**
     * @var boolean $IsMarked
     */
    protected $IsMarked = null;

    /**
     * @var boolean $IsOriginalSerial
     */
    protected $IsOriginalSerial = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getIsForReplacement()
    {
      return $this->IsForReplacement;
    }

    /**
     * @param boolean $IsForReplacement
     * @return ReturnMaterialAuthorizationLineSerial
     */
    public function setIsForReplacement($IsForReplacement)
    {
      $this->IsForReplacement = $IsForReplacement;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMarked()
    {
      return $this->IsMarked;
    }

    /**
     * @param boolean $IsMarked
     * @return ReturnMaterialAuthorizationLineSerial
     */
    public function setIsMarked($IsMarked)
    {
      $this->IsMarked = $IsMarked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOriginalSerial()
    {
      return $this->IsOriginalSerial;
    }

    /**
     * @param boolean $IsOriginalSerial
     * @return ReturnMaterialAuthorizationLineSerial
     */
    public function setIsOriginalSerial($IsOriginalSerial)
    {
      $this->IsOriginalSerial = $IsOriginalSerial;
      return $this;
    }

}
