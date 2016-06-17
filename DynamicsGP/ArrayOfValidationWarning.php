<?php

class ArrayOfValidationWarning implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ValidationWarning[] $ValidationWarning
     */
    protected $ValidationWarning = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValidationWarning[]
     */
    public function getValidationWarning()
    {
      return $this->ValidationWarning;
    }

    /**
     * @param ValidationWarning[] $ValidationWarning
     * @return ArrayOfValidationWarning
     */
    public function setValidationWarning(array $ValidationWarning = null)
    {
      $this->ValidationWarning = $ValidationWarning;
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
      return isset($this->ValidationWarning[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ValidationWarning
     */
    public function offsetGet($offset)
    {
      return $this->ValidationWarning[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ValidationWarning $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ValidationWarning[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ValidationWarning[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ValidationWarning Return the current element
     */
    public function current()
    {
      return current($this->ValidationWarning);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ValidationWarning);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ValidationWarning);
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
      reset($this->ValidationWarning);
    }

    /**
     * Countable implementation
     *
     * @return ValidationWarning Return count of elements
     */
    public function count()
    {
      return count($this->ValidationWarning);
    }

}
