<?php

class GLFinancialAccount extends GLAccount
{

    /**
     * @var PostingLevel $PostInventoryIn
     */
    protected $PostInventoryIn = null;

    /**
     * @var PostingLevel $PostPayrollIn
     */
    protected $PostPayrollIn = null;

    /**
     * @var PostingLevel $PostPurchasingIn
     */
    protected $PostPurchasingIn = null;

    /**
     * @var PostingLevel $PostSalesIn
     */
    protected $PostSalesIn = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PostingLevel
     */
    public function getPostInventoryIn()
    {
      return $this->PostInventoryIn;
    }

    /**
     * @param PostingLevel $PostInventoryIn
     * @return GLFinancialAccount
     */
    public function setPostInventoryIn($PostInventoryIn)
    {
      $this->PostInventoryIn = $PostInventoryIn;
      return $this;
    }

    /**
     * @return PostingLevel
     */
    public function getPostPayrollIn()
    {
      return $this->PostPayrollIn;
    }

    /**
     * @param PostingLevel $PostPayrollIn
     * @return GLFinancialAccount
     */
    public function setPostPayrollIn($PostPayrollIn)
    {
      $this->PostPayrollIn = $PostPayrollIn;
      return $this;
    }

    /**
     * @return PostingLevel
     */
    public function getPostPurchasingIn()
    {
      return $this->PostPurchasingIn;
    }

    /**
     * @param PostingLevel $PostPurchasingIn
     * @return GLFinancialAccount
     */
    public function setPostPurchasingIn($PostPurchasingIn)
    {
      $this->PostPurchasingIn = $PostPurchasingIn;
      return $this;
    }

    /**
     * @return PostingLevel
     */
    public function getPostSalesIn()
    {
      return $this->PostSalesIn;
    }

    /**
     * @param PostingLevel $PostSalesIn
     * @return GLFinancialAccount
     */
    public function setPostSalesIn($PostSalesIn)
    {
      $this->PostSalesIn = $PostSalesIn;
      return $this;
    }

}
