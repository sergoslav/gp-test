<?php

class ArrayOfSalesQuoteSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesQuoteSummary[] $SalesQuoteSummary
     */
    protected $SalesQuoteSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesQuoteSummary[]
     */
    public function getSalesQuoteSummary()
    {
      return $this->SalesQuoteSummary;
    }

    /**
     * @param SalesQuoteSummary[] $SalesQuoteSummary
     * @return ArrayOfSalesQuoteSummary
     */
    public function setSalesQuoteSummary(array $SalesQuoteSummary = null)
    {
      $this->SalesQuoteSummary = $SalesQuoteSummary;
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
      return isset($this->SalesQuoteSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesQuoteSummary
     */
    public function offsetGet($offset)
    {
      return $this->SalesQuoteSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesQuoteSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesQuoteSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesQuoteSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesQuoteSummary Return the current element
     */
    public function current()
    {
      return current($this->SalesQuoteSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesQuoteSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesQuoteSummary);
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
      reset($this->SalesQuoteSummary);
    }

    /**
     * Countable implementation
     *
     * @return SalesQuoteSummary Return count of elements
     */
    public function count()
    {
      return count($this->SalesQuoteSummary);
    }

}
