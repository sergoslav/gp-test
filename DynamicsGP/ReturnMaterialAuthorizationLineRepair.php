<?php

class ReturnMaterialAuthorizationLineRepair
{

    /**
     * @var MoneyAmount $Cost
     */
    protected $Cost = null;

    /**
     * @var SalesDocumentKey $DocumentKey
     */
    protected $DocumentKey = null;

    /**
     * @var MoneyAmount $FlatRatePrice
     */
    protected $FlatRatePrice = null;

    /**
     * @var ItemKey $InvoiceItemKey
     */
    protected $InvoiceItemKey = null;

    /**
     * @var MoneyAmount $NotToExceedPrice
     */
    protected $NotToExceedPrice = null;

    /**
     * @var MoneyAmount $Price
     */
    protected $Price = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MoneyAmount
     */
    public function getCost()
    {
      return $this->Cost;
    }

    /**
     * @param MoneyAmount $Cost
     * @return ReturnMaterialAuthorizationLineRepair
     */
    public function setCost($Cost)
    {
      $this->Cost = $Cost;
      return $this;
    }

    /**
     * @return SalesDocumentKey
     */
    public function getDocumentKey()
    {
      return $this->DocumentKey;
    }

    /**
     * @param SalesDocumentKey $DocumentKey
     * @return ReturnMaterialAuthorizationLineRepair
     */
    public function setDocumentKey($DocumentKey)
    {
      $this->DocumentKey = $DocumentKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getFlatRatePrice()
    {
      return $this->FlatRatePrice;
    }

    /**
     * @param MoneyAmount $FlatRatePrice
     * @return ReturnMaterialAuthorizationLineRepair
     */
    public function setFlatRatePrice($FlatRatePrice)
    {
      $this->FlatRatePrice = $FlatRatePrice;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getInvoiceItemKey()
    {
      return $this->InvoiceItemKey;
    }

    /**
     * @param ItemKey $InvoiceItemKey
     * @return ReturnMaterialAuthorizationLineRepair
     */
    public function setInvoiceItemKey($InvoiceItemKey)
    {
      $this->InvoiceItemKey = $InvoiceItemKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getNotToExceedPrice()
    {
      return $this->NotToExceedPrice;
    }

    /**
     * @param MoneyAmount $NotToExceedPrice
     * @return ReturnMaterialAuthorizationLineRepair
     */
    public function setNotToExceedPrice($NotToExceedPrice)
    {
      $this->NotToExceedPrice = $NotToExceedPrice;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param MoneyAmount $Price
     * @return ReturnMaterialAuthorizationLineRepair
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

}
