<?php

class ArrayOfPhoneNumber implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PhoneNumber[] $PhoneNumber
     */
    protected $PhoneNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PhoneNumber[]
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param PhoneNumber[] $PhoneNumber
     * @return ArrayOfPhoneNumber
     */
    public function setPhoneNumber(array $PhoneNumber = null)
    {
      $this->PhoneNumber = $PhoneNumber;
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
      return isset($this->PhoneNumber[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PhoneNumber
     */
    public function offsetGet($offset)
    {
      return $this->PhoneNumber[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PhoneNumber $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PhoneNumber[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PhoneNumber[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PhoneNumber Return the current element
     */
    public function current()
    {
      return current($this->PhoneNumber);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PhoneNumber);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PhoneNumber);
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
      reset($this->PhoneNumber);
    }

    /**
     * Countable implementation
     *
     * @return PhoneNumber Return count of elements
     */
    public function count()
    {
      return count($this->PhoneNumber);
    }

}
