<?php

class ArrayOfApplicantApplicationSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApplicantApplicationSummary[] $ApplicantApplicationSummary
     */
    protected $ApplicantApplicationSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicantApplicationSummary[]
     */
    public function getApplicantApplicationSummary()
    {
      return $this->ApplicantApplicationSummary;
    }

    /**
     * @param ApplicantApplicationSummary[] $ApplicantApplicationSummary
     * @return ArrayOfApplicantApplicationSummary
     */
    public function setApplicantApplicationSummary(array $ApplicantApplicationSummary = null)
    {
      $this->ApplicantApplicationSummary = $ApplicantApplicationSummary;
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
      return isset($this->ApplicantApplicationSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApplicantApplicationSummary
     */
    public function offsetGet($offset)
    {
      return $this->ApplicantApplicationSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApplicantApplicationSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ApplicantApplicationSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ApplicantApplicationSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApplicantApplicationSummary Return the current element
     */
    public function current()
    {
      return current($this->ApplicantApplicationSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ApplicantApplicationSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ApplicantApplicationSummary);
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
      reset($this->ApplicantApplicationSummary);
    }

    /**
     * Countable implementation
     *
     * @return ApplicantApplicationSummary Return count of elements
     */
    public function count()
    {
      return count($this->ApplicantApplicationSummary);
    }

}
