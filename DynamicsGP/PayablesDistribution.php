<?php

class PayablesDistribution extends Distribution
{

    /**
     * @var CompanyKey $CompanyKey
     */
    protected $CompanyKey = null;

    /**
     * @var boolean $IsPosted
     */
    protected $IsPosted = null;

    /**
     * @var PayablesDistributionKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $PostingDate
     */
    protected $PostingDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CompanyKey
     */
    public function getCompanyKey()
    {
      return $this->CompanyKey;
    }

    /**
     * @param CompanyKey $CompanyKey
     * @return PayablesDistribution
     */
    public function setCompanyKey($CompanyKey)
    {
      $this->CompanyKey = $CompanyKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPosted()
    {
      return $this->IsPosted;
    }

    /**
     * @param boolean $IsPosted
     * @return PayablesDistribution
     */
    public function setIsPosted($IsPosted)
    {
      $this->IsPosted = $IsPosted;
      return $this;
    }

    /**
     * @return PayablesDistributionKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PayablesDistributionKey $Key
     * @return PayablesDistribution
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPostingDate()
    {
      if ($this->PostingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PostingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PostingDate
     * @return PayablesDistribution
     */
    public function setPostingDate(\DateTime $PostingDate = null)
    {
      if ($PostingDate == null) {
       $this->PostingDate = null;
      } else {
        $this->PostingDate = $PostingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
