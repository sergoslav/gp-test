<?php

class PaymentCardAccount
{

    /**
     * @var \DateTime $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var PaymentCardAccountKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
      if ($this->ExpirationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpirationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpirationDate
     * @return PaymentCardAccount
     */
    public function setExpirationDate(\DateTime $ExpirationDate = null)
    {
      if ($ExpirationDate == null) {
       $this->ExpirationDate = null;
      } else {
        $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return PaymentCardAccountKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PaymentCardAccountKey $Key
     * @return PaymentCardAccount
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
