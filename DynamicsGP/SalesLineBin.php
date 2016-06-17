<?php

class SalesLineBin extends SalesBin
{

    /**
     * @var SalesLineBinKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalesLineBinKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesLineBinKey $Key
     * @return SalesLineBin
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
