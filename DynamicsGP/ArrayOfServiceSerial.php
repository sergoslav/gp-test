<?php

class ArrayOfServiceSerial implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceSerial[] $ServiceSerial
     */
    protected $ServiceSerial = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceSerial[]
     */
    public function getServiceSerial()
    {
      return $this->ServiceSerial;
    }

    /**
     * @param ServiceSerial[] $ServiceSerial
     * @return ArrayOfServiceSerial
     */
    public function setServiceSerial(array $ServiceSerial = null)
    {
      $this->ServiceSerial = $ServiceSerial;
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
      return isset($this->ServiceSerial[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceSerial
     */
    public function offsetGet($offset)
    {
      return $this->ServiceSerial[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceSerial $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceSerial[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceSerial[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceSerial Return the current element
     */
    public function current()
    {
      return current($this->ServiceSerial);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceSerial);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceSerial);
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
      reset($this->ServiceSerial);
    }

    /**
     * Countable implementation
     *
     * @return ServiceSerial Return count of elements
     */
    public function count()
    {
      return count($this->ServiceSerial);
    }

}
