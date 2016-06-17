<?php

class ArrayOfCashReceiptSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CashReceiptSummary[] $CashReceiptSummary
     */
    protected $CashReceiptSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CashReceiptSummary[]
     */
    public function getCashReceiptSummary()
    {
      return $this->CashReceiptSummary;
    }

    /**
     * @param CashReceiptSummary[] $CashReceiptSummary
     * @return ArrayOfCashReceiptSummary
     */
    public function setCashReceiptSummary(array $CashReceiptSummary = null)
    {
      $this->CashReceiptSummary = $CashReceiptSummary;
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
      return isset($this->CashReceiptSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CashReceiptSummary
     */
    public function offsetGet($offset)
    {
      return $this->CashReceiptSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CashReceiptSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CashReceiptSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CashReceiptSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CashReceiptSummary Return the current element
     */
    public function current()
    {
      return current($this->CashReceiptSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CashReceiptSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CashReceiptSummary);
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
      reset($this->CashReceiptSummary);
    }

    /**
     * Countable implementation
     *
     * @return CashReceiptSummary Return count of elements
     */
    public function count()
    {
      return count($this->CashReceiptSummary);
    }

}
