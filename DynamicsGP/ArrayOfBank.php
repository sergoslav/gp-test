<?php

class ArrayOfBank implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Bank[] $Bank
     */
    protected $Bank = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Bank[]
     */
    public function getBank()
    {
      return $this->Bank;
    }

    /**
     * @param Bank[] $Bank
     * @return ArrayOfBank
     */
    public function setBank(array $Bank = null)
    {
      $this->Bank = $Bank;
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
      return isset($this->Bank[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Bank
     */
    public function offsetGet($offset)
    {
      return $this->Bank[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Bank $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Bank[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Bank[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Bank Return the current element
     */
    public function current()
    {
      return current($this->Bank);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Bank);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Bank);
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
      reset($this->Bank);
    }

    /**
     * Countable implementation
     *
     * @return Bank Return count of elements
     */
    public function count()
    {
      return count($this->Bank);
    }

}
