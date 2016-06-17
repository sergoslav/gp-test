<?php

class ArrayOfApplicantInterviewSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApplicantInterviewSummary[] $ApplicantInterviewSummary
     */
    protected $ApplicantInterviewSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicantInterviewSummary[]
     */
    public function getApplicantInterviewSummary()
    {
      return $this->ApplicantInterviewSummary;
    }

    /**
     * @param ApplicantInterviewSummary[] $ApplicantInterviewSummary
     * @return ArrayOfApplicantInterviewSummary
     */
    public function setApplicantInterviewSummary(array $ApplicantInterviewSummary = null)
    {
      $this->ApplicantInterviewSummary = $ApplicantInterviewSummary;
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
      return isset($this->ApplicantInterviewSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApplicantInterviewSummary
     */
    public function offsetGet($offset)
    {
      return $this->ApplicantInterviewSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApplicantInterviewSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ApplicantInterviewSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ApplicantInterviewSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApplicantInterviewSummary Return the current element
     */
    public function current()
    {
      return current($this->ApplicantInterviewSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ApplicantInterviewSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ApplicantInterviewSummary);
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
      reset($this->ApplicantInterviewSummary);
    }

    /**
     * Countable implementation
     *
     * @return ApplicantInterviewSummary Return count of elements
     */
    public function count()
    {
      return count($this->ApplicantInterviewSummary);
    }

}
