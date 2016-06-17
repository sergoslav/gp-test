<?php

class ServiceLinePurchaseOrderCreation
{

    /**
     * @var boolean $ConsolidateOnPO
     */
    protected $ConsolidateOnPO = null;

    /**
     * @var boolean $CreatePO
     */
    protected $CreatePO = null;

    /**
     * @var \DateTime $PromiseDate
     */
    protected $PromiseDate = null;

    /**
     * @var VendorKey $VendorKey
     */
    protected $VendorKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getConsolidateOnPO()
    {
      return $this->ConsolidateOnPO;
    }

    /**
     * @param boolean $ConsolidateOnPO
     * @return ServiceLinePurchaseOrderCreation
     */
    public function setConsolidateOnPO($ConsolidateOnPO)
    {
      $this->ConsolidateOnPO = $ConsolidateOnPO;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCreatePO()
    {
      return $this->CreatePO;
    }

    /**
     * @param boolean $CreatePO
     * @return ServiceLinePurchaseOrderCreation
     */
    public function setCreatePO($CreatePO)
    {
      $this->CreatePO = $CreatePO;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPromiseDate()
    {
      if ($this->PromiseDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PromiseDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PromiseDate
     * @return ServiceLinePurchaseOrderCreation
     */
    public function setPromiseDate(\DateTime $PromiseDate = null)
    {
      if ($PromiseDate == null) {
       $this->PromiseDate = null;
      } else {
        $this->PromiseDate = $PromiseDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return VendorKey
     */
    public function getVendorKey()
    {
      return $this->VendorKey;
    }

    /**
     * @param VendorKey $VendorKey
     * @return ServiceLinePurchaseOrderCreation
     */
    public function setVendorKey($VendorKey)
    {
      $this->VendorKey = $VendorKey;
      return $this;
    }

}
