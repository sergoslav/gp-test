<?php

class ReturnMaterialAuthorizationAudit extends ServiceAudit
{

    /**
     * @var ReturnMaterialAuthorizationStatusCodeKey $FromReturnStatusCodeKey
     */
    protected $FromReturnStatusCodeKey = null;

    /**
     * @var ServiceLineDetailKey $Key
     */
    protected $Key = null;

    /**
     * @var float $LineSequenceNumber
     */
    protected $LineSequenceNumber = null;

    /**
     * @var ReturnMaterialAuthorizationStatusCodeKey $ToReturnStatusCodeKey
     */
    protected $ToReturnStatusCodeKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ReturnMaterialAuthorizationStatusCodeKey
     */
    public function getFromReturnStatusCodeKey()
    {
      return $this->FromReturnStatusCodeKey;
    }

    /**
     * @param ReturnMaterialAuthorizationStatusCodeKey $FromReturnStatusCodeKey
     * @return ReturnMaterialAuthorizationAudit
     */
    public function setFromReturnStatusCodeKey($FromReturnStatusCodeKey)
    {
      $this->FromReturnStatusCodeKey = $FromReturnStatusCodeKey;
      return $this;
    }

    /**
     * @return ServiceLineDetailKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ServiceLineDetailKey $Key
     * @return ReturnMaterialAuthorizationAudit
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return float
     */
    public function getLineSequenceNumber()
    {
      return $this->LineSequenceNumber;
    }

    /**
     * @param float $LineSequenceNumber
     * @return ReturnMaterialAuthorizationAudit
     */
    public function setLineSequenceNumber($LineSequenceNumber)
    {
      $this->LineSequenceNumber = $LineSequenceNumber;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationStatusCodeKey
     */
    public function getToReturnStatusCodeKey()
    {
      return $this->ToReturnStatusCodeKey;
    }

    /**
     * @param ReturnMaterialAuthorizationStatusCodeKey $ToReturnStatusCodeKey
     * @return ReturnMaterialAuthorizationAudit
     */
    public function setToReturnStatusCodeKey($ToReturnStatusCodeKey)
    {
      $this->ToReturnStatusCodeKey = $ToReturnStatusCodeKey;
      return $this;
    }

}
