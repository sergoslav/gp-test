<?php

class EmailRecipients
{

    /**
     * @var ArrayOfstring $BCC
     */
    protected $BCC = null;

    /**
     * @var ArrayOfstring $CC
     */
    protected $CC = null;

    /**
     * @var ArrayOfstring $To
     */
    protected $To = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfstring
     */
    public function getBCC()
    {
      return $this->BCC;
    }

    /**
     * @param ArrayOfstring $BCC
     * @return EmailRecipients
     */
    public function setBCC($BCC)
    {
      $this->BCC = $BCC;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCC()
    {
      return $this->CC;
    }

    /**
     * @param ArrayOfstring $CC
     * @return EmailRecipients
     */
    public function setCC($CC)
    {
      $this->CC = $CC;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param ArrayOfstring $To
     * @return EmailRecipients
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
