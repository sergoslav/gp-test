<?php

class ApplicationReferenceInformation
{

    /**
     * @var ApplicationReferenceSource $Source
     */
    protected $Source = null;

    /**
     * @var string $SourceDescription
     */
    protected $SourceDescription = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicationReferenceSource
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param ApplicationReferenceSource $Source
     * @return ApplicationReferenceInformation
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceDescription()
    {
      return $this->SourceDescription;
    }

    /**
     * @param string $SourceDescription
     * @return ApplicationReferenceInformation
     */
    public function setSourceDescription($SourceDescription)
    {
      $this->SourceDescription = $SourceDescription;
      return $this;
    }

}
