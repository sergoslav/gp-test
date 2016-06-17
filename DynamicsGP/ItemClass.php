<?php

class ItemClass extends BusinessObject
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ItemClassKey $Key
     */
    protected $Key = null;

    /**
     * @var ItemType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return ItemClass
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ItemClassKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ItemClassKey $Key
     * @return ItemClass
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ItemType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ItemType $Type
     * @return ItemClass
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
