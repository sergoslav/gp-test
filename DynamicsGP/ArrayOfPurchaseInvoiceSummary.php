<?php

class ArrayOfPurchaseInvoiceSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PurchaseInvoiceSummary[] $PurchaseInvoiceSummary
     */
    protected $PurchaseInvoiceSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PurchaseInvoiceSummary[]
     */
    public function getPurchaseInvoiceSummary()
    {
      return $this->PurchaseInvoiceSummary;
    }

    /**
     * @param PurchaseInvoiceSummary[] $PurchaseInvoiceSummary
     * @return ArrayOfPurchaseInvoiceSummary
     */
    public function setPurchaseInvoiceSummary(array $PurchaseInvoiceSummary = null)
    {
      $this->PurchaseInvoiceSummary = $PurchaseInvoiceSummary;
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
      return isset($this->PurchaseInvoiceSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PurchaseInvoiceSummary
     */
    public function offsetGet($offset)
    {
      return $this->PurchaseInvoiceSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PurchaseInvoiceSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PurchaseInvoiceSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PurchaseInvoiceSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PurchaseInvoiceSummary Return the current element
     */
    public function current()
    {
      return current($this->PurchaseInvoiceSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PurchaseInvoiceSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PurchaseInvoiceSummary);
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
      reset($this->PurchaseInvoiceSummary);
    }

    /**
     * Countable implementation
     *
     * @return PurchaseInvoiceSummary Return count of elements
     */
    public function count()
    {
      return count($this->PurchaseInvoiceSummary);
    }

}
