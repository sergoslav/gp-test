<?php

class ArrayOfPurchaseInvoiceApplyReceipt implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PurchaseInvoiceApplyReceipt[] $PurchaseInvoiceApplyReceipt
     */
    protected $PurchaseInvoiceApplyReceipt = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PurchaseInvoiceApplyReceipt[]
     */
    public function getPurchaseInvoiceApplyReceipt()
    {
      return $this->PurchaseInvoiceApplyReceipt;
    }

    /**
     * @param PurchaseInvoiceApplyReceipt[] $PurchaseInvoiceApplyReceipt
     * @return ArrayOfPurchaseInvoiceApplyReceipt
     */
    public function setPurchaseInvoiceApplyReceipt(array $PurchaseInvoiceApplyReceipt = null)
    {
      $this->PurchaseInvoiceApplyReceipt = $PurchaseInvoiceApplyReceipt;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->PurchaseInvoiceApplyReceipt[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PurchaseInvoiceApplyReceipt
     */
    public function offsetGet($offset)
    {
      return $this->PurchaseInvoiceApplyReceipt[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PurchaseInvoiceApplyReceipt $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PurchaseInvoiceApplyReceipt[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PurchaseInvoiceApplyReceipt[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PurchaseInvoiceApplyReceipt Return the current element
     */
    public function current()
    {
      return current($this->PurchaseInvoiceApplyReceipt);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PurchaseInvoiceApplyReceipt);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PurchaseInvoiceApplyReceipt);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->PurchaseInvoiceApplyReceipt);
    }

    /**
     * Countable implementation
     *
     * @return PurchaseInvoiceApplyReceipt Return count of elements
     */
    public function count()
    {
      return count($this->PurchaseInvoiceApplyReceipt);
    }

}
