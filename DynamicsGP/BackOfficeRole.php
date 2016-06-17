<?php

class BackOfficeRole extends BusinessObject
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var BackOfficeRoleKey $Key
     */
    protected $Key = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
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
     * @return BackOfficeRole
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return BackOfficeRoleKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param BackOfficeRoleKey $Key
     * @return BackOfficeRole
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return BackOfficeRole
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
