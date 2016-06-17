<?php

class ArrayOfGLTransactionLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GLTransactionLine[] $GLTransactionLine
     */
    protected $GLTransactionLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GLTransactionLine[]
     */
    public function getGLTransactionLine()
    {
      return $this->GLTransactionLine;
    }

    /**
     * @param GLTransactionLine[] $GLTransactionLine
     * @return ArrayOfGLTransactionLine
     */
    public function setGLTransactionLine(array $GLTransactionLine = null)
    {
      $this->GLTransactionLine = $GLTransactionLine;
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
      return isset($this->GLTransactionLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GLTransactionLine
     */
    public function offsetGet($offset)
    {
      return $this->GLTransactionLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GLTransactionLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->GLTransactionLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->GLTransactionLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GLTransactionLine Return the current element
     */
    public function current()
    {
      return current($this->GLTransactionLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GLTransactionLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GLTransactionLine);
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
      reset($this->GLTransactionLine);
    }

    /**
     * Countable implementation
     *
     * @return GLTransactionLine Return count of elements
     */
    public function count()
    {
      return count($this->GLTransactionLine);
    }

}
