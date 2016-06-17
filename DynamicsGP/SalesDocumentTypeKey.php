<?php

class SalesDocumentTypeKey extends ReferenceKey
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var SalesDocumentType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return SalesDocumentTypeKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return SalesDocumentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param SalesDocumentType $Type
     * @return SalesDocumentTypeKey
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
