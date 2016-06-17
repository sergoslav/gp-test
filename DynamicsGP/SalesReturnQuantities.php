<?php

class SalesReturnQuantities
{

    /**
     * @var Quantity $DamagedQuantity
     */
    protected $DamagedQuantity = null;

    /**
     * @var Quantity $InServiceQuantity
     */
    protected $InServiceQuantity = null;

    /**
     * @var Quantity $InUseQuantity
     */
    protected $InUseQuantity = null;

    /**
     * @var Quantity $OnHandQuantity
     */
    protected $OnHandQuantity = null;

    /**
     * @var Quantity $ReturnedQuantity
     */
    protected $ReturnedQuantity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Quantity
     */
    public function getDamagedQuantity()
    {
      return $this->DamagedQuantity;
    }

    /**
     * @param Quantity $DamagedQuantity
     * @return SalesReturnQuantities
     */
    public function setDamagedQuantity($DamagedQuantity)
    {
      $this->DamagedQuantity = $DamagedQuantity;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getInServiceQuantity()
    {
      return $this->InServiceQuantity;
    }

    /**
     * @param Quantity $InServiceQuantity
     * @return SalesReturnQuantities
     */
    public function setInServiceQuantity($InServiceQuantity)
    {
      $this->InServiceQuantity = $InServiceQuantity;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getInUseQuantity()
    {
      return $this->InUseQuantity;
    }

    /**
     * @param Quantity $InUseQuantity
     * @return SalesReturnQuantities
     */
    public function setInUseQuantity($InUseQuantity)
    {
      $this->InUseQuantity = $InUseQuantity;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getOnHandQuantity()
    {
      return $this->OnHandQuantity;
    }

    /**
     * @param Quantity $OnHandQuantity
     * @return SalesReturnQuantities
     */
    public function setOnHandQuantity($OnHandQuantity)
    {
      $this->OnHandQuantity = $OnHandQuantity;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getReturnedQuantity()
    {
      return $this->ReturnedQuantity;
    }

    /**
     * @param Quantity $ReturnedQuantity
     * @return SalesReturnQuantities
     */
    public function setReturnedQuantity($ReturnedQuantity)
    {
      $this->ReturnedQuantity = $ReturnedQuantity;
      return $this;
    }

}
