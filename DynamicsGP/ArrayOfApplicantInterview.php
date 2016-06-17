<?php

class ArrayOfApplicantInterview implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApplicantInterview[] $ApplicantInterview
     */
    protected $ApplicantInterview = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicantInterview[]
     */
    public function getApplicantInterview()
    {
      return $this->ApplicantInterview;
    }

    /**
     * @param ApplicantInterview[] $ApplicantInterview
     * @return ArrayOfApplicantInterview
     */
    public function setApplicantInterview(array $ApplicantInterview = null)
    {
      $this->ApplicantInterview = $ApplicantInterview;
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
      return isset($this->ApplicantInterview[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApplicantInterview
     */
    public function offsetGet($offset)
    {
      return $this->ApplicantInterview[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApplicantInterview $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ApplicantInterview[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ApplicantInterview[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApplicantInterview Return the current element
     */
    public function current()
    {
      return current($this->ApplicantInterview);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ApplicantInterview);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ApplicantInterview);
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
      reset($this->ApplicantInterview);
    }

    /**
     * Countable implementation
     *
     * @return ApplicantInterview Return count of elements
     */
    public function count()
    {
      return count($this->ApplicantInterview);
    }

}
