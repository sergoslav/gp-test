<?php

class ArrayOfApplicantReferenceSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApplicantReferenceSummary[] $ApplicantReferenceSummary
     */
    protected $ApplicantReferenceSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicantReferenceSummary[]
     */
    public function getApplicantReferenceSummary()
    {
      return $this->ApplicantReferenceSummary;
    }

    /**
     * @param ApplicantReferenceSummary[] $ApplicantReferenceSummary
     * @return ArrayOfApplicantReferenceSummary
     */
    public function setApplicantReferenceSummary(array $ApplicantReferenceSummary = null)
    {
      $this->ApplicantReferenceSummary = $ApplicantReferenceSummary;
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
      return isset($this->ApplicantReferenceSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApplicantReferenceSummary
     */
    public function offsetGet($offset)
    {
      return $this->ApplicantReferenceSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApplicantReferenceSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ApplicantReferenceSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ApplicantReferenceSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApplicantReferenceSummary Return the current element
     */
    public function current()
    {
      return current($this->ApplicantReferenceSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ApplicantReferenceSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ApplicantReferenceSummary);
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
      reset($this->ApplicantReferenceSummary);
    }

    /**
     * Countable implementation
     *
     * @return ApplicantReferenceSummary Return count of elements
     */
    public function count()
    {
      return count($this->ApplicantReferenceSummary);
    }

}
