<?php

class ArrayOfGLFixedAllocationAccountSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GLFixedAllocationAccountSummary[] $GLFixedAllocationAccountSummary
     */
    protected $GLFixedAllocationAccountSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GLFixedAllocationAccountSummary[]
     */
    public function getGLFixedAllocationAccountSummary()
    {
      return $this->GLFixedAllocationAccountSummary;
    }

    /**
     * @param GLFixedAllocationAccountSummary[] $GLFixedAllocationAccountSummary
     * @return ArrayOfGLFixedAllocationAccountSummary
     */
    public function setGLFixedAllocationAccountSummary(array $GLFixedAllocationAccountSummary = null)
    {
      $this->GLFixedAllocationAccountSummary = $GLFixedAllocationAccountSummary;
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
      return isset($this->GLFixedAllocationAccountSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GLFixedAllocationAccountSummary
     */
    public function offsetGet($offset)
    {
      return $this->GLFixedAllocationAccountSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GLFixedAllocationAccountSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->GLFixedAllocationAccountSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->GLFixedAllocationAccountSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GLFixedAllocationAccountSummary Return the current element
     */
    public function current()
    {
      return current($this->GLFixedAllocationAccountSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GLFixedAllocationAccountSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GLFixedAllocationAccountSummary);
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
      reset($this->GLFixedAllocationAccountSummary);
    }

    /**
     * Countable implementation
     *
     * @return GLFixedAllocationAccountSummary Return count of elements
     */
    public function count()
    {
      return count($this->GLFixedAllocationAccountSummary);
    }

}
