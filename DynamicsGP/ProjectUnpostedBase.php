<?php

class ProjectUnpostedBase extends ProjectAmount
{

    /**
     * @var MoneyAmount $LossAmount
     */
    protected $LossAmount = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getLossAmount()
    {
      return $this->LossAmount;
    }

    /**
     * @param MoneyAmount $LossAmount
     * @return ProjectUnpostedBase
     */
    public function setLossAmount($LossAmount)
    {
      $this->LossAmount = $LossAmount;
      return $this;
    }

}
