<?php

class ArrayOfGLTransactionSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GLTransactionSummary[] $GLTransactionSummary
     */
    protected $GLTransactionSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GLTransactionSummary[]
     */
    public function getGLTransactionSummary()
    {
      return $this->GLTransactionSummary;
    }

    /**
     * @param GLTransactionSummary[] $GLTransactionSummary
     * @return ArrayOfGLTransactionSummary
     */
    public function setGLTransactionSummary(array $GLTransactionSummary = null)
    {
      $this->GLTransactionSummary = $GLTransactionSummary;
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
      return isset($this->GLTransactionSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GLTransactionSummary
     */
    public function offsetGet($offset)
    {
      return $this->GLTransactionSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GLTransactionSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->GLTransactionSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->GLTransactionSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GLTransactionSummary Return the current element
     */
    public function current()
    {
      return current($this->GLTransactionSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GLTransactionSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GLTransactionSummary);
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
      reset($this->GLTransactionSummary);
    }

    /**
     * Countable implementation
     *
     * @return GLTransactionSummary Return count of elements
     */
    public function count()
    {
      return count($this->GLTransactionSummary);
    }

}
