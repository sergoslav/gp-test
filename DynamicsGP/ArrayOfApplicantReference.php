<?php

class ArrayOfApplicantReference implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApplicantReference[] $ApplicantReference
     */
    protected $ApplicantReference = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicantReference[]
     */
    public function getApplicantReference()
    {
      return $this->ApplicantReference;
    }

    /**
     * @param ApplicantReference[] $ApplicantReference
     * @return ArrayOfApplicantReference
     */
    public function setApplicantReference(array $ApplicantReference = null)
    {
      $this->ApplicantReference = $ApplicantReference;
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
      return isset($this->ApplicantReference[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApplicantReference
     */
    public function offsetGet($offset)
    {
      return $this->ApplicantReference[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApplicantReference $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ApplicantReference[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ApplicantReference[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApplicantReference Return the current element
     */
    public function current()
    {
      return current($this->ApplicantReference);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ApplicantReference);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ApplicantReference);
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
      reset($this->ApplicantReference);
    }

    /**
     * Countable implementation
     *
     * @return ApplicantReference Return count of elements
     */
    public function count()
    {
      return count($this->ApplicantReference);
    }

}
