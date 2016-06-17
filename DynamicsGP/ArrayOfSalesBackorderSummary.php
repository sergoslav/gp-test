<?php

class ArrayOfSalesBackorderSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesBackorderSummary[] $SalesBackorderSummary
     */
    protected $SalesBackorderSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesBackorderSummary[]
     */
    public function getSalesBackorderSummary()
    {
      return $this->SalesBackorderSummary;
    }

    /**
     * @param SalesBackorderSummary[] $SalesBackorderSummary
     * @return ArrayOfSalesBackorderSummary
     */
    public function setSalesBackorderSummary(array $SalesBackorderSummary = null)
    {
      $this->SalesBackorderSummary = $SalesBackorderSummary;
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
      return isset($this->SalesBackorderSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesBackorderSummary
     */
    public function offsetGet($offset)
    {
      return $this->SalesBackorderSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesBackorderSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesBackorderSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesBackorderSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesBackorderSummary Return the current element
     */
    public function current()
    {
      return current($this->SalesBackorderSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesBackorderSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesBackorderSummary);
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
      reset($this->SalesBackorderSummary);
    }

    /**
     * Countable implementation
     *
     * @return SalesBackorderSummary Return count of elements
     */
    public function count()
    {
      return count($this->SalesBackorderSummary);
    }

}
