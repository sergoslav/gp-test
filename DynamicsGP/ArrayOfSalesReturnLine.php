<?php

class ArrayOfSalesReturnLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesReturnLine[] $SalesReturnLine
     */
    protected $SalesReturnLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesReturnLine[]
     */
    public function getSalesReturnLine()
    {
      return $this->SalesReturnLine;
    }

    /**
     * @param SalesReturnLine[] $SalesReturnLine
     * @return ArrayOfSalesReturnLine
     */
    public function setSalesReturnLine(array $SalesReturnLine = null)
    {
      $this->SalesReturnLine = $SalesReturnLine;
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
      return isset($this->SalesReturnLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesReturnLine
     */
    public function offsetGet($offset)
    {
      return $this->SalesReturnLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesReturnLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesReturnLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesReturnLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesReturnLine Return the current element
     */
    public function current()
    {
      return current($this->SalesReturnLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesReturnLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesReturnLine);
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
      reset($this->SalesReturnLine);
    }

    /**
     * Countable implementation
     *
     * @return SalesReturnLine Return count of elements
     */
    public function count()
    {
      return count($this->SalesReturnLine);
    }

}
