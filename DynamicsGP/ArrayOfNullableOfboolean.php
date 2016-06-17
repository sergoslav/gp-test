<?php

class ArrayOfNullableOfboolean implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var boolean[] $boolean
     */
    protected $boolean = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean[]
     */
    public function getBoolean()
    {
      return $this->boolean;
    }

    /**
     * @param boolean[] $boolean
     * @return ArrayOfNullableOfboolean
     */
    public function setBoolean(array $boolean = null)
    {
      $this->boolean = $boolean;
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
      return isset($this->boolean[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return boolean
     */
    public function offsetGet($offset)
    {
      return $this->boolean[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param boolean $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->boolean[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->boolean[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the current element
     */
    public function current()
    {
      return current($this->boolean);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->boolean);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->boolean);
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
      reset($this->boolean);
    }

    /**
     * Countable implementation
     *
     * @return boolean Return count of elements
     */
    public function count()
    {
      return count($this->boolean);
    }

}
