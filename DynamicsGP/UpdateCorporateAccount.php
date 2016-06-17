<?php

class UpdateCorporateAccount
{

    /**
     * @var CorporateAccount $corporateAccount
     */
    protected $corporateAccount = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param CorporateAccount $corporateAccount
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($corporateAccount, $context, $policy)
    {
      $this->corporateAccount = $corporateAccount;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return CorporateAccount
     */
    public function getCorporateAccount()
    {
      return $this->corporateAccount;
    }

    /**
     * @param CorporateAccount $corporateAccount
     * @return UpdateCorporateAccount
     */
    public function setCorporateAccount($corporateAccount)
    {
      $this->corporateAccount = $corporateAccount;
      return $this;
    }

    /**
     * @return Context
     */
    public function getContext()
    {
      return $this->context;
    }

    /**
     * @param Context $context
     * @return UpdateCorporateAccount
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return Policy
     */
    public function getPolicy()
    {
      return $this->policy;
    }

    /**
     * @param Policy $policy
     * @return UpdateCorporateAccount
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
