<?php

class MultitenantEnabledResponse
{

    /**
     * @var boolean $MultitenantEnabledResult
     */
    protected $MultitenantEnabledResult = null;

    /**
     * @param boolean $MultitenantEnabledResult
     */
    public function __construct($MultitenantEnabledResult)
    {
      $this->MultitenantEnabledResult = $MultitenantEnabledResult;
    }

    /**
     * @return boolean
     */
    public function getMultitenantEnabledResult()
    {
      return $this->MultitenantEnabledResult;
    }

    /**
     * @param boolean $MultitenantEnabledResult
     * @return MultitenantEnabledResponse
     */
    public function setMultitenantEnabledResult($MultitenantEnabledResult)
    {
      $this->MultitenantEnabledResult = $MultitenantEnabledResult;
      return $this;
    }

}
