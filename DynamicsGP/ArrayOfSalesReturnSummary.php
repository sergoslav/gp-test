<?php

class ArrayOfSalesReturnSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesReturnSummary[] $SalesReturnSummary
     */
    protected $SalesReturnSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesReturnSummary[]
     */
    public function getSalesReturnSummary()
    {
      return $this->SalesReturnSummary;
    }

    /**
     * @param SalesReturnSummary[] $SalesReturnSummary
     * @return ArrayOfSalesReturnSummary
     */
    public function setSalesReturnSummary(array $SalesReturnSummary = null)
    {
      $this->SalesReturnSummary = $SalesReturnSummary;
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
      return isset($this->SalesReturnSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesReturnSummary
     */
    public function offsetGet($offset)
    {
      return $this->SalesReturnSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesReturnSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesReturnSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesReturnSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesReturnSummary Return the current element
     */
    public function current()
    {
      return current($this->SalesReturnSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesReturnSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesReturnSummary);
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
      reset($this->SalesReturnSummary);
    }

    /**
     * Countable implementation
     *
     * @return SalesReturnSummary Return count of elements
     */
    public function count()
    {
      return count($this->SalesReturnSummary);
    }

}
