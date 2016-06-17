<?php

class FeeSummary extends ItemSummaryBase
{

    /**
     * @var FeeType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FeeType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param FeeType $Type
     * @return FeeSummary
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
