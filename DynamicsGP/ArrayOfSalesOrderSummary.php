<?php

class ArrayOfSalesOrderSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesOrderSummary[] $SalesOrderSummary
     */
    protected $SalesOrderSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesOrderSummary[]
     */
    public function getSalesOrderSummary()
    {
      return $this->SalesOrderSummary;
    }

    /**
     * @param SalesOrderSummary[] $SalesOrderSummary
     * @return ArrayOfSalesOrderSummary
     */
    public function setSalesOrderSummary(array $SalesOrderSummary = null)
    {
      $this->SalesOrderSummary = $SalesOrderSummary;
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
      return isset($this->SalesOrderSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesOrderSummary
     */
    public function offsetGet($offset)
    {
      return $this->SalesOrderSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesOrderSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesOrderSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesOrderSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesOrderSummary Return the current element
     */
    public function current()
    {
      return current($this->SalesOrderSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesOrderSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesOrderSummary);
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
      reset($this->SalesOrderSummary);
    }

    /**
     * Countable implementation
     *
     * @return SalesOrderSummary Return count of elements
     */
    public function count()
    {
      return count($this->SalesOrderSummary);
    }

}
