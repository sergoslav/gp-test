<?php

class ReceivablesPaymentCardDetail extends PaymentCardDetail
{

    /**
     * @var BankAccountKey $BankAccountKey
     */
    protected $BankAccountKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BankAccountKey
     */
    public function getBankAccountKey()
    {
      return $this->BankAccountKey;
    }

    /**
     * @param BankAccountKey $BankAccountKey
     * @return ReceivablesPaymentCardDetail
     */
    public function setBankAccountKey($BankAccountKey)
    {
      $this->BankAccountKey = $BankAccountKey;
      return $this;
    }

}
