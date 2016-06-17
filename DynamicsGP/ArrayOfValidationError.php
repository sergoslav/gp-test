<?php

class ArrayOfValidationError implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ValidationError[] $ValidationError
     */
    protected $ValidationError = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValidationError[]
     */
    public function getValidationError()
    {
      return $this->ValidationError;
    }

    /**
     * @param ValidationError[] $ValidationError
     * @return ArrayOfValidationError
     */
    public function setValidationError(array $ValidationError = null)
    {
      $this->ValidationError = $ValidationError;
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
      return isset($this->ValidationError[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ValidationError
     */
    public function offsetGet($offset)
    {
      return $this->ValidationError[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ValidationError $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ValidationError[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ValidationError[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ValidationError Return the current element
     */
    public function current()
    {
      return current($this->ValidationError);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ValidationError);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ValidationError);
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
      reset($this->ValidationError);
    }

    /**
     * Countable implementation
     *
     * @return ValidationError Return count of elements
     */
    public function count()
    {
      return count($this->ValidationError);
    }

}
