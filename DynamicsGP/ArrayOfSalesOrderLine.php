<?php

class ArrayOfSalesOrderLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesOrderLine[] $SalesOrderLine
     */
    protected $SalesOrderLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesOrderLine[]
     */
    public function getSalesOrderLine()
    {
      return $this->SalesOrderLine;
    }

    /**
     * @param SalesOrderLine[] $SalesOrderLine
     * @return ArrayOfSalesOrderLine
     */
    public function setSalesOrderLine(array $SalesOrderLine = null)
    {
      $this->SalesOrderLine = $SalesOrderLine;
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
      return isset($this->SalesOrderLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesOrderLine
     */
    public function offsetGet($offset)
    {
      return $this->SalesOrderLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesOrderLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesOrderLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesOrderLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesOrderLine Return the current element
     */
    public function current()
    {
      return current($this->SalesOrderLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesOrderLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesOrderLine);
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
      reset($this->SalesOrderLine);
    }

    /**
     * Countable implementation
     *
     * @return SalesOrderLine Return count of elements
     */
    public function count()
    {
      return count($this->SalesOrderLine);
    }

}
