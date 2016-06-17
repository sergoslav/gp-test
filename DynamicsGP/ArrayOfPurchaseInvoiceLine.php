<?php

class ArrayOfPurchaseInvoiceLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PurchaseInvoiceLine[] $PurchaseInvoiceLine
     */
    protected $PurchaseInvoiceLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PurchaseInvoiceLine[]
     */
    public function getPurchaseInvoiceLine()
    {
      return $this->PurchaseInvoiceLine;
    }

    /**
     * @param PurchaseInvoiceLine[] $PurchaseInvoiceLine
     * @return ArrayOfPurchaseInvoiceLine
     */
    public function setPurchaseInvoiceLine(array $PurchaseInvoiceLine = null)
    {
      $this->PurchaseInvoiceLine = $PurchaseInvoiceLine;
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
      return isset($this->PurchaseInvoiceLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PurchaseInvoiceLine
     */
    public function offsetGet($offset)
    {
      return $this->PurchaseInvoiceLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PurchaseInvoiceLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PurchaseInvoiceLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PurchaseInvoiceLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PurchaseInvoiceLine Return the current element
     */
    public function current()
    {
      return current($this->PurchaseInvoiceLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PurchaseInvoiceLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PurchaseInvoiceLine);
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
      reset($this->PurchaseInvoiceLine);
    }

    /**
     * Countable implementation
     *
     * @return PurchaseInvoiceLine Return count of elements
     */
    public function count()
    {
      return count($this->PurchaseInvoiceLine);
    }

}
