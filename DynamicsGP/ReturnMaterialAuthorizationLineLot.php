<?php

class ReturnMaterialAuthorizationLineLot extends ServiceLot
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
     * @var boolean $IsOriginalLot
     */
    protected $IsOriginalLot = null;

    
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
     * @return ReturnMaterialAuthorizationLineLot
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
     * @return ReturnMaterialAuthorizationLineLot
     */
    public function setIsMarked($IsMarked)
    {
      $this->IsMarked = $IsMarked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOriginalLot()
    {
      return $this->IsOriginalLot;
    }

    /**
     * @param boolean $IsOriginalLot
     * @return ReturnMaterialAuthorizationLineLot
     */
    public function setIsOriginalLot($IsOriginalLot)
    {
      $this->IsOriginalLot = $IsOriginalLot;
      return $this;
    }

}
