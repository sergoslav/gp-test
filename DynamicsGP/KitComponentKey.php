<?php

class KitComponentKey extends ReferenceKey
{

    /**
     * @var ItemKey $ItemKey
     */
    protected $ItemKey = null;

    /**
     * @var ItemKey $KitKey
     */
    protected $KitKey = null;

    /**
     * @var string $UofM
     */
    protected $UofM = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ItemKey
     */
    public function getItemKey()
    {
      return $this->ItemKey;
    }

    /**
     * @param ItemKey $ItemKey
     * @return KitComponentKey
     */
    public function setItemKey($ItemKey)
    {
      $this->ItemKey = $ItemKey;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getKitKey()
    {
      return $this->KitKey;
    }

    /**
     * @param ItemKey $KitKey
     * @return KitComponentKey
     */
    public function setKitKey($KitKey)
    {
      $this->KitKey = $KitKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getUofM()
    {
      return $this->UofM;
    }

    /**
     * @param string $UofM
     * @return KitComponentKey
     */
    public function setUofM($UofM)
    {
      $this->UofM = $UofM;
      return $this;
    }

}
