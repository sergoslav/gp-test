<?php

class InternetAddresses
{

    /**
     * @var string $AdditionalInformation
     */
    protected $AdditionalInformation = null;

    /**
     * @var string $EmailBccAddress
     */
    protected $EmailBccAddress = null;

    /**
     * @var string $EmailCcAddress
     */
    protected $EmailCcAddress = null;

    /**
     * @var string $EmailToAddress
     */
    protected $EmailToAddress = null;

    /**
     * @var string $InternetField1
     */
    protected $InternetField1 = null;

    /**
     * @var string $InternetField2
     */
    protected $InternetField2 = null;

    /**
     * @var string $InternetField3
     */
    protected $InternetField3 = null;

    /**
     * @var string $InternetField4
     */
    protected $InternetField4 = null;

    /**
     * @var string $InternetField5
     */
    protected $InternetField5 = null;

    /**
     * @var string $InternetField6
     */
    protected $InternetField6 = null;

    /**
     * @var string $InternetField7
     */
    protected $InternetField7 = null;

    /**
     * @var string $InternetField8
     */
    protected $InternetField8 = null;

    /**
     * @var string $MessengerAddress
     */
    protected $MessengerAddress = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAdditionalInformation()
    {
      return $this->AdditionalInformation;
    }

    /**
     * @param string $AdditionalInformation
     * @return InternetAddresses
     */
    public function setAdditionalInformation($AdditionalInformation)
    {
      $this->AdditionalInformation = $AdditionalInformation;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailBccAddress()
    {
      return $this->EmailBccAddress;
    }

    /**
     * @param string $EmailBccAddress
     * @return InternetAddresses
     */
    public function setEmailBccAddress($EmailBccAddress)
    {
      $this->EmailBccAddress = $EmailBccAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailCcAddress()
    {
      return $this->EmailCcAddress;
    }

    /**
     * @param string $EmailCcAddress
     * @return InternetAddresses
     */
    public function setEmailCcAddress($EmailCcAddress)
    {
      $this->EmailCcAddress = $EmailCcAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailToAddress()
    {
      return $this->EmailToAddress;
    }

    /**
     * @param string $EmailToAddress
     * @return InternetAddresses
     */
    public function setEmailToAddress($EmailToAddress)
    {
      $this->EmailToAddress = $EmailToAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternetField1()
    {
      return $this->InternetField1;
    }

    /**
     * @param string $InternetField1
     * @return InternetAddresses
     */
    public function setInternetField1($InternetField1)
    {
      $this->InternetField1 = $InternetField1;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternetField2()
    {
      return $this->InternetField2;
    }

    /**
     * @param string $InternetField2
     * @return InternetAddresses
     */
    public function setInternetField2($InternetField2)
    {
      $this->InternetField2 = $InternetField2;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternetField3()
    {
      return $this->InternetField3;
    }

    /**
     * @param string $InternetField3
     * @return InternetAddresses
     */
    public function setInternetField3($InternetField3)
    {
      $this->InternetField3 = $InternetField3;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternetField4()
    {
      return $this->InternetField4;
    }

    /**
     * @param string $InternetField4
     * @return InternetAddresses
     */
    public function setInternetField4($InternetField4)
    {
      $this->InternetField4 = $InternetField4;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternetField5()
    {
      return $this->InternetField5;
    }

    /**
     * @param string $InternetField5
     * @return InternetAddresses
     */
    public function setInternetField5($InternetField5)
    {
      $this->InternetField5 = $InternetField5;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternetField6()
    {
      return $this->InternetField6;
    }

    /**
     * @param string $InternetField6
     * @return InternetAddresses
     */
    public function setInternetField6($InternetField6)
    {
      $this->InternetField6 = $InternetField6;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternetField7()
    {
      return $this->InternetField7;
    }

    /**
     * @param string $InternetField7
     * @return InternetAddresses
     */
    public function setInternetField7($InternetField7)
    {
      $this->InternetField7 = $InternetField7;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternetField8()
    {
      return $this->InternetField8;
    }

    /**
     * @param string $InternetField8
     * @return InternetAddresses
     */
    public function setInternetField8($InternetField8)
    {
      $this->InternetField8 = $InternetField8;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessengerAddress()
    {
      return $this->MessengerAddress;
    }

    /**
     * @param string $MessengerAddress
     * @return InternetAddresses
     */
    public function setMessengerAddress($MessengerAddress)
    {
      $this->MessengerAddress = $MessengerAddress;
      return $this;
    }

}
