<?php

class ArrayOfGLAccountFormat implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GLAccountFormat[] $GLAccountFormat
     */
    protected $GLAccountFormat = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GLAccountFormat[]
     */
    public function getGLAccountFormat()
    {
      return $this->GLAccountFormat;
    }

    /**
     * @param GLAccountFormat[] $GLAccountFormat
     * @return ArrayOfGLAccountFormat
     */
    public function setGLAccountFormat(array $GLAccountFormat = null)
    {
      $this->GLAccountFormat = $GLAccountFormat;
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
      return isset($this->GLAccountFormat[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GLAccountFormat
     */
    public function offsetGet($offset)
    {
      return $this->GLAccountFormat[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GLAccountFormat $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->GLAccountFormat[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->GLAccountFormat[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GLAccountFormat Return the current element
     */
    public function current()
    {
      return current($this->GLAccountFormat);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GLAccountFormat);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GLAccountFormat);
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
      reset($this->GLAccountFormat);
    }

    /**
     * Countable implementation
     *
     * @return GLAccountFormat Return count of elements
     */
    public function count()
    {
      return count($this->GLAccountFormat);
    }

}
