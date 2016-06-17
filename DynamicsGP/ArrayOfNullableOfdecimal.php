<?php

class ArrayOfNullableOfdecimal implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var decimal[] $decimal
     */
    protected $decimal = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return decimal[]
     */
    public function getDecimal()
    {
      return $this->decimal;
    }

    /**
     * @param decimal[] $decimal
     * @return ArrayOfNullableOfdecimal
     */
    public function setDecimal(array $decimal = null)
    {
      $this->decimal = $decimal;
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
      return isset($this->decimal[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return decimal
     */
    public function offsetGet($offset)
    {
      return $this->decimal[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param decimal $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->decimal[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->decimal[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return decimal Return the current element
     */
    public function current()
    {
      return current($this->decimal);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->decimal);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->decimal);
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
      reset($this->decimal);
    }

    /**
     * Countable implementation
     *
     * @return decimal Return count of elements
     */
    public function count()
    {
      return count($this->decimal);
    }

}
