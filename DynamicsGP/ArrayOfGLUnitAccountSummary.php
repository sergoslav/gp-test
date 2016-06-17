<?php

class ArrayOfGLUnitAccountSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GLUnitAccountSummary[] $GLUnitAccountSummary
     */
    protected $GLUnitAccountSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GLUnitAccountSummary[]
     */
    public function getGLUnitAccountSummary()
    {
      return $this->GLUnitAccountSummary;
    }

    /**
     * @param GLUnitAccountSummary[] $GLUnitAccountSummary
     * @return ArrayOfGLUnitAccountSummary
     */
    public function setGLUnitAccountSummary(array $GLUnitAccountSummary = null)
    {
      $this->GLUnitAccountSummary = $GLUnitAccountSummary;
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
      return isset($this->GLUnitAccountSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GLUnitAccountSummary
     */
    public function offsetGet($offset)
    {
      return $this->GLUnitAccountSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GLUnitAccountSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->GLUnitAccountSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->GLUnitAccountSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GLUnitAccountSummary Return the current element
     */
    public function current()
    {
      return current($this->GLUnitAccountSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GLUnitAccountSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GLUnitAccountSummary);
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
      reset($this->GLUnitAccountSummary);
    }

    /**
     * Countable implementation
     *
     * @return GLUnitAccountSummary Return count of elements
     */
    public function count()
    {
      return count($this->GLUnitAccountSummary);
    }

}
