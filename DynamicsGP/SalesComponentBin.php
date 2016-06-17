<?php

class SalesComponentBin extends SalesBin
{

    /**
     * @var SalesComponentBinKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalesComponentBinKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesComponentBinKey $Key
     * @return SalesComponentBin
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
