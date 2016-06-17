<?php

class ArrayOfGLAccountSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GLAccountSummary[] $GLAccountSummary
     */
    protected $GLAccountSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GLAccountSummary[]
     */
    public function getGLAccountSummary()
    {
      return $this->GLAccountSummary;
    }

    /**
     * @param GLAccountSummary[] $GLAccountSummary
     * @return ArrayOfGLAccountSummary
     */
    public function setGLAccountSummary(array $GLAccountSummary = null)
    {
      $this->GLAccountSummary = $GLAccountSummary;
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
      return isset($this->GLAccountSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GLAccountSummary
     */
    public function offsetGet($offset)
    {
      return $this->GLAccountSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GLAccountSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->GLAccountSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->GLAccountSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GLAccountSummary Return the current element
     */
    public function current()
    {
      return current($this->GLAccountSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GLAccountSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GLAccountSummary);
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
      reset($this->GLAccountSummary);
    }

    /**
     * Countable implementation
     *
     * @return GLAccountSummary Return count of elements
     */
    public function count()
    {
      return count($this->GLAccountSummary);
    }

}
