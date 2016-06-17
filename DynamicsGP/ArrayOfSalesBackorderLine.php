<?php

class ArrayOfSalesBackorderLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesBackorderLine[] $SalesBackorderLine
     */
    protected $SalesBackorderLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesBackorderLine[]
     */
    public function getSalesBackorderLine()
    {
      return $this->SalesBackorderLine;
    }

    /**
     * @param SalesBackorderLine[] $SalesBackorderLine
     * @return ArrayOfSalesBackorderLine
     */
    public function setSalesBackorderLine(array $SalesBackorderLine = null)
    {
      $this->SalesBackorderLine = $SalesBackorderLine;
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
      return isset($this->SalesBackorderLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesBackorderLine
     */
    public function offsetGet($offset)
    {
      return $this->SalesBackorderLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesBackorderLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesBackorderLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesBackorderLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesBackorderLine Return the current element
     */
    public function current()
    {
      return current($this->SalesBackorderLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesBackorderLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesBackorderLine);
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
      reset($this->SalesBackorderLine);
    }

    /**
     * Countable implementation
     *
     * @return SalesBackorderLine Return count of elements
     */
    public function count()
    {
      return count($this->SalesBackorderLine);
    }

}
