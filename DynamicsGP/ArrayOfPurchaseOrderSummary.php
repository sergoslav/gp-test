<?php

class ArrayOfPurchaseOrderSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PurchaseOrderSummary[] $PurchaseOrderSummary
     */
    protected $PurchaseOrderSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PurchaseOrderSummary[]
     */
    public function getPurchaseOrderSummary()
    {
      return $this->PurchaseOrderSummary;
    }

    /**
     * @param PurchaseOrderSummary[] $PurchaseOrderSummary
     * @return ArrayOfPurchaseOrderSummary
     */
    public function setPurchaseOrderSummary(array $PurchaseOrderSummary = null)
    {
      $this->PurchaseOrderSummary = $PurchaseOrderSummary;
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
      return isset($this->PurchaseOrderSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PurchaseOrderSummary
     */
    public function offsetGet($offset)
    {
      return $this->PurchaseOrderSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PurchaseOrderSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PurchaseOrderSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PurchaseOrderSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PurchaseOrderSummary Return the current element
     */
    public function current()
    {
      return current($this->PurchaseOrderSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PurchaseOrderSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PurchaseOrderSummary);
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
      reset($this->PurchaseOrderSummary);
    }

    /**
     * Countable implementation
     *
     * @return PurchaseOrderSummary Return count of elements
     */
    public function count()
    {
      return count($this->PurchaseOrderSummary);
    }

}
